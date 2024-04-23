<?php

namespace App\Http\Controllers;

use App\Models\AvaDocs;
use App\Models\CaseStudy;
use App\Models\Description;
use App\Models\Job;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Js;

class HomeController extends Controller
{
    public function empLogin()
    {
        return view('login.index');
    }

    public function homePage()
    {
        $newsData = Media::with('onlineDocsImage')
            ->whereHas('onlineDocsImage')
            ->get();
        return view('index')->with('newsData', $newsData);
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
        $combinedData = CaseStudy::with('avaDocs')->get();
        // dd($combinedData);
        return view('case-study')->with('combinedData', $combinedData);
    }
    public function careerDetails($slug)
    {
        $careerData = Job::where('slug', $slug)->first();
        return view('career-detail')->with('careerData', $careerData);
    }
    public function caseStudyDetail($slug)
    {
        $caseStudyData = CaseStudy::where('slug', $slug)->first();
        return view('case-study-detail')->with('caseStudyData', $caseStudyData);
    }

    public function testimonials()
    {
        return view('testimonials');
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
    public function media()
    {
        $newsData = Media::with('onlineDocsImage')
            ->whereHas('onlineDocsImage')
            ->get();
        // dd($newsData);
        return view('media')->with('newsData', $newsData);
    }
}
