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
Route::get('/','ReportController@index')->name('report.index');
Route::get('reports','ReportController@reports')->name('report.reports');
Route::post('addReport','ReportController@addReport')->name('report.store');
Route::post('ListReport','ReportController@ListReport')->name('report.list');
Route::post('ApiPb','ReportController@ApiPb')->name('report.api');
