<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function homePage()
    {
        return view('index');
    }
}