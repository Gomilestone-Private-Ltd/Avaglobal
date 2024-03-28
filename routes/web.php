<?php

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
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('case-study', [HomeController::class, 'caseStudy'])->name('caseStudy');
Route::get('career-detail', [HomeController::class, 'careerDetails'])->name('careerDetails');
Route::get('case-study-detail', [HomeController::class, 'caseStudyDetail'])->name('caseStudyDetail');
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
