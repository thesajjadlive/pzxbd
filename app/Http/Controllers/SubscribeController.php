<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;

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
}
