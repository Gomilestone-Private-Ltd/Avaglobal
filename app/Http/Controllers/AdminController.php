<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\AvaDocs;
use App\Models\Brochure;
use App\Models\CaseStudy;
use App\Models\Description;
use App\Models\Job;
use App\Models\Marque;
use DB;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{


    public function login()
    {
        return view('login.adminLogin');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // $remember_me = $request->has('remember_me') ? true : false;
        $user = null;
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            //check role
            return redirect()->intended('dashboard')->with('success', 'Logged In Successfully');
            // if (in_array($user->role->name, ['Admin', 'Employee']) && Auth::user()->status == "1") {
            // } else {
            //     return redirect()->back()->with('failed', 'Hey User Please Contact to admin!!');
            // }
        } else {
            return redirect()->back()->with('error', 'Invalid Login Credential');
        }
    }
    public function dashboard()
    {
        $JobCounts = Job::where('is_active', 1)->get();
        $activeJobCounts = Count($JobCounts);
        $CaseStudy = CaseStudy::count();
        $Applicant = Applicant::count();
        $contactUsCounts = ContactUs::count();
        return view('admin.index', ['jobCount' => $activeJobCounts, 'CaseStudy' => $CaseStudy, 'Applicant' => $Applicant, 'contactUsCounts' => $contactUsCounts]);
    }
    // job_openings functions
    public function openJob()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.jobOpenings')->with('jobPost', $jobPost);
    }
    public function addJobs()
    {
        return view('admin.addJobs');
    }
    public function editCareerJob($id)
    {
        $jobId = $id;

        // dd($id);
        $jobData = Job::where('id', $jobId)->first();
        // dd($jobData);
        return view('admin.addJobs')->with('jobData', $jobData);
    }
    public function postJob(Request $request)
    {
        $jobId = $request->id;

        $requestData = $request->only('department', 'jobStatus', 'timePeriod', 'location', 'jobRole', 'experience', 'description', 'slug');
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

        //Slug-------------------------------------
        $slug = str_replace(" ", "-", strtolower($request->jobRole));
        $jobSlug = Job::whereNotNull('slug')->pluck('slug')->toArray();
        $checkSlug = in_array($slug, $jobSlug);
        $slug = $checkSlug == true ? $slug . '-' . count($jobSlug) + 1 : $slug;
        //   -----------------------------------------------------------
        $record = Job::updateOrCreate(
            ['id' => $jobId],
            [
                'department' => $request->department,
                'job_role' => $request->jobRole,
                'location' => $request->location,
                'time_period' => $request->timePeriod,
                'is_active' => $status,
                'slug' => $slug,
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
    public function careerSection()
    {
        $jobPost = Job::orderBy('id', 'DESC')->get();
        return view('admin.careerSection')->with('jobPost', $jobPost);
    }
    public function getCareerDescription($id)
    {
        $job_id = $id;
        $data = Job::where('id', $job_id)->first();
        $dataDescription = $data->description;
        return response()->json(['success' => true, 'description' => $dataDescription]);
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
    // end

    // Case Study functions
    public function caseSection()
    {
        $combinedData = CaseStudy::with('avaDocs')->orderBy('id', 'DESC')->get();

        return view('admin.caseStudyData')->with('combinedData', $combinedData);
    }
    public function addCase()
    {
        return view('admin.case-section');
    }
    public function editCaseStudy($id)
    {
        $caseId = $id;
        $data = CaseStudy::with('avaDocs')->where('id', $caseId)->first();
        return view('admin.editCaseSection')->with('data', $data);
    }
    public function caseStore(Request $request)
    {

        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'description');

        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            // 'caseimage[]' => 'required',
            'caseimage.*' => 'mimes:jpeg,jpg,png',
            'description' => 'required',
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            // 'caseimage[].required' => 'please select case image',
            // // 'caseimage.max' => 'Maximum three files are allowed',
            'caseimage.*.mimes' => 'image extension must be of jpeg,jpg,png',
            'description.required' => 'Please add Case description here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        // dd($validate);

        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        // dd("hii");
        //addSlug here
        $slug = str_replace(" ", "-", strtolower($request['case']));
        $caseSlug = CaseStudy::whereNotNull('slug')->pluck('slug')->toArray();
        $checkSlug = in_array($slug, $caseSlug);
        $slug = $checkSlug == true ? $slug . '-' . count($caseSlug) + 1 : $slug;
        //   -----------------------------------------------------------

        $caseStudy = new CaseStudy;
        $caseStudy->case = $request['case'];
        $caseStudy->slug = $slug;
        $caseStudy->case_title = $request['casetitle'];
        $caseStudy->description = $request['description'];
        $caseStudy->posted_by = $request['postedby'];
        $caseStudy->save();

        $filename = '';
        $path = '';

        if ($request->hasFile('caseimage')) {
            $allowedfileExtension = ['jpeg', 'jpg', 'png'];
            $files = $request->file('caseimage');
            foreach ($files as $file) {
                $fileSize = $file->getSize();
                $fileType = $file->extension();
                $filename = time() . $file->getClientOriginalName();
                $check = in_array($fileType, $allowedfileExtension);
                if ($check) {
                    $path = public_path() . '/assets/img/';
                    $file->move($path, $filename);
                    $actualImagePath = '/assets/img/' . $filename;
                } else {
                    $actualImagePath = null;
                }
                $case_id = $caseStudy->id;
                $avaDocs = new AvaDocs;
                $avaDocs->case_id = $case_id;
                $avaDocs->filename = $filename;
                $avaDocs->filetype = $fileType;
                $avaDocs->filesize = $fileSize;
                $avaDocs->path = $actualImagePath;
                $avaDocs->save();
            }
        }
        return response()->json(['success' => true, 'message' => 'Case Added Successfully']);
        // $data = $request->all();
        // if (count($data['caseimage']) > 4) {
        //     return response()->json(['errors' => "maximum four files allowed"], 400);
        // }
        // foreach ($data['caseimage'] as $dataimage) {
        // }
        // $validateError = ($validate->errors())->toArray();
        // ($validateError['caseimage'][1] = "name");
        // dd($validateError);
    }
    public function updateCaseStudy(Request $request)
    {

        $caseId = $request->id;

        $data = $request->all();
        if (count($data['caseimage']) > 4) {
            return response()->json(['errors' => "maximum four files allowed"], 400);
        }

        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'description');
        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            'caseimage' => 'mimes:jpeg,png',
            'description' => 'required'
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            // 'caseimage.required' => 'please select a case image',
            'caseimage.mimes' => 'image extension must be of jpeg,png',
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
    public function getCaseDescription($id)
    {
        $caseId = $id;
        $Data = CaseStudy::where('id', $caseId)->first();
        $dataDescription = $Data->description;
        return response()->json(['success' => true, 'description' => $dataDescription]);
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

    //end
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function jobApplicants()
    {
        $applicantData = Applicant::orderBy('id', 'DESC')->with('avaDocs')->get();

        return view('admin.applicantsData')->with('applicantData', $applicantData);
    }
    public function contactApplicants()
    {
        $contactUsData = ContactUs::orderBy('id', 'DESC')->with('avaDocs')->get();
        return view('admin.contactUsData')->with('contactUsData', $contactUsData);
    }
    public function postContactApplicants(Request $request)
    {
        $requestData = $request->only('name', 'email', 'phone', 'position', 'applicantPdf');
        $rule = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'position' => 'required',
            'applicantPdf' => 'required|mimes:pdf|max:10000'
        ];
        $message = [
            'name.required' => "Please fill your name",
            'email.required' => 'Please give your email',
            'phone.required' => 'Please give your phone number in numbers',
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
        $contactApplicants = new ContactUs;
        $contactApplicants->name = $request['name'];
        $contactApplicants->email = $request['email'];
        $contactApplicants->position = $request['position'];
        $contactApplicants->phone = $request['phone'];
        $contactApplicants->save();
        $contact_id = $contactApplicants->id;
        $avaDocs = new AvaDocs;
        $avaDocs->contact_id = $contact_id;
        $avaDocs->filename = $filename;
        $avaDocs->filetype = $fileType;
        $avaDocs->filesize = $fileSize;
        $avaDocs->path = $actualPdfPath;
        $avaDocs->save();
        return response()->json(['success' => true, 'message' => 'You have Successfully applied for this job']);
    }
    public function postApplicants(Request $request)
    {
        $requestData = $request->only('name', 'email', 'phone', 'position', 'applicantPdf');
        $rule = [
            'name' => 'required',
            'email' => 'required|email',
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
    public function contactUsApplicantsDelete($id)
    {
        $data = ContactUs::find($id);
        if (!$data) {
            return response()->json(['message' => 'There is no Applicant found in record', 404]);
        }

        $data->delete();
        AvaDocs::where('contact_id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Applicant Data got deleted successfully']);
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


    public function getBrochure()
    {

        $brochure = Brochure::orderBy('id', 'DESC')->with('avaDocsBrochure')->get();

        return view('admin.brochureData')->with('brochure', $brochure);
    }
    public function brochureForms()
    {
        return view('admin.brochureForm');
    }

    public function postBrochure(Request $request)
    {
        $requestData = $request->only('title', 'location', 'brochureimage', 'brochurepdf');
        $rule = [
            'title' => 'required',
            'location' => 'required',
            'brochureimage' => 'required|mimes:jpeg,png',
            'brochurepdf' => 'required|mimes:pdf',
        ];
        $message = [
            'title.required' => "please fill the brochure title!!",
            'location.required' => 'please fill the location',
            'brochureimage.required' => 'please select a brochure image',
            'brochureimage.mimes' => 'image extension must be of jpeg,png',
            'brochurepdf.required' => 'please add brochure pdf here',
            'brochurepdf.mimes' => 'Extension must be pdf'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $filename = '';
        $path = '';
        if ($request->hasFile('brochureimage')) {
            $file = $request->file('brochureimage');
            $fileType = strtolower($file->extension());
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

        $pdffilename = '';
        $pdfpath = '';
        if ($request->hasFile('brochurepdf')) {
            $pdfFile = $request->file('brochurepdf');
            $pdfFileType = strtolower($pdfFile->extension());
            $pdfFileSize = $pdfFile->getSize();
            $pdffilename = time() . $pdfFile->getClientOriginalName();
            $pdfpath = public_path() . '/assets/pdf/';
            $pdfFile->move($pdfpath, $pdffilename);
        }
        if ($pdffilename) {
            $actualPdfPath = '/assets/pdf/' . $pdffilename;
        } else {
            $actualPdfPath = null;
        }

        $brochure = new Brochure;
        $brochure->title = $request['title'];
        $brochure->location = $request['location'];
        $brochure->save();

        $brochure_id = $brochure->id;


        $avaDocsImage = new AvaDocs; // Create AvaDocs instance for image
        $avaDocsImage->brochure_id = $brochure_id;
        $avaDocsImage->filename = $filename;
        $avaDocsImage->filetype = $fileType;
        $avaDocsImage->filesize = $fileSize;
        $avaDocsImage->path = $actualImagePath;
        $avaDocsImage->save();

        $avaDocsPdf = new AvaDocs; // Create AvaDocs instance for PDF
        $avaDocsPdf->brochure_id = $brochure_id;
        $avaDocsPdf->filename = $pdffilename;
        $avaDocsPdf->filetype = $pdfFileType;
        $avaDocsPdf->filesize = $pdfFileSize;
        $avaDocsPdf->path = $actualPdfPath;
        $avaDocsPdf->save();

        return response()->json(['success' => true, 'message' => 'Popup Added Successfully', 'route' => route('event-popup')]);
    }

    public function getBrochureEdit($id)
    {

        $brochure = Brochure::with('avaDocsBrochure')->where('id', $id)->first();
        foreach ($brochure->avaDocsBrochure->where('filetype', 'pdf') as $data) {
            // $pdf = asset($data->path);
            $name = $data->filename;
        }
        foreach ($brochure->avaDocsBrochure->whereIn('filetype', ['jpg', 'png']) as $data) {
            $image = asset($data->path);
        }
        $data = compact('name', 'image', 'brochure');

        return view('admin.editBrochureForm')->with($data);
    }
    public function postEditBrochure(Request $request)
    {
        $requestData = $request->only('title', 'location', 'brochureimage', 'brochurepdf');
        $rule = [
            'title' => 'required',
            'location' => 'required',
            'brochureimage' => 'nullable|mimes:jpg,png',
            'brochurepdf' => 'nullable|mimes:pdf',
        ];
        $message = [
            'title.required' => "please fill the brochure title!!",
            'location.required' => 'please fill the location',
            'brochureimage.mimes' => 'image extension must be of jpg,png',
            'brochurepdf.mimes' => 'Extension must be pdf'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $brochureData = [
            'title' => $request['title'],
            'location' => $request['location'],
        ];

        $brochure = Brochure::updateOrCreate(['id' => $request->brochureID], $brochureData);

        $brochure_id = $brochure->id;

        $avaDocsImage = null;
        $avaDocsPdf = null;

        if ($request->hasFile('brochureimage')) {
            $file = $request->file('brochureimage');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/img/';
            $file->move($path, $filename);

            $avaDocsImage = AvaDocs::updateOrCreate(
                ['brochure_id' => $brochure_id, 'filetype' => $fileType],
                [
                    'filename' => $filename,
                    'filetype' => $fileType,
                    'filesize' => $fileSize,
                    'path' => '/assets/img/' . $filename,
                ]
            );
        } else {
            // If no new brochure image, fetch the existing one
            $avaDocsImage = AvaDocs::where('brochure_id', $brochure_id)
                ->where('filetype', 'like', 'image%')
                ->first();
        }


        if ($request->hasFile('brochurepdf')) {
            $pdfFile = $request->file('brochurepdf');
            $pdfFileType = strtolower($pdfFile->extension());
            $pdfFileSize = $pdfFile->getSize();
            $pdffilename = time() . $pdfFile->getClientOriginalName();
            $pdfpath = public_path() . '/assets/pdf/';
            $pdfFile->move($pdfpath, $pdffilename);

            $avaDocsPdf = AvaDocs::updateOrCreate(
                ['brochure_id' => $brochure_id, 'filetype' => $pdfFileType],
                [
                    'filename' => $pdffilename,
                    'filetype' => $pdfFileType,
                    'filesize' => $pdfFileSize,
                    'path' => '/assets/pdf/' . $pdffilename,
                ]
            );
        } else {
            // If no new brochure PDF, retrieve the existing one
            $avaDocsPdf = AvaDocs::where('brochure_id', $brochure_id)
                ->where('filetype', 'pdf')
                ->first();
        }

        return response()->json(['success' => true, 'message' => 'Brochure Updated Successfully', 'route' => route('event-popup')]);
    }

    public function changeBrochureStatus($id)
    {
        $BrochureData = Brochure::find($id);
        if ($BrochureData->status == 1) {
            $BrochureData->status = 0;
        } elseif ($BrochureData->status == 0) {
            $BrochureData->status = 1;
        }
        $BrochureData->save();

        return response()->json(['success' => true, 'message' => 'Brochure Updated Successfully', 'route' => route('event-popup')]);
    }

    public function deletePopup($id)
    {
        Brochure::where('id', $id)->delete();

        AvaDocs::where('brochure_id', $id)->delete();
        return response()->json(['success' => true, 'message' => "Popup Got deleted successfully"]);
    }
    public function downloadBrochure()
    {
        //     $file = asset('assets/pdf/brochure.pdf');
        //     return redirect()->back()->download($file);
        //     //     $file = Storage::disk('public')->get('/pdf/' . '1712063948teachersData (9).pdf');
        //     //     return response()->download($file);
    }

    public function getCircularData()
    {
        $circularData = AvaDocs::orderBy('circular_id', 'DESC')->whereNotNull('circular_id')->get();

        return view('admin.circularData')->with('circularData', $circularData);
    }
    public function getAddCircularForm()
    {
        return view('admin.addCircularForm');
    }
    public function storeCircular(Request $request)
    {
        $requestData = $request->only('circularfile', 'circulartitle');
        $rule = [
            'circularfile' => 'required|mimes:jpg,png,jpeg,pdf',
            'circulartitle' => 'required|max:25',
        ];
        $message = [
            'circularfile.required' => "please upload file",
            'circularfile.mimes' => 'image extension must be of jpeg,png,jpg,pdf',
            'circulartitle.required' => 'please add file title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $filename = '';
        $path = '';
        if ($request->hasFile('circularfile')) {
            $file = $request->file('circularfile');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/circulars/';
            $file->move($path, $filename);
        }
        if ($filename) {
            $actualPath = '/assets/circulars/' . $filename;
        } else {
            $actualPath = null;
        }
        $avaDocsFile = new AvaDocs; // Create AvaDocs instance for PDF
        $avaDocsFile->filename = $filename;
        $avaDocsFile->filetype = $fileType;
        $avaDocsFile->filesize = $fileSize;
        $avaDocsFile->path = $actualPath;
        $avaDocsFile->circular_title = $request['circulartitle'];
        $avaDocsFile->save();
        $avaDocsFile->circular_id = $avaDocsFile->id;
        $avaDocsFile->save();

        return response()->json(['success' => true, 'message' => 'Circular file uploaded successfully']);
    }
    public function deleteCircular($id)
    {
        AvaDocs::where('id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Circular file got deleted Successfully']);
    }
    public function getEditCircular($id)
    {
        $data =  AvaDocs::where('id', $id)->first();

        return view('admin.editCircularForm')->with('data', $data);
    }
    public function editStoreCircular(Request $request)
    {

        $circularTitle = $request->circulartitle;
        $circular_id = $request->circularId;
        $olderPath = AvaDocs::where('circular_id', $circular_id)->first();
        // dd($olderPath);
        $requestData = $request->only('circularfile', 'circulartitle');
        $rule = [
            'circularfile' => 'mimes:jpg,png,jpeg,pdf',
            'circulartitle' => 'required',
        ];
        $message = [
            'circularfile.mimes' => 'image extension must be of jpeg,png,jpg,pdf',
            'circulartitle.required' => "Please write the title here"
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }


        if ($request->hasFile('circularfile')) {
            $file = $request->file('circularfile');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/circulars/';



            $replaceLocalFilePath = public_path() . $olderPath->path;
            // dd($replaceLocalFilePath);


            if (file_exists($replaceLocalFilePath) && is_file($replaceLocalFilePath)) {
                unlink($replaceLocalFilePath);
            }
            $file->move($path, $filename);
            $actualImagePath = '/assets/circulars/' . $filename;

            $avaDocsFile = AvaDocs::updateOrCreate(
                ['circular_id' => $circular_id],
                [
                    'circular_title' => $circularTitle,
                    'filename' => $filename,
                    'filetype' => $fileType,
                    'filesize' => $fileSize,
                    // 'path' => '/assets/circulars/' . $filename,
                    'path' => $actualImagePath,
                ]
            );
        } else {

            $avaDocsFile = AvaDocs::updateOrCreate(
                ['circular_id' => $circular_id],
                [
                    'circular_title' => $circularTitle,
                ]
            );

            $avaDocsFile = AvaDocs::where('circular_id', $circular_id)
                ->where('filetype', 'like', 'image%')
                ->orWhere('filetype', 'pdf')
                ->first();
        }
        return response()->json(['success' => true, 'message' => 'Cicular file Updated successfully', 'route' => route('circulars')]);
    }


    public function policyData()
    {
        $policyData = AvaDocs::orderBy('policy_id', 'DESC')->whereNotNull('policy_id')->get();
        return view('admin.getPolicyData')->with('policyData', $policyData);
    }
    public function getAddPagePolicy()
    {
        return view('admin.addPolicyPage');
    }
    public function deletePolicy($id)
    {
        AvaDocs::where('id', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Records Deleted Successfully']);
    }
    public function storePolicy(Request $request)
    {

        $requestData = $request->only('policyfile', 'policytitle');
        $rule = [
            'policyfile' => 'required|mimes:jpg,png,jpeg,pdf',
            'policytitle' => 'required',
        ];
        $message = [
            'policyfile.required' => "please upload file",
            'policyfile.mimes' => 'image extension must be of jpeg,png,jpg,pdf',
            'policytitle.required' => 'please add file title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $filename = '';
        $path = '';
        if ($request->hasFile('policyfile')) {
            $file = $request->file('policyfile');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/policies/';
            $file->move($path, $filename);
        }
        if ($filename) {
            $actualPath = '/assets/policies/' . $filename;
        } else {
            $actualPath = null;
        }
        $avaDocsFile = new AvaDocs; // Create AvaDocs instance for PDF
        $avaDocsFile->filename = $filename;
        $avaDocsFile->filetype = $fileType;
        $avaDocsFile->filesize = $fileSize;
        $avaDocsFile->path = $actualPath;
        $avaDocsFile->save();
        $avaDocsFile->policy_id = $avaDocsFile->id;
        $avaDocsFile->policy_title = $request->policytitle;
        $avaDocsFile->save();

        return response()->json(['success' => true, 'message' => 'Policy file uploaded successfully', 'route' => route('data-policy')]);
    }
    public function editPolicyForm($id)
    {
        $data =  AvaDocs::where('id', $id)->first();

        return view('admin.editPolicyForm')->with('data', $data);
    }
    public function storePolicyEdit(Request $request)
    {
        $policy_id = $request->policyId;
        $olderPath = AvaDocs::where('policy_id', $policy_id)->first();
        // dd($olderPath);
        $requestData = $request->only('policyfile', 'policytitle');
        $rule = [
            'policyfile' => 'mimes:jpg,png,jpeg,pdf',
            'policytitle' => 'required',
        ];
        $message = [
            'policyfile.mimes' => 'image extension must be of jpeg,png,jpg,pdf',
            'policytitle.required' => 'please add some file title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }


        if ($request->hasFile('policyfile')) {
            $file = $request->file('policyfile');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/policies/';



            $replaceLocalFilePath = public_path() . $olderPath->path;
            // dd($replaceLocalFilePath);


            if (file_exists($replaceLocalFilePath) && is_file($replaceLocalFilePath)) {
                unlink($replaceLocalFilePath);
            }
            $file->move($path, $filename);
            $actualImagePath = '/assets/policies/' . $filename;

            $avaDocsImage = AvaDocs::updateOrCreate(
                ['policy_id' => $policy_id],
                [
                    'filename' => $filename,
                    'filetype' => $fileType,
                    'filesize' => $fileSize,
                    // 'path' => '/assets/circulars/' . $filename,
                    'path' => $actualImagePath,
                ]
            );
        } else {
            $avaDocsImage = AvaDocs::updateOrCreate(
                ['policy_id' => $policy_id],
                [
                    'policy_title' => $request->policytitle,
                ]
            );

            $avaDocsFile = AvaDocs::where('policy_id', $policy_id)
                ->where('filetype', 'like', 'image%')
                ->orWhere('filetype', 'pdf')
                ->first();
        }
        return response()->json(['success' => true, 'message' => 'Policy file Updated successfully', 'route' => route('data-policy')]);
    }

    public function ScrollerData()
    {
        $data = Marque::get();
        return view('admin.scrollerData')->with('data', $data);
    }

    public function marqueAddForm()
    {

        return view('admin.marqueForm');
    }
    public function postMarque(Request $request)
    {

        $requestData = $request->only('marquetext');
        $rule = [
            'marquetext' => 'required|string|max:125',
        ];
        $message = [
            'marquetext.required' => 'Please add some text here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $marqueText = new Marque;
        $marqueText->marque_text = $request['marquetext'];
        $marqueText->save();
        return response()->json(['success' => true, 'message' => 'Marque Added Successfully']);
    }
    public function marqueStatus($id)
    {
        // dd($id);
        $marqueData = Marque::find($id);
        if ($marqueData->status == 1) {
            $marqueData->status = 0;
        } elseif ($marqueData->status == 0) {
            $marqueData->status = 1;
        }
        $marqueData->save();

        return response()->json(['success' => true, 'message' => 'Marque status changed Successfully']);
    }

    public function deleteMarque($id)
    {
        Marque::where('id', $id)->delete();
        return response()->json(['success' => true, 'message' => "Marque got Deleted"]);
    }
    public function editMarquePage($id)
    {
        $data = Marque::where('id', $id)->first();
        return view('admin.marqueEditPage')->with('data', $data);
    }
    public function postEditMarque(Request $request)
    {
        $mId = $request->marqueId;

        $requestData = $request->only('marquetext');
        $rule = [
            'marquetext' => 'required|string|max:50',
        ];
        $message = [
            'marquetext.required' => 'Please add some text here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $marqueText = Marque::updateOrCreate(
            ['id' => $mId],
            ['marque_text' => $request->marquetext],
        );
        return response()->json(['success' => true, 'message' => 'Marque Updated Successfully', 'route' => route('marque-records')]);
    }
    public function eventBrochureData()
    {
        $BrochureData = AvaDocs::orderBy('downloadBrochureId', 'DESC')->whereNotNull('downloadBrochureId')->get();
        return view('admin.eventBrochure')->with('BrochureData', $BrochureData);
    }

    public function addDownloadBrochure()
    {
        return view('admin.brochureAddPage');
    }
    public function storeDownloadBrochure(Request $request)
    {
        // dd($request->all());
        $requestData = $request->only('downloadbrochure', 'brochuretitle');
        $rule = [
            'downloadbrochure' => 'required|mimes:pdf',
            'brochuretitle' => 'required',
        ];
        $message = [
            'downloadbrochure.required' => "please upload file",
            'downloadbrochure.mimes' => 'file extension must be of pdf',
            'brochuretitle.required' => 'please add a title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $filename = '';
        $path = '';
        if ($request->hasFile('downloadbrochure')) {
            $file = $request->file('downloadbrochure');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/downloadBrochure/';
            $file->move($path, $filename);
        }
        if ($filename) {
            $actualPath = '/assets/downloadBrochure/' . $filename;
        } else {
            $actualPath = null;
        }
        $avaDocsFile = new AvaDocs; // Create AvaDocs instance for PDF
        $avaDocsFile->filename = $filename;
        $avaDocsFile->filetype = $fileType;
        $avaDocsFile->filesize = $fileSize;
        $avaDocsFile->path = $actualPath;
        $avaDocsFile->save();
        $avaDocsFile->downloadBrochureId = $avaDocsFile->id;
        $avaDocsFile->brochure_title = $request['brochuretitle'];
        $avaDocsFile->save();

        return response()->json(['success' => true, 'message' => 'Brochure Pdf uploaded successfully']);
    }

    public function changeDownloadBrochureStatus($id)
    {
        $Data = AvaDocs::find($id);
        if ($Data->downloadbrochurePdfStatus == 1) {
            $Data->downloadbrochurePdfStatus = 0;
        } elseif ($Data->downloadbrochurePdfStatus == 0) {
            $Data->downloadbrochurePdfStatus = 1;
        }
        $Data->save();
        return response()->json(['success' => true, 'message' => 'Brochure status changed Successfully']);
    }

    public function deleteDownloadBrochure($id)
    {
        AvaDocs::where('downloadBrochureId', $id)->delete();
        return response()->json(['success' => true, 'message' => 'Brochure got deleted successfully']);
    }
    public function editDownloadBrochurePage($id)
    {
        $data =  AvaDocs::where('downloadBrochureId', $id)->first();

        return view('admin.editDownloadBrochureForm')->with('data', $data);
    }
    public function editStoreDownloadBrochure(Request $request)
    {

        $brochId = $request->brochId;
        $brochureTitle = $request->brochuretitle;


        $olderPath = AvaDocs::where('downloadBrochureId', $brochId)->first();
        // dd($olderPath);
        $requestData = $request->only('downloadbrochure', 'brochuretitle');
        $rule = [
            'downloadbrochure' => 'mimes:pdf',
            'brochuretitle' => 'required',
        ];
        $message = [
            'downloadbrochure.mimes' => 'file extension must be of pdf',
            'brochuretitle.required' => 'please add title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }


        if ($request->hasFile('downloadbrochure')) {
            $file = $request->file('downloadbrochure');
            $fileType = strtolower($file->extension());
            $fileSize = $file->getSize();
            $filename = time() . $file->getClientOriginalName();
            $path = public_path() . '/assets/downloadBrochure/';



            $replaceLocalFilePath = public_path() . $olderPath->path;
            // dd($replaceLocalFilePath);


            if (file_exists($replaceLocalFilePath) && is_file($replaceLocalFilePath)) {
                unlink($replaceLocalFilePath);
            }
            $file->move($path, $filename);
            $actualImagePath = '/assets/downloadBrochure/' . $filename;

            $avaDocsFile = AvaDocs::updateOrCreate(
                ['downloadBrochureId' => $brochId],
                [
                    'filename' => $filename,
                    'filetype' => $fileType,
                    'filesize' => $fileSize,
                    // 'path' => '/assets/circulars/' . $filename,
                    'path' => $actualImagePath,
                ]
            );
            $update = array('brochure_title' => $brochureTitle);
            $Idsave = AvaDocs::where('downloadBrochureId', $brochId)->update($update);
        } else {
            $update = array('brochure_title' => $brochureTitle);
            $Idsave = AvaDocs::where('downloadBrochureId', $brochId)->update($update);

            $avaDocsFile = AvaDocs::where('downloadBrochureId', $brochId)
                ->Where('filetype', 'pdf')
                ->first();
        }
        return response()->json(['success' => true, 'message' => 'Brochure file Updated successfully']);
    }
}
