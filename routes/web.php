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

Route::get('/home', 'HomeController@index');
Route::get('/appointments','AppointmentController@index');
Route::get('/create','AppointmentController@create');
Route::get('/show/{id}','AppointmentController@show');
Route::get('/edit/{id}','AppointmentController@edit');
Route::get('/delete/{id}','AppointmentController@destroy');
Route::post('/store','AppointmentController@store');
Route::post('/update','AppointmentController@update');
