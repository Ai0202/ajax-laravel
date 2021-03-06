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

Route::get('class', 'ClassController@index');
Route::post('class/ajax', 'ClassController@ajax');
Route::post('class/store','ClassController@store')->name('store');
Route::get('class/create', 'ClassController@create');
