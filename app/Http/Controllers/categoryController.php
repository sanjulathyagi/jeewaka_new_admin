<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use Illuminate\Http\Request;

class CategoryController extends ParentController
{
    public function index()
    {
        $response['categories'] =CategoryFacade::all();
        return view('pages.categories.index')->with($response);
    }

    public function new()
    {
        return view('pages.categories.new');
    }

    public function store(Request $request)
    {
        CategoryFacade::store($request->all());
        return redirect()->route('categories.all');

    }

    public function edit($category_id)
    {
        $response['category'] = CategoryFacade::get($category_id);
        return view('pages.categories.edit')->with($response);
    }

    public function delete($category_id)
    {
        CategoryFacade::delete($category_id);
        return redirect()->back();
    }

    public function update(Request $request, $category_id)
    {
        CategoryFacade::update($request->all(), $category_id);
        return redirect()->route('categories.all');
    }

}
