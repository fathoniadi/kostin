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
Route::get('/register', 'AuthController@register');


Route::get('/dashboard', function(){
	return view('dashboard.dashboard');
});

Route::get('/dashboard/kamar/create', function(){
	return view('kamar.create');
});
