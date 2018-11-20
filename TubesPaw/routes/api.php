<?php

use Illuminate\Http\Request;

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

Route::get('samsungs','SamsungController@index'); 
Route::post('samsungs','SamsungController@store'); 
Route::get('/samsungs/{nama}','SamsungController@show'); 
Route::put('/samsungs/{id}','SamsungController@update'); 
Route::delete('/samsungs/{id}','SamsungController@destroy');