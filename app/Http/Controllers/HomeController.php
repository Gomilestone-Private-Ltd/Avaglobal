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
    public function about()
    {
        return view('about');
    }
    public function career()
    {
        return view('career');
    }
    public function caseStudy()
    {
        return view('case-study');
    }
    public function careerDetails()
    {
        return view('career-detail');
    }
    public function caseStudyDetail()
    {
        return view('case-study-detail');
    }
    
}
