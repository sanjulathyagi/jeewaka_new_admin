<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends parentController
{
    public function index()
    {
        return view('pages.dashboard.index');
    }


}
