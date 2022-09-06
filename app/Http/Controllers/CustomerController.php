<?php

namespace App\Http\Controllers;

use domain\Facades\CustomerFacade;
use Illuminate\Http\Request;

class CustomerController extends ParentController
{
    public function index()
    {
        $response['Customers'] =CustomerFacade::all();
        return view('pages.Customers.index')->with($response);
    }

    public function new()
    {
        return view('pages.Customers.new');
    }

    public function store(Request $request)
    {
        CustomerFacade::store($request->all());
        return redirect()->route('Customers.all');

    }

    public function edit($Customer_id)
    {
        $response['Customers'] = CustomerFacade::get($Customer_id);
        return view('pages.Customers.edit')->with($response);
    }

    public function delete($Customer_id)
    {
        CustomerFacade::delete($Customer_id);
        return redirect()->back();
    }

    public function update(Request $request,$Customer_id)
    {
        CustomerFacade::update($request->all(), $Customer_id);
        return redirect()->route('Customers.all');
    }

}
