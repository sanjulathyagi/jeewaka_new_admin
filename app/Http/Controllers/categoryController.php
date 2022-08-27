<?php

namespace App\Http\Controllers;

use domain\facades\categoryFacade;
use Illuminate\Http\Request;

class CategoryController extends ParentController
{
    public function index()
    {
        $response['categories'] =categoryFacade::all();
        return view('pages.categories.index')->with($response);
    }

    public function new()
    {
        $response['categories'] = categoryFacade::all();
        return view('pages.categories.new')->with($response);
    }

    public function store(Request $request)
    {
        categoryFacade::store($request->all());
        return redirect()->route('categories.all');

    }

}
