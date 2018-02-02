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
    return redirect('auth/login');
});

Route::get('auth/login', function () {
    return view('auth.login');
});
Route::get('auth/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store', 'HomeController@store');
Route::post('/destroy', 'HomeController@destroy');


