<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        $response['products'] =Product::all();
        return view('pages.products.index')->with($response);
    }
}
