<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/pages', function () {
//     return view('admin.careerDescp');
// });


//After login
Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('case-study', [HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('career-detail/{slug}', [HomeController::class, 'careerDetails'])->name('careerDetails');
Route::get('case-study-detail/{slug}', [HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('services/sea-freight', [HomeController::class, 'seaFreight'])->name('seaFreight');
Route::get('services/air-freight', [HomeController::class, 'airFreight'])->name('airFreight');
Route::get('services/customs-clearance', [HomeController::class, 'customsClearance'])->name('customsClearance');
Route::get('services/warehousing', [HomeController::class, 'warehousing'])->name('warehousing');
Route::get('services/heavy-haul-trucking', [HomeController::class, 'heavyHaulTrucking'])->name('heavyHaulTrucking');
Route::get('services/freight-shipping', [HomeController::class, 'freightShipping'])->name('freightShipping');
Route::get('services/cargo-insurance', [HomeController::class, 'cargoInsurance'])->name('cargoInsurancet');
Route::get('container-sizes', [HomeController::class, 'containerSizes'])->name('containerSizes');
Route::get('tariffs-calculators', [HomeController::class, 'tariffsCalculators'])->name('tariffsCalculators');
Route::get('news-and-event', [HomeController::class, 'newsEvent'])->name('newsEvent');


//Admin panel Routes
Route::get('/employee-login', [HomeController::class, 'empLogin'])->middleware('checkLogin')->name('employee-login');
Route::get('/admin', [AdminController::class, 'login'])->middleware('checkLogin')->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::group(["middleware" => 'auth'], function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/job-openings', [AdminController::class, 'openJob'])->name('opened-job');
    Route::get('/career/get-description/{id}', [AdminController::class, 'getCareerDescription'])->name('getcareer-description');
    Route::get('job-data/delete/{id}', [AdminController::class, 'deleteCareerData'])->name('jobData-delete');
    Route::get('/add-jobs', [AdminController::class, 'addJobs'])->name('add-jobs');
    Route::post('/post-jobs', [AdminController::class, 'postJob'])->name('postJobs');
    Route::get('/careerjob/edit/{id}', [AdminController::class, 'editCareerJob'])->name('careerjob.edit');
    Route::get('/get-jobs', [AdminController::class, 'getJobs'])->name('getJobs');
    Route::get('/applicants', [AdminController::class, 'jobApplicants'])->name('applicants');
    Route::post('/post-applicants', [AdminController::class, 'postApplicants'])->name('post-applicants');
    Route::get('applicant/delete/{id}', [AdminController::class, 'deleteApplicant'])->name('delete-applicant');
    Route::get('/career-section', [AdminController::class, 'careerSection'])->name('career-section');
    Route::get('/career-description/{id}/{slug}', [AdminController::class, 'careerDescription'])->name('career-description');
    Route::post('/text-editor', [AdminController::class, 'textEditor'])->name('text-editor');
    Route::get('/edit-description/{id}', [AdminController::class, 'editDescription'])->name('edit-description');
    Route::get('/admin/case-study', [AdminController::class, 'caseSection'])->name('case-section');
    Route::get('/add-case', [AdminController::class, 'addCase'])->name('add-case');
    Route::get('/case/get-description/{id}', [AdminController::class, 'getCaseDescription'])->name('get-description');
    Route::get('case-study/delete/{id}', [AdminController::class, 'deleteCaseStudy'])->name('delete-caseStudy');
    Route::get('/casestudy/edit/{id}', [AdminController::class, 'editCaseStudy'])->name('casestudy.edit');
    Route::post('/case/update', [AdminController::class, 'updateCaseStudy'])->name('update-casestudy');
    Route::post('/case/store', [AdminController::class, 'caseStore'])->name('caseStore');
    Route::post('post-contacts', [AdminController::class, 'postContactApplicants'])->name('post-contacts');
    Route::get('/contact/applicants', [AdminController::class, 'contactApplicants'])->name('contact-applicants');
    Route::get('contactUS/delete/{id}', [AdminController::class, 'contactUsApplicantsDelete'])->name('contactus-delete');

    Route::get('/get/brochure', [AdminController::class, 'getBrochure'])->name('get-brochure');
    Route::get('/add-brochure', [AdminController::class, 'brochureForms'])->name('add-brochure');
    Route::post('/brochure/store', [AdminController::class, 'postBrochure'])->name('store-brochure');
    Route::get('brochure/edit/{id}', [AdminController::class, 'getBrochureEdit'])->name('brochure.edit');
    Route::post('/brochure/edit', [AdminController::class, 'postEditBrochure'])->name('post-editbrochure');
    Route::get('/change/brochure/status/{id}', [AdminController::class, 'changeBrochureStatus'])->name('change-status');
    // Route::get('download/brochure', [AdminController::class, 'downloadBrochure'])->name('download-brochure');
    Route::get('scroller', [AdminController::class, 'ScrollerData'])->name('scroller');
});