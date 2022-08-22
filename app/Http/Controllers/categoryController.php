<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends ParentController
{
    public function index()
    {
        $response['categories'] =Category::all();
        return view('pages.categories.index')->with($response);
    }

    public function new()
    {
        return view('pages.categories.new');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories.all');

    }
}
