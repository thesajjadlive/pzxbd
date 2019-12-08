<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title']='Dashboard';
        $data['pending']= Order::where('status','pending')->get();
        $data['processing']= Order::where('status','processing')->get();
        $data['shipping']= Order::where('status','shipping')->get();
        $data['delivered']= Order::where('status','delivered')->get();
        return view('backend.dashboard',$data);
    }


    public function test()
    {
        $data['title'] = 'Test';
        return User::all();
    }
}
