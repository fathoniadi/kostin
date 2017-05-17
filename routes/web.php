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


Route::get('/login', 'AuthController@login');
Route::post('/login', 'AuthController@doLogin');
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@doRegister');
Route::get('/datadiri', 'DatadiriController@index');
Route::post('/datadiri', 'DatadiriController@doDatadiri');
Route::get('/logout', 'AuthController@logout');
Route::resource('/dashboard', 'DashboardController');

Route::resource('/dashboard/kamar', 'KamarController');

Route::get('/search', function(){
	return view('search.search');
});
