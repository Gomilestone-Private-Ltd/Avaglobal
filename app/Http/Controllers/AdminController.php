<?php

namespace App\Http\Controllers;

use App\Models\Description;
use App\Models\Job;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function loginPage()
    {
        // dd(Hash::make('admin@123#'));
        return view('admin.sign-in');
    }
    public function authenticate(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;

        // config('role.admin');
        $user = null;
        if (Auth::attempt($credentials, $remember_me)) {

            $user = Auth::user();

            //check role
            if (in_array($user->role->name, ['Admin', 'Employee']) && Auth::user()->status == "1") {


                return redirect()->intended('dashboard')->with('success', 'Logged In Successfully');
            } else {

                return redirect()->back()->with('failed', 'Hey User Please Contact to admin!!');
            }
        } else {
            // return redirect()->route('login');
            return redirect()->back()->with('error', 'Invalid Login Credential');
        }
    }
    public function dashboard()
    {
        return view('admin.index');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function openJob()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.jobOpenings')->with('jobPost', $jobPost);
        // return view('admin.jobOpenings');
    }
    public function postJob(Request $request)
    {
        $requestData = $request->only('department', 'jobStatus', 'timePeriod', 'location', 'jobRole');
        $rule = [
            'department' => 'required',
            'jobStatus' => 'required',
            'timePeriod' => 'required',
            'location' => 'required',
            'jobRole' => 'required'
        ];
        $message = [
            'department.required' => "Please fill the department name",
            'jobStatus.required' => "Please select the Job Status",
            'timePeriod.required' => "Please select the timePeriod",
            'location.required' => "Please fill the Valid Location",
            'jobRole.required' => "Please fill the Job role"
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        if ($request->jobStatus == 'Active') {
            $status = 1;
        } else {
            $status = 0;
        }
        $jobPosted = new Job;
        $jobPosted['department'] = $request->department;
        $jobPosted['job_role'] = $request->jobRole;
        $jobPosted['location'] = $request->location;
        $jobPosted['time_period'] = $request->timePeriod;
        $jobPosted['is_active'] = $status;
        $jobPosted->save();
        return response()->json(['success' => true, 'message' => 'Job posted Successfully']);
    }

    public function getJobs()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.jobOpenings')->with('jobPost', $jobPost);
    }

    public function careerSection()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.careerSection')->with('jobPost', $jobPost);
    }
    public function careerDescription($id)
    {

        return view('admin.careerDescp')->with('id', $id);
    }

    public function editDescription($id)
    {
        $descData = Description::where('job_id', $id)->first();

        return view('admin.careerDescp')->with('descData', $descData);
    }

    public function textEditor(Request $request)
    {
        // $id = $request->routeId;
        // if (Description::where('job_id', $id)->exists()) {
        //     return response()->json(['errors' => "Description for this job role has already been set !!"], 400);
        // }
        $requestData = $request->only('description', 'routeId',);
        $rule = [
            'description' => 'required',
        ];
        $message = [
            'description.required' => "Please give some description about the job",
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()->first()], 400);
        }
        // $jobDescription = new Description();
        // $jobDescription['description'] = $request->description;
        // $jobDescription['job_id'] = $request->routeId;
        // $jobDescription->save();
        Description::updateOrCreate(
            ['description' => $request->description, 'job_id' => $request->routeId],
            ['job_id' => $request->routeId]
        );
        return response()->json(['success' => true, 'message' => 'Description Added Successfully']);
    }
}