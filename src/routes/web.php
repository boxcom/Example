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

Route::get('/reports', 'HomeController@reports')->name('reports');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/configuration', 'HomeController@configuration')->name('configuration');

Route::get('/account', 'AccountController@index')->name('account');
Route::get('/create', 'AccountController@create')->name('account.create');
Route::post('/store', 'AccountController@store')->name('account.store');
