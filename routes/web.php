<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/add', function () {
    return view('frontend.add_create');
});

Route::get('/dashboard', function () {
    return view('frontend.user_dashboard');
});

Route::get('/details', function () {
    return view('frontend.ads_detail');
});


Route::get('/list', function () {
    return view('frontend.ads_list');
});


Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail Testing',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('amit@yopmail.com')->send(new \App\Mail\SendNotificationMail($details));
   
    dd("Email is Sent.");
});
