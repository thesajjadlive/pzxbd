<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Settings';
        $data['settings'] = Setting::orderBy('id','DESC')->get();

        return view('backend.setting.index',$data);
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

    public function add()
    {
        $data['title'] = 'Add Information';

        return view('backend.setting.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'address'=>'required',
            'phone_1'=>'required',
            'phone_2'=>'required',
            'email_1'=>'required|email',
            'email_2'=>'required|email',
            'skype_1'=>'required',
            'skype_2'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
            'title'=>'required',
            'history'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'shipping'=>'required|integer',
            'free_shipping'=>'required|integer',
        ]);

        $setting = $request->except('_token');
        Setting::create($setting);
        session()->flash('message','Setting info added Successfully');
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $data['title'] = 'Edit Information';
        $data['setting'] = $setting;

        return view('backend.setting.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'address'=>'required',
            'phone_1'=>'required',
            'phone_2'=>'required',
            'email_1'=>'required|email',
            'email_2'=>'required|email',
            'skype_1'=>'required',
            'skype_2'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
            'title'=>'required',
            'history'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'shipping'=>'required|integer',
            'free_shipping'=>'required|integer',
        ]);

        $setting_data = $request->except('_token');
        $setting->update($setting_data);
        session()->flash('message','Setting info updated Successfully');
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
