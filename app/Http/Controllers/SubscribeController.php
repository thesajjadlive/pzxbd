<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Setting;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        session()->flash('message','Thank you for your subscription.');
        $request->validate([
            'email'=>'unique:subscribes|email',
        ]);
        $data= $request->except('_token');
        Subscribe::create($data);

        return redirect()->back();
    }

    public function contact_store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $setting = Setting::orderBy('id','desc')->first();
        $email =$setting->email_2;

        Mail::to($email)->send(new ContactUs($data));
        session()->flash('message','Thank you for your message.');
        return redirect()->back();
    }
}
