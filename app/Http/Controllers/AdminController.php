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
use App\Models\Media;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

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
            return redirect()->intended('admin/dashboard')->with('success', 'Logged In Successfully');
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
        //made description as tinymce because i made id and name in blade file same
        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'tinymce');

        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            'caseimage' => 'required|array|max:5',
            'caseimage.*' => 'mimes:jpeg,jpg,png',
            'tinymce' => 'required',
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            'caseimage.required' => 'please select case image',
            'caseimage.max' => 'Maximum five images are allowed',
            'caseimage.*.mimes' => 'image extension must be of jpeg,jpg,png',
            'tinymce.required' => 'Please add Case description here'
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
        $caseStudy->description = $request['tinymce'];
        $caseStudy->posted_by = $request['postedby'];
        $caseStudy->save();


        if ($request->hasFile('caseimage')) {
            $files = $request->file('caseimage');
            foreach ($files as $file) {
                $data = $this->customFileUpload($file);
                $case_id = $caseStudy->id;
                $avaDocs = new AvaDocs;
                $avaDocs->case_id = $case_id;
                $avaDocs->filename = $data['filename'];
                $avaDocs->filetype = $data['fileType'];
                $avaDocs->filesize = $data['fileSize'];
                $avaDocs->path = $data['actualImagePath'];
                $avaDocs->save();
            }
        }
        return response()->json(['success' => true, 'message' => 'Case Added Successfully']);
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
        $data = CaseStudy::with('avaDocs')->where('id', $id)->first();
        if ($data) {
            if (count($data->avaDocs) > 0) {
                foreach ($data->avaDocs as $oldfile) {
                    $replaceLocalImage = public_path() . $oldfile->path;
                    if (file_exists($replaceLocalImage) && is_file($replaceLocalImage)) {
                        $response = unlink($replaceLocalImage);
                        if ($response) {
                            AvaDocs::where('case_id', $id)->delete();
                        }
                    } else {
                        continue;
                    }
                }
            }
            $data->delete();
            AvaDocs::where('case_id', $id)->delete();
            return response()->json(['success' => true, 'message' => 'Case deleted successfully', 'route' => route('case-section')]);
        } else {
            return response()->json(['message' => 'There is no Case found in record', 404, 'route' => route('case-section')]);
        }
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

        $contactApplicants = new ContactUs;
        $contactApplicants->name = $request['name'];
        $contactApplicants->email = $request['email'];
        $contactApplicants->position = $request['position'];
        $contactApplicants->phone = $request['phone'];
        $contactApplicants->save();
        $contact_id = $contactApplicants->id;

        if ($request->hasFile('applicantPdf')) {
            $files = $request->file('applicantPdf');
            if (is_array($files)) {
                foreach ($files as $file) {
                    $data = $this->customFileUpload($file);
                    $avaDocs = new AvaDocs;
                    $avaDocs->contact_id = $contact_id;
                    $avaDocs->filename = $data['filename'];
                    $avaDocs->filetype = $data['fileType'];
                    $avaDocs->filesize = $data['fileSize'];
                    $avaDocs->path = $data['actualImagePath'];
                    $avaDocs->save();
                }
            } else {
                $data = $this->customFileUpload($files);
                $avaDocs = new AvaDocs;
                $avaDocs->contact_id = $contact_id;
                $avaDocs->filename = $data['filename'];
                $avaDocs->filetype = $data['fileType'];
                $avaDocs->filesize = $data['fileSize'];
                $avaDocs->path = $data['actualImagePath'];
                $avaDocs->save();
            }
        }

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
        $brochure = Brochure::with(['avaDocsPopUpImage', 'avaDocsBrochureFiles'])->get();
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
            'brochurepdf' => 'required|mimes:pdf,jpeg,png,jpg',
        ];
        $message = [
            'title.required' => "please fill the popUp title!!",
            'location.required' => 'please fill the location',
            'brochureimage.required' => 'please select a popUp image',
            'brochureimage.mimes' => 'image extension must be of jpeg,png',
            'brochurepdf.required' => 'please select a file'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $avaDocsPopUpImage = $this->customFileUpload($request->file('brochureimage'));
        if ($avaDocsPopUpImage) {
            $fileData = [
                'filename' => $avaDocsPopUpImage['filename'],
                'filetype' => $avaDocsPopUpImage['fileType'],
                'filesize' => $avaDocsPopUpImage['fileSize'],
                'path' => $avaDocsPopUpImage['actualImagePath'],
            ];
            $fileSaveImageResponse = AvaDocs::Create($fileData);
        }
        $avaDocsBrochureFile = $this->customFileUpload($request->file('brochurepdf'));
        if ($avaDocsBrochureFile) {
            $fileData = [
                'filename' => $avaDocsBrochureFile['filename'],
                'filetype' => $avaDocsBrochureFile['fileType'],
                'filesize' => $avaDocsBrochureFile['fileSize'],
                'path' => $avaDocsBrochureFile['actualImagePath'],
            ];
            $fileSaveResponse = AvaDocs::Create($fileData);
        }
        $brochure = new Brochure;
        $brochure->title = $request['title'];
        $brochure->location = $request['location'];
        $brochure->image_id = $fileSaveImageResponse->id;
        $brochure->brochure_id = $fileSaveResponse->id;
        $brochure->save();
        return response()->json(['success' => true, 'message' => 'Popup Added Successfully', 'route' => route('event-popup')]);
    }

    public function getBrochureEdit($id)
    {
        $brochure = Brochure::with(['avaDocsPopUpImage', 'avaDocsBrochureFiles'])->where('id', $id)->first();
        return view('admin.editBrochureForm')->with('brochure', $brochure);
    }
    public function postEditBrochure(Request $request)
    {
        $requestData = $request->only('title', 'location', 'brochureimage', 'brochurepdf');
        $rule = [
            'title' => 'required',
            'location' => 'required',
            'brochureimage' => 'nullable|mimes:jpg,png',
            'brochurepdf' => 'nullable|mimes:pdf,jpg,png,jpeg',
        ];
        $message = [
            'title.required' => "please fill the popUp title!!",
            'location.required' => 'please fill the location',
            'brochureimage.mimes' => 'image extension must be of jpg,png',
            'brochurepdf.required' => 'please select a file'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $brochureRecords = Brochure::where('id', $request->brochureID)->with(['avaDocsPopUpImage', 'avaDocsBrochureFiles'])->first();
        if ($request->file('brochureimage')) {
            if (!empty($brochureRecords->avaDocsPopUpImage->path)) {
                $fileUnlink = $this->unlinkFile($brochureRecords->avaDocsPopUpImage->path);
                if ($fileUnlink == true) {
                    $avaDocsFileData = $this->customFileUpload($request->file('brochureimage'));
                    $avaDOcs = AvaDocs::where('id', $brochureRecords->image_id)->first();
                    $avaDOcs->filename = $avaDocsFileData['filename'];
                    $avaDOcs->filetype = $avaDocsFileData['fileType'];
                    $avaDOcs->filesize = $avaDocsFileData['fileSize'];
                    $avaDOcs->path = $avaDocsFileData['actualImagePath'];
                    $avaDOcs->save();
                }
            }
        }
        if ($request->file('brochurepdf')) {
            if (!empty($brochureRecords->avaDocsBrochureFiles->path)) {
                $fileUnlink = $this->unlinkFile($brochureRecords->avaDocsBrochureFiles->path);
                if ($fileUnlink == true) {
                    $avaDocsImageData = $this->customFileUpload($request->file('brochurepdf'));
                    $avaDOcsImage = AvaDocs::where('id', $brochureRecords->brochure_id)->first();
                    $avaDOcsImage->filename = $avaDocsImageData['filename'];
                    $avaDOcsImage->filetype = $avaDocsImageData['fileType'];
                    $avaDOcsImage->filesize = $avaDocsImageData['fileSize'];
                    $avaDOcsImage->path = $avaDocsImageData['actualImagePath'];
                    $avaDOcsImage->save();
                }
            }
        }
        $brochureRecords->title = $request['title'];
        $brochureRecords->location = $request['location'];
        $brochureRecords->save();
        return response()->json(['success' => true, 'message' => 'PopUp Updated Successfully', 'route' => route('event-popup')]);
    }

    public function changeBrochureStatus($id)
    {
        $BrochureData = Brochure::find($id);
        if ($BrochureData->status == 1) {
            $BrochureData->status = 0;
            $BrochureData->save();
            return response()->json(['success' => true, 'message' => 'PopUp Status Changed Successfully', 'route' => route('event-popup')]);
        }

        if ($BrochureData->checkPopStatus() == 0) {
            if ($BrochureData->status == 0) {
                $BrochureData->status = 1;
                $BrochureData->save();
                return response()->json(['success' => true, 'message' => 'PopUp Status Changed Successfully', 'route' => route('event-popup')]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Please inactive another active status first', 'route' => route('event-popup')]);
        }
    }

    public function deletePopup($id)
    {
        $data = Brochure::where('id', $id)->with(['avaDocsPopUpImage', 'avaDocsBrochureFiles'])->first();
        if (!empty($data->image_id) && !empty($data->brochure_id)) {
            $this->deleteFile($data->avaDocsPopUpImage->filename);
            $this->deleteFile($data->avaDocsBrochureFiles->filename);
        }
        $data->delete();
        return response()->json(['success' => true, 'message' => "Popup deleted successfully"]);
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
            'circularfile' => 'required|mimes:pdf',
            'circulartitle' => 'required|max:125',
        ];
        $message = [
            'circularfile.required' => "please upload file",
            'circularfile.mimes' => 'file extension must be of pdf',
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
            'circularfile' => 'mimes:pdf',
            'circulartitle' => 'required|max:125',
        ];
        $message = [
            'circularfile.mimes' => 'file extension must be of pdf',
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
            'policyfile' => 'required|mimes:pdf',
            'policytitle' => 'required',
        ];
        $message = [
            'policyfile.required' => "please upload file",
            'policyfile.mimes' => 'file extension must be of pdf',
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
            'policyfile' => 'mimes:pdf',
            'policytitle' => 'required',
        ];
        $message = [
            'policyfile.mimes' => 'file extension must be of pdf',
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
        return response()->json(['success' => true, 'message' => 'Marque Added Successfully', 'route' => route('marque-records')]);
    }
    public function marqueStatus($id)
    {

        $marqueData = Marque::find($id);
        if ($marqueData->status == 1) {
            $marqueData->status = 0;
            $marqueData->save();
            return response()->json(['success' => true, 'message' => 'Marque status changed Successfully', 'route' => route('marque-records')]);
        }

        if ($marqueData->marqueStatus() == 0) {
            if ($marqueData->status == 0) {
                $marqueData->status = 1;
                $marqueData->save();
                return response()->json(['success' => true, 'message' => 'Marque status changed Successfully', 'route' => route('marque-records')]);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Please inactive another active status first', 'route' => route('marque-records')]);
        }
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
            'marquetext' => 'required|string|max:125',
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
            'downloadbrochure' => 'required|mimes:pdf,jpeg,jpg,png',
            'brochuretitle' => 'required',
        ];
        $message = [
            'downloadbrochure.required' => "please upload file",
            'downloadbrochure.mimes' => 'file extension must be of pdf,jpeg,jpg',
            'brochuretitle.required' => 'please add a title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }

        $avaDocsBrochureFile = $this->customFileUpload($request->file('downloadbrochure'));
        if ($avaDocsBrochureFile) {
            $avaDocsFile = new AvaDocs; // Create AvaDocs instance for PDF
            $avaDocsFile->filename = $avaDocsBrochureFile['filename'];
            $avaDocsFile->filetype = $avaDocsBrochureFile['fileType'];
            $avaDocsFile->filesize = $avaDocsBrochureFile['fileSize'];
            $avaDocsFile->path = $avaDocsBrochureFile['actualImagePath'];
            $avaDocsFile->save();
            $avaDocsFile->downloadBrochureId = $avaDocsFile->id;
            $avaDocsFile->brochure_title = $request['brochuretitle'];
            $avaDocsFile->save();
        }

        return response()->json(['success' => true, 'message' => 'Brochure uploaded successfully']);
    }

    public function changeDownloadBrochureStatus($id)
    {
        $Data = AvaDocs::find($id);
        if ($Data->downloadbrochurePdfStatus == 1) {
            $Data->downloadbrochurePdfStatus = 0;
            $Data->save();
            return response()->json(['success' => true, 'message' => 'Brochure status changed Successfully']);
        }
        if ($Data->checkStatus() == 0) {
            if ($Data->downloadbrochurePdfStatus == 0) {
                $Data->downloadbrochurePdfStatus = 1;
                $Data->save();
                return response()->json(['success' => true, 'message' => 'Brochure status changed Successfully']);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Please inactive another active status first']);
        }
    }
    public function deleteDownloadBrochure($id)
    {
        $data = AvaDocs::where('downloadBrochureId', $id)->first();
        if (!empty($data->path)) {
            $this->deleteFile($data->filename);
        }
        $data->delete();
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
        $eventBrochure = AvaDocs::where('downloadBrochureId', $brochId)->first();
        $requestData = $request->only('downloadbrochure', 'brochuretitle');
        $rule = [
            'downloadbrochure' => 'nullable|mimes:pdf,jpeg,jpg,png',
            'brochuretitle' => 'required',
        ];
        $message = [
            'downloadbrochure.mimes' => 'file extension must be of pdf,jpeg,jpg',
            'brochuretitle.required' => 'please add title here',
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        if ($request->hasFile('downloadbrochure')) {
            if (!empty($eventBrochure->path)) {
                $fileUnlink = $this->unlinkFile($eventBrochure->path);
                if ($fileUnlink == true) {
                    $downloadBrochure =  $this->customFileUpload($request->file('downloadbrochure'));
                    $avaDocs = AvaDocs::where('downloadBrochureId', $brochId)->first();
                    $avaDocs->filename = $downloadBrochure['filename'];
                    $avaDocs->filetype = $downloadBrochure['fileType'];
                    $avaDocs->filesize = $downloadBrochure['fileSize'];
                    $avaDocs->path = $downloadBrochure['actualImagePath'];
                    $avaDocs->brochure_title = $brochureTitle;
                    $avaDocs->save();
                }
            }
        }
        $eventBrochure->brochure_title = $brochureTitle;
        $eventBrochure->save();
        return response()->json(['success' => true, 'message' => 'Brochure file Updated successfully']);
    }

    public function updateCaseStudy(Request $request)
    {
        $newCount = 0;
        $caseId = $request->id;
        $requestData = $request->only('case', 'casetitle', 'postedby', 'caseimage', 'tinymce');
        $rule = [
            'case' => 'required',
            'casetitle' => 'required',
            'postedby' => 'required',
            'caseimage' => 'array|max:5',
            'caseimage.*' => 'mimes:jpeg,jpg,png',
            'tinymce' => 'required'
        ];
        $message = [
            'case.required' => "please fill the case name !!",
            'casetitle.required' => 'please fill the case title',
            'postedby.required' => 'please fill the company name',
            'caseimage.required' => 'please select a case image',
            'caseimage.max' => 'Maximum five images are allowed',
            'caseimage.*.mimes' => 'image extension must be of jpeg,jpg,png',
            'description.required' => 'Please add Case description here'
        ];
        $validate = Validator::make($requestData, $rule, $message);
        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 400);
        }
        $olderData = CaseStudy::with('avaDocs')->where('id', $caseId)->first();
        $oldCount = count($olderData->avaDocs);
        $intOldCount = (int)$oldCount;
        if ($request['caseimage']) {
            $newCount = count($request['caseimage']);
        }
        $intNewCount = (int)$newCount;
        $totalImageCount = $intNewCount + $intOldCount;
        if ($totalImageCount > 5) {
            return response()->json(['errors' => array('caseimage' => 'Maximum five images are allowed')], 400);
        }
        $caseStudy = CaseStudy::find($caseId);
        if ($request->hasFile('caseimage')) {
            $files = $request->file('caseimage');
            foreach ($files as $file) {
                $data = $this->customFileUpload($file);
                AvaDocs::updateOrCreate(
                    ['case_id' => $caseId, 'filename' => $data['filename']],
                    [
                        'filename' => $data['filename'],
                        'filesize' => $data['fileSize'],
                        'path' => $data['actualImagePath'],
                        'filetype' => $data['fileType']
                    ]
                );
            }
        }
        $caseStudy->case = $request['case'];
        $caseStudy->case_title = $request['casetitle'];
        $caseStudy->description = $request['tinymce'];
        $caseStudy->posted_by = $request['postedby'];
        $caseStudy->save();
        return response()->json(['success' => true, 'message' => 'Case Updated Successfully']);
    }

    public function onlineCoverage()
    {
        $records = Media::select('id', 'title', 'online_image_id', 'location', 'media_url', 'created_at')->whereNotNull('media_url')->with('onlineDocsImage')->get();
        return view('admin.media.online.onlineCoverage', ['mediaRecord' => $records]);
    }

    public function addOnlineCoverage()
    {
        return view('admin.media.online.create');
    }

    public function saveOnlineCoverage(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'mediaUrl' => 'required|url',
            'onlineMediaImage' => 'required|mimes:jpeg,jpg,png',
        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validate);
        }
        $avaDocsFileData = $this->customFileUpload($request->file('onlineMediaImage'));
        $fileData = [
            'filename' => $avaDocsFileData['filename'],
            'filetype' => $avaDocsFileData['fileType'],
            'filesize' => $avaDocsFileData['fileSize'],
            'path' => $avaDocsFileData['actualImagePath'],
        ];
        $fileSaveResponse = AvaDocs::create($fileData);
        if ($fileSaveResponse) {
            $saveRecords = [
                'title' => $request->title,
                'location' => $request->location,
                'online_image_id' => $fileSaveResponse['id'],
                'media_url' => $request->mediaUrl,
            ];
            Media::create($saveRecords);
            return redirect()->route('online-coverage')->with('success', 'Records added sucessfully');
        } else {
            return redirect()->route('online-coverage')->with('error', 'Something went wrong');
        }
    }

    public function editOnlineCoverage($id)
    {
        $onlineMediaRecords = Media::where('id', $id)->with('onlineDocsImage')->first();
        return view('admin.media.online.edit', ['records' => $onlineMediaRecords]);
    }

    public function updateOnlineCoverage(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'onlineMediaImage' => 'mimes:png,jpg,jpeg',
            'mediaUrl' => 'required|url',
        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validate);
        }

        $mediaPrintRecords = Media::where('id', $id)->with('onlineDocsImage')->first();
        if ($request->file('onlineMediaImage')) {
            if (!empty($mediaPrintRecords->onlineDocsImage->path)) {
                $fileUnlink = $this->unlinkFile($mediaPrintRecords->onlineDocsImage->path);
                if ($fileUnlink == true) {
                    $avaDocsFileData = $this->customFileUpload($request->file('onlineMediaImage'));
                    $avaDOcs = AvaDocs::where('id', $mediaPrintRecords->online_image_id)->first();
                    $avaDOcs->filename = $avaDocsFileData['filename'];
                    $avaDOcs->filetype = $avaDocsFileData['fileType'];
                    $avaDOcs->filesize = $avaDocsFileData['fileSize'];
                    $avaDOcs->path = $avaDocsFileData['actualImagePath'];
                    $avaDOcs->save();
                }
            }
        }
        $mediaPrintRecords->title = $request->title;
        $mediaPrintRecords->location = $request->location;
        $mediaPrintRecords->media_url = $request->mediaUrl;
        $mediaPrintRecords->save();
        return redirect()->route('online-coverage')->with('success', 'Records updated sucessfully');
    }

    public function deleteOnlineCoverageRecords($id)
    {
        $mediaRecord = Media::where('id', $id)->with('onlineDocsImage')->first();
        if (!empty($mediaRecord->online_image_id)) {
            $this->deleteFile($mediaRecord->onlineDocsImage->filename);
        }
        $mediaRecord->delete();
        return response()->json(['success' => true, 'route' => route('online-coverage'), 'message' => 'Records deleted successfully']);
    }

    //print Coverage
    public function printCoverage()
    {
        $records = Media::select('id', 'title', 'location', 'print_image_id', 'pdf_file_id', 'created_at')->whereNotNull('pdf_file_id')->with(['avaDocs', 'printDocsImage'])->get();
        return view('admin.media.print.printCoverage', ['mediaRecord' => $records]);
    }

    public function addPrintCoverage()
    {
        return view('admin.media.print.create');
    }

    public function savePrintCoverage(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'printMediaImage' => 'required|mimes:png,jpg,jpeg',
            'printMediaFile' => 'required|mimes:pdf',
        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validate);
        }
        //Save file data
        $avaDocsFileImage = $this->customFileUpload($request->file('printMediaImage'));
        if ($avaDocsFileImage) {
            $fileData = [
                'filename' => $avaDocsFileImage['filename'],
                'filetype' => $avaDocsFileImage['fileType'],
                'filesize' => $avaDocsFileImage['fileSize'],
                'path' => $avaDocsFileImage['actualImagePath'],
            ];
            $fileSaveImageResponse = AvaDocs::Create($fileData);
        }
        $avaDocsFileData = $this->customFileUpload($request->file('printMediaFile'));
        if ($avaDocsFileData) {
            $fileData = [
                'filename' => $avaDocsFileData['filename'],
                'filetype' => $avaDocsFileData['fileType'],
                'filesize' => $avaDocsFileData['fileSize'],
                'path' => $avaDocsFileData['actualImagePath'],
            ];
            $fileSavePdfResponse = AvaDocs::Create($fileData);
        }

        if ($fileSaveImageResponse && $fileSavePdfResponse) {
            $saveRecords = [
                'title' => $request->title,
                'location' => $request->location,
                'print_image_id' => $fileSaveImageResponse->id,
                'pdf_file_id' => $fileSavePdfResponse->id,
            ];
            Media::create($saveRecords);
            return redirect()->route('print-coverage')->with('success', 'Records added sucessfully');
        } else {
            return redirect()->route('print-coverage')->with('error', 'Something went wrong');
        }
    }

    public function editPrintCoverage($id)
    {
        $printMediaRecords = Media::where('id', $id)->with('avaDOcs')->first();
        return view('admin.media.print.edit', ['records' => $printMediaRecords]);
    }

    public function updatePrintCoverage(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'title' => 'nullable',
            'location' => 'nullable',
            'printMediaFile' => 'nullable|mimes:pdf',
        ]);
        if ($validate->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validate);
        }
        $mediaPrintRecords = Media::where('id', $id)->with(['avaDocs', 'printDocsImage'])->first();
        if ($request->file('printMediaFile')) {
            if (!empty($mediaPrintRecords->avaDocs->path)) {
                $fileUnlink = $this->unlinkFile($mediaPrintRecords->avaDocs->path);
                if ($fileUnlink == true) {
                    $avaDocsFileData = $this->customFileUpload($request->file('printMediaFile'));
                    $avaDOcs = AvaDocs::where('id', $mediaPrintRecords->pdf_file_id)->first();
                    $avaDOcs->filename = $avaDocsFileData['filename'];
                    $avaDOcs->filetype = $avaDocsFileData['fileType'];
                    $avaDOcs->filesize = $avaDocsFileData['fileSize'];
                    $avaDOcs->path = $avaDocsFileData['actualImagePath'];
                    $avaDOcs->save();
                }
            }
        }
        if ($request->file('printMediaImage')) {
            if (!empty($mediaPrintRecords->printDocsImage->path)) {
                $fileUnlink = $this->unlinkFile($mediaPrintRecords->printDocsImage->path);
                if ($fileUnlink == true) {
                    $avaDocsImageData = $this->customFileUpload($request->file('printMediaImage'));
                    $avaDOcsImage = AvaDocs::where('id', $mediaPrintRecords->print_image_id)->first();
                    $avaDOcsImage->filename = $avaDocsImageData['filename'];
                    $avaDOcsImage->filetype = $avaDocsImageData['fileType'];
                    $avaDOcsImage->filesize = $avaDocsImageData['fileSize'];
                    $avaDOcsImage->path = $avaDocsImageData['actualImagePath'];
                    $avaDOcsImage->save();
                }
            }
        }
        $mediaPrintRecords->title = $request->title;
        $mediaPrintRecords->location = $request->location;
        $mediaPrintRecords->save();
        return redirect()->route('print-coverage')->with('success', 'Records updated sucessfully');
    }

    public function deletePrintCoverageRecords($id)
    {
        $mediaRecord = Media::where('id', $id)->with(['avaDocs', 'printDocsImage'])->first();
        if (!empty($mediaRecord->pdf_file_id) && !empty($mediaRecord->print_image_id)) {
            $this->deleteFile($mediaRecord->avaDocs->filename);
            $this->deleteFile($mediaRecord->printDocsImage->filename);
        }
        $mediaRecord->delete();
        return response()->json(['success' => true, 'route' => route('print-coverage'), 'message' => 'Records deleted successfully']);
    }
}
