<?php

namespace App\Http\Controllers;

use domain\Facades\ProfitFacade;
use Illuminate\Http\Request;

class ProfitController extends ParentController
{
    public function index()
    {
        $response['Profits'] =ProfitFacade::all();
        return view('pages.Profits.index')->with($response);
    }

    public function new()
    {
        return view('pages.Profits.new');
    }

    public function store(Request $request)
    {
        ProfitFacade::store($request->all());
        return redirect()->route('Profits.all');

    }

    public function edit($Profit_id)
    {
        $response['Profits'] = ProfitFacade::get($Profit_id);
        return view('pages.Profits.edit')->with($response);
    }

    public function delete($Profit_id)
    {
        ProfitFacade::delete($Profit_id);
        return redirect()->back();
    }

    public function update(Request $request,$Profit_id)
    {
        ProfitFacade::update($request->all(), $Profit_id);
        return redirect()->route('Profits.all');
    }

}
