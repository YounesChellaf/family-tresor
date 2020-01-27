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

Route::resource('/phone_numbers','PhoneNumberController');