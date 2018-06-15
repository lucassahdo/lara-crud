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

Route::get('/','ClientController@index');
Route::post('/new','ClientController@new');
Route::post('/update','ClientController@update');
Route::post('/getUpdate','ClientController@getUpdate');
Route::post('/delete','ClientController@delete');
