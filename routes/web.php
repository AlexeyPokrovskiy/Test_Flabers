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
<<<<<<< HEAD
Route::resource('/report','ReportController');
Route::get('/reports','ReportController@reports')->name('report.reports');


=======
Route::get('/','ReportController@index')->name('report.index');
Route::get('reports','ReportController@reports')->name('report.reports');
Route::post('addReport','ReportController@addReport')->name('report.store');
>>>>>>> stage 1
//Route::post('/store', function (){
////
//    return "lol";
//});
