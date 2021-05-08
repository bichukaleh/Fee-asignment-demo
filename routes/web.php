<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/report', function () {
    return view('report');
});
Route::get('/report2', function () {
    return view('report2');
});
Route::post('/import-data', 'ImportFeeDataController@import');
Route::post('/get-report1-details', 'StudentFeeDetailsController@report1');
Route::post('/get-report2-details', 'StudentFeeDetailsController@report2');
