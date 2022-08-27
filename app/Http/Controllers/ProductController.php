<?php

namespace App\Http\Controllers;
use domain\facades\productFacade;

use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        $response['products'] =productFacade::all();
        return view('pages.products.index')->with($response);
    }
}
