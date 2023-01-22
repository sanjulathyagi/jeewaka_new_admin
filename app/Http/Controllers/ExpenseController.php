<?php

namespace App\Http\Controllers;

use domain\Facades\expenseFacade;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $response['expenses'] =Expense::all();
        return view('pages.expenses.index')->with($response);
    }

    public function new()
    {
        $response['types'] = expenseFacade::all();
        return view('pages.expenses.new')->with($response);
    }

    public function store(Request $request)
    {
        CategoryFacade::store($request->all());
        $response['alert-success'] = 'Expense created successfully';
        return redirect()->route('expenses.all')->with($response);

    }

    public function edit($category_id)
    {
        $response['category'] = CategoryFacade::get($category_id);
        return view('pages.expenses.edit')->with($response);
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

    public function export()
    {
        
    }
}
