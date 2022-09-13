<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
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
        $response['products'] = ProductFacade::all();
        return view('pages.products.new')->with($response);
    }

    public function store(Request $request)
    {
        $product = ProductFacade::store($request->all());
        return redirect()->route('products.edit', $product->id);

    }

    public function edit($product_id)
    {
        $response['products'] = ProductFacade::get($product_id);
        $response['categories'] = CategoryFacade::all();
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
        return redirect()->route('products.edit', $product_id);
    }

    public function status($product_id, $status)
    {
        ProductFacade::status($product_id, $status);
        return redirect()->back();
    }

    public function imageUpload(Request $request,$product_id)
    {
        ProductFacade::imageUpload($request->all(),$product_id);
        return redirect()->back();
    }

    public function imageDelete($product_id)
    {
        ProductFacade::imageDelete($product_id);
        $response['alert-success'] = 'product deleted successfully';
        return redirect()->back()->with($response);
    }
}
