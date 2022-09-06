<?php

namespace App\Http\Controllers;

use domain\Facades\ProfitFacade;
use Illuminate\Http\Request;

class ProfitController extends ParentController
{
    public function index()
    {
        $response['profits'] =ProfitFacade::all();
        return view('pages.profits.index')->with($response);
    }

    public function new()
    {
        return view('pages.profits.new');
    }

    public function store(Request $request)
    {
        ProfitFacade::store($request->all());
        return redirect()->route('profits.all');

    }

    public function edit($Profit_id)
    {
        $response['profits'] = ProfitFacade::get($Profit_id);
        return view('pages.profits.edit')->with($response);
    }

    public function delete($Profit_id)
    {
        ProfitFacade::delete($Profit_id);
        return redirect()->back();
    }

    public function update(Request $request,$Profit_id)
    {
        ProfitFacade::update($request->all(), $Profit_id);
        return redirect()->route('profits.all');
    }

}
