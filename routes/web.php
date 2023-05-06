<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/email', function () {
    return view('email');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [\App\Http\Controllers\EmailController::class, 'sendEmail'])->name('email-sent');
