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


Route::get('/emp-login', [HomeController::class, 'login'])->middleware('checkLogin')->name('emp-login');

//After login
Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('case-study', [HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('career-detail/{id}', [HomeController::class, 'careerDetails'])->name('careerDetails');
Route::get('case-study-detail', [HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');


//Admin panel

Route::get('/login', [AdminController::class, 'loginPage'])->middleware('checkLogin')->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', [AdminController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/job-openings', [AdminController::class, 'openJob'])->middleware('auth')->name('opened-job');
Route::post('/post-jobs', [AdminController::class, 'postJob'])->middleware('auth')->name('postJobs');
Route::get('/get-jobs', [AdminController::class, 'getJobs'])->middleware('auth')->name('getJobs');

Route::get('/career-section', [AdminController::class, 'careerSection'])->middleware('auth')->name('career-section');
Route::get('/career-description/{id}', [AdminController::class, 'careerDescription'])->middleware('auth')->name('career-description');
Route::post('/text-editor', [AdminController::class, 'textEditor'])->middleware('auth')->name('text-editor');

Route::get('/edit-description/{id}', [AdminController::class, 'editDescription'])->middleware('auth')->name('edit-description');
Route::get('/admin/case-study', [AdminController::class, 'caseSection'])->middleware('auth')->name('case-section');