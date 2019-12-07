<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Order List';
        $orders = new Order();
        $orders = $orders->with(['order_detail','customer']);

        //search order
        if ($request->has('search') && $request->search != null){
            $orders = $orders->where('order_number','like','%'.$request->search.'%');
        }

        $orders = $orders->OrderBy('id','desc')->paginate(10);

        //search result next page
        if (isset($request->status) || $request->search) {
            $render['search'] = $request->search;
            $orders = $orders->appends($render);
        }

        $data['orders'] = $orders;
        $data['serial'] = managePagination($orders);

        return view('backend.order.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Order Details';
        $data['order'] = Order::findOrFail($id);
        return view('backend.order.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function myorder()
    {
        $id = Auth::guard('customer')->user()->id;
        $orders = new Order();
        $orders = $orders->with(['order_detail']);
        $orders = $orders->where('customer_id', $id)->orderBy('id','DESC')->paginate(10);

        $data['orders'] = $orders;
        $data['serial'] = managePagination($orders);

        return view('customer.order.index',$data);
    }

    public function myorder_details($id)
    {
        $data['order'] = Order::findOrFail($id);
        return view('customer.order.show',$data);
    }

}
