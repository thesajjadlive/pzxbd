<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Mail\OrderPlaceMail;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Customers List';
        $customers = new Customer();

        //search order
        if ($request->has('search') && $request->search != null){
            $customers = $customers->where('first_name','like','%'.$request->search.'%');
        }

        $customers = $customers->OrderBy('id','desc')->paginate(10);

        //search result next page
        if (isset($request->status) || $request->search) {
            $render['search'] = $request->search;
            $customers = $customers->appends($render);
        }

        $data['customers'] = $customers;
        $data['serial'] = managePagination($customers);

        return view('backend.customer.index',$data);
    }

    public function info($id)
    {
        $data['title'] = 'Customer Details';
        $data['customer'] = Customer::findOrFail($id);
        return view('backend.customer.show',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => 'required',
            'street_address' => 'required',
            'district' => 'required',
            'zip' => 'required',
        ]);

        //customer store
        $data = $request->except('_token','password');
        $data['password'] = bcrypt($request->password);
        Customer::create($data);

        session()->flash('message','Thank you for your registration.');
        return redirect()->route('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         //Transaction start
         DB::beginTransaction();
         try {

             $customer_id = Auth::guard('customer')->user()->id;


             //order store
             $order['order_number'] = 'OID-' . time();
             $order['customer_id'] = $customer_id;
             $order['date'] = now();
             $order_id = Order::insertGetId($order);

             //dd($order_id);


             //order details store
             $cart = session('cart');
             $total = 0;
             $sub_total = 0;

             $setting = Setting::orderBy('id','desc')->first();
             $shipping = $setting->shipping;
             $free_shipping = $setting->free_shipping;

             if (count($cart)) {
                 foreach ($cart as $item) {
                     $product = Product::findOrFail($item['product_id']);
                     if ($product->stock>=$item['quantity']){
                     $ordre_details['order_id'] = $order_id;
                     $ordre_details['product_id'] = $item['product_id'];
                     $ordre_details['product_name'] = $item['name'];
                     $ordre_details['price'] = $item['price'];
                     $ordre_details['quantity'] = $item['quantity'];
                     $ordre_details['shipping'] = $item['quantity'] * $shipping;
                     $ordre_details['total'] = $item['quantity'] * $item['price'];

                     OrderDetail::create($ordre_details);

                     $sub_total += $ordre_details['total'];
                     $total += $ordre_details['total']+$ordre_details['shipping'];

                     //product stock update
                         $product->stock = $product->stock-$item['quantity'];
                         $product->save();
                 }
                     else{
                     session()->flash('message',ucfirst($item['name']).' '.'is out of stock');
                     return redirect()->route('cart');
                     }
                 }
             }

             if ($sub_total>= $free_shipping){

                 Order::findOrFail($order_id)->update(['total_price' => $sub_total]);
             }
             else{
                Order::findOrFail($order_id)->update(['total_price' => $total]);
             }

        //Transaction end
            DB::commit();

            //Confirmation mail send
             $customer = Customer::findOrFail($customer_id);
            Mail::to($customer->email)->send(new OrderPlaceMail($order_id));

            return redirect()->route('payment',[$customer_id,$order_id]);

         }catch (\Exception $exception)
         {
             DB::rollBack();
             Log::error('CustomerController@store Message-'.$exception->getMessage());
             session()->flash('message','Something Went Wrong');
             return redirect()->back();
         }
        //Transaction end

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $id = Auth::guard('customer')->user()->id;
        $data['customer'] = Customer::findOrFail($id);
        return view('customer.index',$data);
    }

    public function show(Customer $customer)
    {
        $id = Auth::guard('customer')->user()->id;
        $data['customer'] = $customer->findOrFail($id);
        return view('customer.info',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['customer'] = Customer::findOrFail($id);
        return view('customer.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id) ;

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'confirmed',
            'phone' => 'required',
            'street_address' => 'required',
            'district' => 'required',
            'zip' => 'required'
        ]);

        //customer update
        $data = $request->except('_token','password');

        if ($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }

        $customer->update($data);

        session()->flash('message','Information Updated Successfully');
        return redirect()->route('user.details');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
