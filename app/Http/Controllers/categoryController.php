<?php

namespace App\Http\Controllers;

use domain\Facades\CategoryFacade;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends ParentController
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

    public function update(Request $request, $category_id)
    {
        CategoryFacade::update($request->all(), $category_id);
        $response['alert-success'] = 'Category updated successfully';
        return redirect()->route('categories.all')->with($response);
    }

    public function validateName(Request $request)
    {
        return CategoryFacade::validateName($request['name']);
    }

}
