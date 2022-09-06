<?php

namespace App\Http\Controllers;

use domain\Facades\RequestFacade;
use Illuminate\Http\Request;

class RequestController extends ParentController
{
    public function index()
    {
        $response['requests'] =RequestFacade::all();
        return view('pages.requests.index')->with($response);
    }

    public function new()
    {
        return view('pages.requests.new');
    }

    public function store(Request $request)
    {
        RequestFacade::store($request->all());
        return redirect()->route('requests.all');

    }

    public function edit($Request_id)
    {
        $response['requests'] = RequestFacade::get($Request_id);
        return view('pages.requests.edit')->with($response);
    }

    public function delete($Request_id)
    {
        RequestFacade::delete($Request_id);
        return redirect()->back();
    }

    public function update(Request $request,$Request_id)
    {
        RequestFacade::update($request->all(), $Request_id);
        return redirect()->route('requests.all');
    }

}
