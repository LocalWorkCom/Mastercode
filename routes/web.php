<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookSessionController;
use App\Http\Controllers\BookSessionPageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactUsPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\IndustryPageController;
use App\Http\Controllers\PolicyPageController;
use App\Http\Controllers\ServicesPageController;
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
//     return view('index');
// });

Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('contact-us.store');
Route::view('/', 'index')->name('home');
Route::view('/policy', 'policy')->name('term-policy');
Route::view('/industries', 'industry')->name('industry');
Route::view('/about', 'aboutus')->name('about');
Route::view('/services', 'services')->name('services');
Route::get('/book-session', [BookSessionController::class, 'index'])->name('book-session');
Route::post('/book-session/store', [BookSessionController::class, 'store'])->name('book-session.store');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::prefix('dashboard')->middleware(['check.user'])->group(function (){
    Route::get('/contact-us', [ContactUsPageController::class, 'index'])->name('dashboard-contact-us');
    Route::post('/data-contact-us', [ContactUsPageController::class, 'store'])->name('update-contact-us');

    Route::get('/book-session', [BookSessionPageController::class, 'index'])->name('dashboard-book-session');
    Route::post('/data-book-session', [BookSessionPageController::class, 'store'])->name('update-book-session');

    Route::get('/policy', [PolicyPageController::class, 'index'])->name('dashboard-policy');
    Route::post('/data-policy', [PolicyPageController::class, 'store'])->name('update-policy');

    Route::get('/services', [ServicesPageController::class, 'index'])->name('dashboard-services');
    Route::post('/data-services', [ServicesPageController::class, 'store'])->name('update-services');

    Route::get('/aboutUS', [AboutUsPageController::class, 'index'])->name('dashboard-about-us');
    Route::post('/data-aboutUS', [AboutUsPageController::class, 'store'])->name('update-about-us');

    Route::get('/home', [HomePageController::class, 'index'])->name('dashboard-home');
    Route::post('/data-home', [HomePageController::class, 'store'])->name('update-home');

    Route::get('/industry', [IndustryPageController::class, 'index'])->name('dashboard-industry');
    Route::post('/data-industry', [IndustryPageController::class, 'store'])->name('update-industry');

    Route::view('/content', 'dashboard.pageContent')->name('pageContent');
    Route::view('/', 'dashboard.index')->name('dashboard.index');
});

