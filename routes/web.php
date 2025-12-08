<?php

use App\Http\Controllers\BookSessionController;
use App\Http\Controllers\ContactUsController;
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
Route::view('/dash', 'dashboard.contact-us');
Route::view('/industries', 'industry')->name('industry');
Route::view('/about', 'aboutus')->name('about');
Route::view('/services', 'services')->name('services');
Route::get('/book-session', [BookSessionController::class, 'index'])->name('book-session');
Route::post('/book-session/store', [BookSessionController::class, 'store'])->name('book-session.store');
