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
Route::get('lang/{locale}', 'ThemesController@localize')->name('localize');
Route::get('/', 'ThemesController@getLandingPage');
Route::get('/', function () {
    return view('default.home'); // Ensure the correct path
});
