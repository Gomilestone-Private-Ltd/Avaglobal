<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [HomeController::class, 'login'])->name('login');

//After login
Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('case-study', [HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('career-detail', [HomeController::class, 'careerDetails'])->name('careerDetails');
Route::get('case-study-detail', [HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');


//Admin panel
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');