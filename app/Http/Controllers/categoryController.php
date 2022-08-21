<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends ParentController
{
    public function index()
    {
        $response['category'] =category::all();
        return view('pages.categories.index');
    }

    public function new()
    {
        return view('pages.categories.new');
    }
}
