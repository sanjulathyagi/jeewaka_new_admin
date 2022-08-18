<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends parentController
{
    public function index()
    {
        return view('pages.dashboard.index');
    }


}
