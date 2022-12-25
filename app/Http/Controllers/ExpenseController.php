<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $response['categories'] =CategoryFacade::all();
        return view('pages.categories.index')->with($response);
    }

    public function new()
    {
        $response['categories'] = CategoryFacade::all();
        return view('pages.categories.new')->with($response);
    }

    public function store(Request $request)
    {
        CategoryFacade::store($request->all());
        $response['alert-success'] = 'Category created successfully';
        return redirect()->route('categories.all')->with($response);

    }

    public function edit($category_id)
    {
        $response['category'] = CategoryFacade::get($category_id);
        return view('pages.categories.edit')->with($response);
    }

    public function delete($category_id)
    {
        try {
            CategoryFacade::delete($category_id);
            $response['alert-success'] = 'Category deleted successfully';
            return redirect()->back()->with($response);

        } catch(\Throwable $th){
            $response['alert-danger'] = 'Category cannot be deleted';
            return redirect()->back()->with($response);
        }

    }
}
