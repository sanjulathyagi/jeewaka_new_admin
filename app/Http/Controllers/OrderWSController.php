<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderWSController extends Controller
{
    public function index()
    {
        $response['orders'] =OrderFacade::all();
        return view('pages.orders.index')->with($response);
    }

    public function new()
    {
        return view('pages.orders.new');
    }

    public function store(Request $request)
    {
        OrderFacade::store($request->all());
        return redirect()->route('orders.retail.all');

    }

    public function edit($order_id)
    {
        $response['orders'] = OrderFacade::get($order_id);
        return view('pages.orders.edit')->with($response);
    }

    public function delete($order_id)
    {
        OrderFacade::delete($order_id);
        return redirect()->back();
    }

    public function update(Request $request,$order_id)
    {
        OrderFacade::update($request->all(), $order_id);
        return redirect()->route('orders.retail.all');
    }

}
