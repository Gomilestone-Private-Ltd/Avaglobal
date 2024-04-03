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


Route::get('/employee-login', [HomeController::class, 'empLogin'])->middleware('checkLogin')->name('employee-login');


//After login
Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('case-study', [HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('career-detail/{id}', [HomeController::class, 'careerDetails'])->name('careerDetails');
Route::get('case-study-detail/{id}', [HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');
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


//Admin panel
// Route::get('/login', [AdminController::class, 'loginPage'])->middleware('checkLogin')->name('login');

Route::get('/admin', [AdminController::class, 'login'])->middleware('checkLogin')->name('login');

Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/job-openings', [AdminController::class, 'openJob'])->middleware('auth')->name('opened-job');
Route::get('/career/get-description/{id}', [AdminController::class, 'getCareerDescription'])->middleware('auth')->name('getcareer-description');
Route::get('job-data/delete/{id}', [AdminController::class, 'deleteCareerData'])->middleware('auth')->name('jobData-delete');
Route::get('/add-jobs', [AdminController::class, 'addJobs'])->middleware('auth')->name('add-jobs');
Route::post('/post-jobs', [AdminController::class, 'postJob'])->middleware('auth')->name('postJobs');
Route::get('/careerjob/edit/{id}', [AdminController::class, 'editCareerJob'])->middleware('auth')->name('careerjob.edit');
Route::get('/get-jobs', [AdminController::class, 'getJobs'])->middleware('auth')->name('getJobs');
Route::get('/applicants', [AdminController::class, 'jobApplicants'])->middleware('auth')->name('applicants');
Route::post('/post-applicants', [AdminController::class, 'postApplicants'])->middleware('auth')->name('post-applicants');
Route::get('applicant/delete/{id}', [AdminController::class, 'deleteApplicant'])->middleware('auth')->name('delete-applicant');

Route::get('/career-section', [AdminController::class, 'careerSection'])->middleware('auth')->name('career-section');
Route::get('/career-description/{id}/{slug}', [AdminController::class, 'careerDescription'])->middleware('auth')->name('career-description');
Route::post('/text-editor', [AdminController::class, 'textEditor'])->middleware('auth')->name('text-editor');

Route::get('/edit-description/{id}', [AdminController::class, 'editDescription'])->middleware('auth')->name('edit-description');
Route::get('/admin/case-study', [AdminController::class, 'caseSection'])->middleware('auth')->name('case-section');
Route::get('/add-case', [AdminController::class, 'addCase'])->middleware('auth')->name('add-case');
Route::get('/case/get-description/{id}', [AdminController::class, 'getCaseDescription'])->middleware('auth')->name('get-description');
Route::get('case-study/delete/{id}', [AdminController::class, 'deleteCaseStudy'])->middleware('auth')->name('delete-caseStudy');
Route::get('/casestudy/edit/{id}', [AdminController::class, 'editCaseStudy'])->middleware('auth')->name('casestudy.edit');
Route::post('/case/update', [AdminController::class, 'updateCaseStudy'])->middleware('auth')->name('update-casestudy');
Route::post('/case/store', [AdminController::class, 'caseStore'])->middleware('auth')->name('caseStore');