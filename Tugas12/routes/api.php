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

Route::get('/getData', 'Karyawan@getData');
Route::post('/pushData', 'Karyawan@store');
Route::post('/setData', 'Karyawan@update');
Route::get('/delete/{id}', 'Karyawan@hapus');
Route::get('/getDetail/{id}', 'Karyawan@getDetail');
