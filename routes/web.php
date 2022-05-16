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

Route::get('/test', function () {
    return view('welcome');
});



Route::get('/', 'MainController@index')->name('main.home');
Route::get('/home', 'MainController@index')->name('main.home');
Route::get('/aboutus', 'MainController@aboutus')->name('main.aboutus');
Route::get('/contactus', 'MainController@contactus')->name('main.contactus');
Route::get('/Network Security', 'MainController@Security')->name('main.Security');
Route::get('/IT Consulting', 'MainController@Consulting')->name('main.Consulting');
Route::get('/Computer Training', 'MainController@Training')->name('main.Training');
Route::get('/Cloud Services', 'MainController@Services')->name('main.Services');
Route::get('/careers', 'MainController@careers')->name('main.careers');