<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends ParentController
{
    public function index()
    {
        return view('pages.products.index');
    }
}
