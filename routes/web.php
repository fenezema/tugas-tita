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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dosen/login','Auth\AdminLoginController@showLogin')->name('dosen.login');
Route::post('/dosen/login','Auth\AdminLoginController@login')->name('dosen.login.submit');
Route::get('/dosen', 'DosenController@index')->name('dosen.dashboard');

Route::get('/dosen/createmk','MatakuliahController@show')->name('create.mk');
Route::post('/dosen/createmk','MatakuliahController@create')->name('create.mk.submit');