<?php

namespace App\Http\Controllers;
use domain\Facades\ProductFacade;

use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        $response['products'] =ProductFacade::all();
        return view('pages.products.index')->with($response);
    }

    public function new()
    {
        return view('pages.products.new');
    }

    public function store(Request $request)
    {
        ProductFacade::store($request->all());
        return redirect()->route('products.all');

    }

    public function edit($product_id)
    {
        $response['products'] = ProductFacade::get($product_id);
        return view('pages.products.edit')->with($response);
    }

    public function delete($product_id)
    {
        ProductFacade::delete($product_id);
        return redirect()->back();
    }

    public function update(Request $request, $product_id)
    {
        ProductFacade::update($request->all(), $product_id);
        return redirect()->route('products.all');
    }
}
