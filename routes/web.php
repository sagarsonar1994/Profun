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
    return view('frontend.post_create');
})->name('add');

// Route::get('/dashboard', function () {
//     return view('frontend.user_dashboard');
// });

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



Route::get('/ads/manage', 'WebController@manageAds')->name('manageAds');

Route::get('/user/create', 'UserController@newUserCreate')->name('newUserCreate');
Route::get('/user-verification/{email}','UserController@userVerification')->name('userVerification');
Route::get('/user-password-set','UserController@passwordSet')->name('passwordSet');


Route::group(['middleware' => ['web']], function() {
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'WebController@userDashboard')->name('userDashboard');
    Route::get('/add/post', 'WebController@addPostShow')->name('addPostShow');
    Route::post('/post_add','WebController@postAdd')->name('post_add');
    Route::get('/user/ads/list', 'WebController@userAdsList')->name('userAdsList');
    Route::get('/credit/buy', 'WebController@creditBuyPage')->name('creditBuyPage');
    
});
});


Auth::routes();
Route::get('/post/detail/{id}', 'WebController@getPostDetail')->name('getPostDetail');
Route::get('/home', 'HomeController@index')->name('home');
Route::any('/search/list', 'WebController@searchList')->name('searchList');
Route::get('/{city}','WebController@cityList')->name('cityList');
Route::get('/{category}/{city}','WebController@cityCategoryList')->name('cityCategoryList');