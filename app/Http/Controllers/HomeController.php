<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Js;

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
        $jobData = Job::where('is_active', 1)->get();

        $openedJobs = count($jobData);

        $data = compact('jobData', 'openedJobs');

        return view('career')->with($data);
    }
    public function caseStudy()
    {
        return view('case-study');
    }
    public function careerDetails(Request $request)
    {
        $id = Crypt::decrypt($request->route('id'));
        // $careerData = Job::select('department', 'job_role')->with('description')->where('id', $id)->get();
        $careerData = Job::with('careerDescription')->where('id', $id)->get();

        return view('career-detail')->with('careerData', $careerData);
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