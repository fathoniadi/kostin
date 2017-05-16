<?php

use Illuminate\Http\Request;
use App\Kota;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/kotabyidprovinsi/{id_provinsi}', function($id_provinsi,Request $request){

	$kotas = Kota::where('id_provinsi', $id_provinsi)->get(['id_kota','id_provinsi','nama_kota']);
	return json_encode($kotas);
});
