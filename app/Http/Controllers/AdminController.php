<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\AvaDocs;
use App\Models\CaseStudy;
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
        return view('admin.sign-in');
    }


    public function login()
    {
        return view('login.adminLogin');
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
        return redirect('/admin');
    }
    public function openJob()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.jobOpenings')->with('jobPost', $jobPost);
        // return view('admin.jobOpenings');
    }

    public function addJobs()
    {
        return view('admin.addJobs');
    }

    public function postJob(Request $request)
    {
        $jobId = $request->id;

        $requestData = $request->only('department', 'jobStatus', 'timePeriod', 'location', 'jobRole', 'experience', 'description');
        $rule = [
            'department' => 'required',
            'jobStatus' => 'required',
            'timePeriod' => 'required',
            'location' => 'required',
            'jobRole' => 'required',
            'experience' => 'required',
            'description' => 'required',
        ];
        $message = [
            'department.required' => "Please fill the department name",
            'jobStatus.required' => "Please select the Job Status",
            'timePeriod.required' => "Please select the timePeriod",
            'location.required' => "Please fill the Valid Location",
            'jobRole.required' => "Please fill the Job role",
            'experience.required' => "Please fill the experience required",
            'description.required' => 'Please give some description about the job'
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
        // $jobPosted = new Job;
        // $jobPosted['department'] = $request->department;
        // $jobPosted['job_role'] = $request->jobRole;
        // $jobPosted['location'] = $request->location;
        // $jobPosted['time_period'] = $request->timePeriod;
        // $jobPosted['is_active'] = $status;
        // $jobPosted['experience'] = $request->experience;
        // $jobPosted['description'] = $request->description;
        // $jobPosted->save();
        Job::updateOrCreate(
            ['id' => $jobId],
            [
                'department' => $request->department,
                'job_role' => $request->jobRole,
                'location' => $request->location,
                'time_period' => $request->timePeriod,
                'is_active' => $status,
                'experience' => $request->experience,
                'description' => $request->description
            ]

        );


        return response()->json(['success' => true, 'message' => 'Job Data posted Successfully']);
    }

    public function getJobs()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.jobOpenings')->with('jobPost', $jobPost);
    }
    public function jobApplicants()
    {
        $applicantData = Applicant::with('avaDocs')->get();

        return view('admin.applicantsData')->with('applicantData', $applicantData);
    }
    public function postApplicants(Request $request)
    {
        $requestData = $request->only('name', 'email', 'phone', 'position', 'applicantPdf');
        $rule = [
            'name' => 'required',
            'email' => 'required|email|unique:applicants',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'position' => 'required',
            'applicantPdf' => 'required|mimes:pdf|max:10000'
        ];
        $message = [
            'name.required' => "Please fill your name",
            'email.required' => 'Please give your email',
            'phone.required' => 'Please give your phone number',
            'position.required' => 'Please fill the position applying for:',
            'applicantPdf.mimes' => 'file extension must be of type .pdf',
            'applicantPdf.required' => 'Please put your CV here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $filename = '';
        $path = '';
        if ($request->hasFile('applicantPdf')) {
            $file = $request->file('applicantPdf');

            $fileType = $file->extension();
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/pdf/';
            $file->move($path, $filename);
        }
        if ($filename) {
            $actualPdfPath = '/assets/pdf/' . $filename;
        } else {
            $actualPdfPath = null;
        }
        $jobApplicant = new Applicant;
        $jobApplicant->name = $request['name'];
        $jobApplicant->email = $request['email'];
        $jobApplicant->position = $request['position'];
        $jobApplicant->phone = $request['phone'];
        $jobApplicant->save();
        $appliacnt_id = $jobApplicant->id;
        $avaDocs = new AvaDocs;
        $avaDocs->applicant_id = $appliacnt_id;
        $avaDocs->filename = $filename;
        $avaDocs->filetype = $fileType;
        $avaDocs->filesize = $fileSize;
        $avaDocs->path = $actualPdfPath;
        $avaDocs->save();
        return response()->json(['success' => true, 'message' => 'You have Successfully applied for this job']);
    }
    public function deleteApplicant($id)
    {
        // dd($id);
        $data = Applicant::find($id);
        if (!$data) {
            return response()->json(['message' => 'There is no Applicant found in record', 404]);
        }

        $data->delete();
        AvaDocs::where('applicant_id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Applicant Data got deleted successfully']);
    }

    public function editCaseStudy($id)
    {
        $caseId = $id;
        $data = CaseStudy::with('avaDocs')->where('id', $caseId)->first();
        return view('admin.editCaseSection')->with('data', $data);
    }
    public function updateCaseStudy(Request $request)
    {

        $caseId = $request->id;

        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'description');
        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            // 'caseimage' => 'required|mimes:jpeg,png',
            'description' => 'required'
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            // 'caseimage.required' => 'please select a case image',
            // 'caseimage.mimes' => 'image extension must be of jpeg,png',
            'description.required' => 'Please add Case description here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $caseStudy = CaseStudy::find($caseId);

        $filename = '';
        $path = '';
        if ($request->hasFile('caseimage')) {
            $file = $request->file('caseimage');
            $fileType = $file->extension();
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/img/';

            $replaceLocalImage = public_path() . $caseStudy->avaDocs->path;
            // dd($replaceLocalImage);


            if (file_exists($replaceLocalImage) && is_file($replaceLocalImage)) {
                unlink($replaceLocalImage);
            }
            $file->move($path, $filename);
            $actualImagePath = '/assets/img/' . $filename;

            AvaDocs::updateOrCreate(
                ['case_id' => $caseId],
                [
                    'filename' => $filename,
                    'filesize' => $fileSize,
                    'path' => $actualImagePath,
                    'filetype' => $fileType
                ]
            );
        } else {
            $olderImagePath = $caseStudy->avaDocs->path;
            // dd($olderImagePath);
            AvaDocs::updateOrCreate(
                ['case_id' => $caseId],
                [
                    'path' => $olderImagePath,
                ]
            );
        }
        $caseStudy->case = $request['case'];
        $caseStudy->case_title = $request['casetitle'];
        $caseStudy->description = $request['description'];
        $caseStudy->posted_by = $request['postedby'];
        $caseStudy->save();
        return response()->json(['success' => true, 'message' => 'Case Updated Successfully']);
    }

    public function careerSection()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.careerSection')->with('jobPost', $jobPost);
    }

    public function careerDescription($id, $slug)
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
        // dd($request->all());
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
        Description::updateOrCreate(
            ['job_id' => $request->routeId],
            ['description' => $request->description, 'job_id' => $request->routeId],

        );
        return response()->json(['success' => true, 'message' => 'Description Added Successfully']);
    }

    public function caseSection()
    {
        $combinedData = CaseStudy::with('avaDocs')->orderBy('id', 'DESC')->get();
        return view('admin.caseStudyData')->with('combinedData', $combinedData);
    }

    public function getCaseDescription($id)
    {
        $caseId = $id;
        $Data = CaseStudy::where('id', $caseId)->first();
        $dataDescription = $Data->description;
        return response()->json(['success' => true, 'description' => $dataDescription]);
    }

    public function getCareerDescription($id)
    {
        $job_id = $id;
        $data = Job::where('id', $job_id)->first();
        $dataDescription = $data->description;
        return response()->json(['success' => true, 'description' => $dataDescription]);
    }
    public function editCareerJob($id)
    {
        $jobId = $id;

        // dd($id);
        $jobData = Job::where('id', $jobId)->first();
        // dd($jobData);
        return view('admin.addJobs')->with('jobData', $jobData);
    }
    public function deleteCareerData($id)
    {
        // dd($id);
        $data = Job::find($id);
        if (!$data) {
            return response()->json(['message' => 'There is no Case found in record', 404]);
        }

        $data->delete();

        return response()->json(['success' => true, 'message' => 'Data got deleted successfully']);
    }
    public function addCase()
    {
        return view('admin.case-section');
    }

    public function caseStore(Request $request)
    {
        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'description');
        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            'caseimage' => 'required|mimes:jpeg,png',
            'description' => 'required'
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            'caseimage.required' => 'please select a case image',
            'caseimage.mimes' => 'image extension must be of jpeg,png',
            'description.required' => 'Please add Case description here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $filename = '';
        $path = '';
        if ($request->hasFile('caseimage')) {
            $file = $request->file('caseimage');
            $fileType = $file->extension();
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/img/';
            $file->move($path, $filename);
        }
        if ($filename) {
            $actualImagePath = '/assets/img/' . $filename;
        } else {
            $actualImagePath = null;
        }
        $caseStudy = new CaseStudy;
        $caseStudy->case = $request['case'];
        $caseStudy->case_title = $request['casetitle'];
        $caseStudy->description = $request['description'];
        $caseStudy->posted_by = $request['postedby'];
        $caseStudy->save();
        $case_id = $caseStudy->id;
        $avaDocs = new AvaDocs;
        $avaDocs->case_id = $case_id;
        $avaDocs->filename = $filename;
        $avaDocs->filetype = $fileType;
        $avaDocs->filesize = $fileSize;
        $avaDocs->path = $actualImagePath;
        $avaDocs->save();
        return response()->json(['success' => true, 'message' => 'Case Added Successfully']);
    }

    public function deleteCaseStudy($id)
    {
        // dd($id);
        $data = CaseStudy::find($id);
        if (!$data) {
            return response()->json(['message' => 'There is no Case found in record', 404]);
        }

        $data->delete();
        AvaDocs::where('case_id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Case deleted successfully']);
    }
}