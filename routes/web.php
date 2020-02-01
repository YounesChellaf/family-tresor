<?php

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
    return view('layouts.home');
})->name('landing');
Route::get('/نسب-الاسـرة', function () {
    return view('layouts.family_ratios');
})->name('family_ratios');
Route::get('/عــن-الصندوق', function () {
    return view('layouts.about_tresor');
})->name('about_tresor');
Route::get('/جوال-تواصل', function () {
    return view('layouts.phone_number');
})->name('phone_number');
Route::get('/صـــــور', function () {
    return view('layouts.photos');
})->name('photos');


Route::group(['middleware' => 'auth'], function (){
    Route::resource('/phone_numbers','PhoneNumberController');
    Route::resource('/weddings','WeddingHelpController');
    Route::resource('/financials','FinancialHelpController');
    Route::resource('/reconciles','ReconcileController');
    Route::resource('/suggestions','SuggestionController');
    Route::resource('/generals','GeneralController');
    Route::resource('/users','UserController');
    Route::get('/admin', function () {
        return view('dashboard.layouts.landing');
    })->name('dashboard.landing');
    Route::get('/طـلب-معونة-مالية', function () {
        return view('layouts.financial_demand');
    })->name('financial_help');
    Route::get('/طـلب-اعانــة-زواج', function () {
        return view('layouts.wedding_help');
    })->name('weeding_help');
    Route::get('/اصلاح-ذات-البين', function () {
        return view('layouts.reconcile');
    })->name('reconcile');
    Route::get('/اقتراحـات', function () {
        return view('layouts.suggestion');
    })->name('suggestion');

});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
