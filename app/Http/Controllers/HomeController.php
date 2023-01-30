<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view ('frontend.homepage');
    }
    public function detail()
    {
        return view ('frontend.detail');
    }
    
}
