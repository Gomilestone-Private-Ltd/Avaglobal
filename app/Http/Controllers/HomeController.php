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
    public function contact()
    {
        return view('contact');
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
    public function services()
    {
        return view('services');
    }
    public function seaFreight()
    {
        return view('services.sea-freight');
    }
    public function airFreight()
    {
        return view('services.air-freight');
    }
    public function customsClearance()
    {
        return view('services.customs-clearance');
    }
    public function warehousing()
    {
        return view('services.warehousing');
    }

    public function heavyHaulTrucking()
    {
        return view('services.heavy-haul-trucking');
    }

    public function freightShipping()
    {
        return view('services.freight-shipping');
    }

    public function cargoInsurance()
    {
        return view('services.cargo-insurance');
    }

    public function containerSizes()
    {
        return view('container-sizes');
    }
    public function tariffsCalculators()
    {
        return view('tariffs-calculators');
    }
    public function newsEvent()
    {
        return view('news-and-event');
    }
    
}
