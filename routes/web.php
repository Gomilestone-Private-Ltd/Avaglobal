<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
// Here we controll all the ROLES and permissions
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
    //permission give to role
    Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

    //users have multiple roles
    Route::resource('users', UserController::class);
    Route::get('users/{userId}/delete', [UserController::class, 'destroy']);
    // Route::get('/search', [RoleController::class, 'getSearch']);
});

//ava global public routes
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
Route::get('services/rail-freight', [HomeController::class, 'railFreight'])->name('railFreight');
Route::get('knowledge-center', [HomeController::class, 'knowledgeCentre'])->name('knowledge');


Route::get('container-sizes', [HomeController::class, 'containerSizes'])->name('containerSizes');
Route::get('tariffs-calculators', [HomeController::class, 'tariffsCalculators'])->name('tariffsCalculators');
Route::get('media', [HomeController::class, 'media'])->name('media');
//applicant-submit
Route::post('/post-applicants', [AdminController::class, 'postApplicants'])->name('post-applicants');
Route::get('/download-file/{filepath}', [Controller::class, 'downloadFile'])->name('download-file');
// contact us applicants
Route::post('admin/post-contacts', [AdminController::class, 'postContactApplicants'])->name('post-contacts');


//Admin panel Routes
// Route::get('/employee-login', [HomeController::class, 'empLogin'])->middleware('checkLogin')->name('employee-login');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    //dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    //career
    Route::get('/job-openings', [AdminController::class, 'openJob'])->name('opened-job');
    Route::get('/add-job-openings', [AdminController::class, 'addJobs'])->name('add-job-openings');
    Route::get('/career/get-description/{id}', [AdminController::class, 'getCareerDescription'])->name('getcareer-description');
    Route::post('/post-job-openings', [AdminController::class, 'postJob'])->name('post-job-openings');
    Route::get('delete/job-openings/{id}', [AdminController::class, 'deleteCareerData'])->name('delete/job-openings');
    Route::get('/job-opening-details', [AdminController::class, 'getJobs'])->name('job-opening-details');
    Route::get('/edit/job-openings/{id}', [AdminController::class, 'editCareerJob'])->name('edit-job-openings');
    Route::get('/applicants', [AdminController::class, 'jobApplicants'])->name('applicants');
    Route::get('/delete-applicant/{id}', [AdminController::class, 'deleteApplicant'])->name('delete-applicant');
    //case-study
    Route::get('/add-case', [AdminController::class, 'addCase'])->name('add-case');
    Route::post('/create-case', [AdminController::class, 'caseStore'])->name('caseStore');
    Route::get('/case-study', [AdminController::class, 'caseSection'])->name('case-section');
    Route::get('/case/get-description/{id}', [AdminController::class, 'getCaseDescription'])->name('get-description');
    Route::get('/casestudy/edit/{id}', [AdminController::class, 'editCaseStudy'])->name('casestudy.edit');
    Route::post('/case/update', [AdminController::class, 'updateCaseStudy'])->name('update-casestudy');
    Route::get('case-study/delete/{id}', [AdminController::class, 'deleteCaseStudy'])->name('delete-caseStudy');
    Route::get('case-study/delete-image/{filename}', [AdminController::class, 'deleteFile'])->name('delete-caseStudy-file');
    Route::get('casestudy-status/{id}', [AdminController::class, 'changeCaseStatus'])->name('case.status');
    // //contactuslead
    Route::get('contact-us-leads', [AdminController::class, 'contactApplicants'])->name('contact-applicants');
    // Route::post('post-contacts', [AdminController::class, 'postContactApplicants'])->name('post-contacts');
    Route::get('/delete/contact-us-leads/{id}', [AdminController::class, 'contactUsApplicantsDelete'])->name('delete-contact-us');
    //footerscroller
    Route::get('marque-records', [AdminController::class, 'ScrollerData'])->name('marque-records');
    Route::get('add-marque', [AdminController::class, 'marqueAddForm'])->name('marque.addform');
    Route::post('post-marque', [AdminController::class, 'postMarque'])->name('post.marque');
    Route::get('change-marque-status/{id}', [AdminController::class, 'marqueStatus'])->name('marque.status');
    Route::get('delete-marque/{id}', [AdminController::class, 'deleteMarque'])->name('delete.marque');
    Route::get('edit-marque/{id}', [AdminController::class, 'editMarquePage'])->name('marque.edit');
    Route::post('post-edit-marque', [AdminController::class, 'postEditMarque'])->name('postEdit.marque');
    //circular
    Route::get('circular', [AdminController::class, 'getCircularData'])->name('circulars');
    Route::get('/add-circular', [AdminController::class, 'getAddCircularForm'])->name('get-addcircular');
    Route::post('/store-records', [AdminController::class, 'storeCircular'])->name('store-circular');
    Route::get('delete-circular-records/{id}', [AdminController::class, 'deleteCircular'])->name('delete-circular');
    Route::get('edit-circulars/{id}', [AdminController::class, 'getEditCircular'])->name('circular.edit');
    Route::post('/store-circular-records', [AdminController::class, 'editStoreCircular'])->name('edit.storecircular');
    //policy
    Route::get('policy', [AdminController::class, 'policyData'])->name('data-policy');
    Route::get('/add-policy', [AdminController::class, 'getAddPagePolicy'])->name('add-policypage');
    Route::post('/policy/store', [AdminController::class, 'storePolicy'])->name('store.policy');
    Route::get('delete-policy/{id}', [AdminController::class, 'deletePolicy'])->name('delete.policy');
    Route::get('edit-policy-records/{id}', [AdminController::class, 'editPolicyForm'])->name('policy.edit');
    Route::post('/edit-policy', [AdminController::class, 'storePolicyEdit'])->name('store.editPolicy');
    //Window Event PopUp
    Route::get('/add-event-popup', [AdminController::class, 'brochureForms'])->name('add-event-popup');
    Route::get('/event-popup', [AdminController::class, 'getBrochure'])->name('event-popup');
    Route::post('/store-event-popup', [AdminController::class, 'postBrochure'])->name('store-brochure');
    Route::get('edit-event-popup/{id}', [AdminController::class, 'getBrochureEdit'])->name('edit-event-popup');
    Route::post('edit/event-popup-record', [AdminController::class, 'postEditBrochure'])->name('edit.event-popup');
    Route::get('/event-popup-status/{id}', [AdminController::class, 'changeBrochureStatus'])->name('event-popup-status');
    Route::get('delete-event-popup/{id}', [AdminController::class, 'deletePopup'])->name('delete-popup');
    //Brochure
    Route::get('brochure', [AdminController::class, 'eventBrochureData'])->name('download.brochureData');
    Route::get('add-brochure', [AdminController::class, 'addDownloadBrochure'])->name('download.addBrochure');
    Route::post('store-brochure', [AdminController::class, 'storeDownloadBrochure'])->name('store.downloadBrochure');
    Route::get('/change-status/{id}', [AdminController::class, 'changeDownloadBrochureStatus'])->name('change.downloadBrochureStatus');
    Route::get('/edit-brochure/{id}', [AdminController::class, 'editDownloadBrochurePage'])->name('downloadBrochure.edit');
    Route::get('/delete-brochure/{id}', [AdminController::class, 'deleteDownloadBrochure'])->name('delete.downloadBrochure');
    Route::post('/store-brochure-records', [AdminController::class, 'editStoreDownloadBrochure'])->name('edit.storeDownloadBrochure');

    // testimonial
    Route::get('/testimonial', [AdminController::class, 'indexTestimonial'])->name('testimonial.index');
    Route::get('/create-testimonial', [AdminController::class, 'createTestimonial'])->name('create-testimonial');
    Route::post('/store/testimonial', [AdminController::class, 'storeTestimonial'])->name('store-testimonial');
    Route::get('edit/testimonial/{id}', [AdminController::class, 'editTestimonial'])->name('testimonial.edit');
    Route::post('/update/testimonial', [AdminController::class, 'updateTestimonial'])->name('update.testimonial');
    Route::get('/testimonial-status/{id}', [AdminController::class, 'testimonialStatus'])->name('status.testimonial');
    Route::get('/delete-testimonial/{id}', [AdminController::class, 'deleteTestimonial'])->name('delete.testimonial');



    // -----------------------------------------------------------
    Route::get('/career-section', [AdminController::class, 'careerSection'])->name('career-section');
    Route::get('/career-description/{id}/{slug}', [AdminController::class, 'careerDescription'])->name('career-description');
    Route::post('/text-editor', [AdminController::class, 'textEditor'])->name('text-editor');
    Route::get('/edit-description/{id}', [AdminController::class, 'editDescription'])->name('edit-description');



    //media
    Route::get('/online-coverage', [AdminController::class, 'onlineCoverage'])->name('online-coverage');
    Route::get('/add-online-coverage', [AdminController::class, 'addOnlineCoverage'])->name('add-online-coverage');
    Route::post('/save-online-coverage', [AdminController::class, 'saveOnlineCoverage'])->name('save-online-coverage');
    Route::get('/edit-online-coverage/{id}', [AdminController::class, 'editOnlineCoverage'])->name('edit-online-coverage');
    Route::post('/update-online-coverage/{id}', [AdminController::class, 'updateOnlineCoverage'])->name('update-online-coverage');
    Route::delete('/delete-online-coverage/{id}', [AdminController::class, 'deleteOnlineCoverageRecords'])->name('delete-online-coverage');
    Route::get('/online-status/{id}', [AdminController::class, 'changeOnlineMediaStatus'])->name('onlinemedia.status');

    //pdf-media
    Route::get('/print-coverage', [AdminController::class, 'printCoverage'])->name('print-coverage');
    Route::get('/add-print-coverage', [AdminController::class, 'addPrintCoverage'])->name('add-print-coverage');
    Route::post('/save-print-coverage', [AdminController::class, 'savePrintCoverage'])->name('save-print-coverage');
    Route::get('/edit-print-coverage/{id}', [AdminController::class, 'editPrintCoverage'])->name('edit-print-coverage');
    Route::post('/update-print-coverage/{id}', [AdminController::class, 'updatePrintCoverage'])->name('update-print-coverage');
    Route::delete('/delete-print-coverage/{id}', [AdminController::class, 'deletePrintCoverageRecords'])->name('delete-print-coverage');
    Route::get('printmedia-status/{id}', [AdminController::class, 'printMediaStatus'])->name('print.status');



    // Route::get('/career-description/{id}/{slug}', [AdminController::class, 'careerDescription'])->name('career-description');
    // Route::post('/text-editor', [AdminController::class, 'textEditor'])->name('text-editor');
    // Route::get('/edit-description/{id}', [AdminController::class, 'editDescription'])->name('edit-description');


});
