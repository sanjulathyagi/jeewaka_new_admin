<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use domain\Facades\OrderFacade;
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
        $response['categories'] = CategoryFacade::all();
        return view('pages.products.new')->with($response);
    }

    public function store(Request $request)
    {
        $product = ProductFacade::store($request->all());
        return redirect()->route('products.edit', $product->id);

    }

    public function edit($product_id)
    {
        $response['product'] = ProductFacade::get($product_id);
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

    public function imagePrimary($product_id)
    {
        ProductFacade::imagePrimary($product_id);
        $response['alert-success'] = 'product set primary successfully';
        return redirect()->back()->with($response);
    }


    public function receive()
    {
        $response['receives'] = ProductFacade::allReceive();
        $response['items'] = ProductFacade::getActive();
        $response['tc'] = $this;
        return view('Pages.Items.StockReceive.all')->with($response);
    }

    public function selectReceiveItem(Request $request)
    {
        $response['item'] = ProductFacade::find($request['item_id']);
        $response['tc'] = $this;
        return view('Pages.Items.StockReceive.Components.itemView')->with($response);
    }

    public function receiveStore(Request $request)
    {
        ProductFacade::makeReceive($request->all());
        $response['alert-success'] = 'Stock Receive Created Successfully';
        return redirect()->back()->with($response);
    }

    public function receiveDelete($receive_id)
    {
        ProductFacade::receiveDelete($receive_id);
        $response['alert-success'] = 'Stock Receive Deleted Successfully';
        return redirect()->back()->with($response);
    }


    public function receiveApprove($receive_id)
    {
        ProductFacade::receiveApprove($receive_id);
        $response['alert-success'] = 'Stock Receive Approved successfully';
        return redirect()->back()->with($response);
    }

    public function receiveCancel($receive_id)
    {
        ProductFacade::receiveCancel($receive_id);
        $response['alert-success'] = 'Stock Receive Canceled successfully';
        return redirect()->back()->with($response);
    }

    public function return()
    {
        $response['stock_returns'] = ProductFacade::allReturn();
        $response['items'] = ProductFacade::getActive();
        $response['orders'] = OrderFacade::all();
        $response['tc'] = $this;
        return view('Pages.Items.StockReturn.all')->with($response);
    }

    public function selectReturnItem(Request $request)
    {
        $response['item'] = ProductFacade::find($request['item_id']);
        $response['tc'] = $this;
        return view('Pages.Items.StockReturn.Components.itemView')->with($response);
    }

    public function returnStore(Request $request)
    {

        ProductFacade::makeReturn($request->all());
        $response['alert-success'] = 'Stock Return Created Successfully';
        return redirect()->back()->with($response);
    }

    public function returnDelete($return_id)
    {
        ProductFacade::returnDelete($return_id);
        $response['alert-success'] = 'Stock Return Deleted Successfully';
        return redirect()->back()->with($response);
    }


    public function returnApprove($return_id)
    {
        ProductFacade::returnApprove($return_id);
        $response['alert-success'] = 'Stock Return Approved successfully';
        return redirect()->back()->with($response);
    }

    public function returnCancel($return_id)
    {
        ProductFacade::returnCancel($return_id);
        $response['alert-success'] = 'Stock Return Canceled successfully';
        return redirect()->back()->with($response);
    }
}
