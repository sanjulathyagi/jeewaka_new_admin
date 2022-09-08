<?php

namespace App\Http\Controllers;

use domain\Facades\SettingFacade;
use Illuminate\Http\Request;

class SettingController extends ParentController
{
    public function index()
    {
        $response['settings'] =SettingFacade::all();
        return view('pages.settings.index')->with($response);
    }

    public function new()
    {
        return view('pages.settings.new');
    }

    public function store(Request $request)
    {
        SettingFacade::store($request->all());
        return redirect()->route('settings.all');

    }

    public function edit($setting_id)
    {
        $response['settings'] = SettingFacade::get($setting_id);
        return view('pages.settings.edit')->with($response);
    }

    public function delete($setting_id)
    {
        SettingFacade::delete($setting_id);
        return redirect()->back();
    }

    public function update(Request $request,$setting_id)
    {
        SettingFacade::update($request->all(), $setting_id);
        return redirect()->route('settings.all');
    }

}
