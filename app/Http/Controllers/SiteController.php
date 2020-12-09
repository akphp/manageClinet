<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        return view('app');
    }
}
