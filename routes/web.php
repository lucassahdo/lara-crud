<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Models\Client;

Route::get('/','clientController@index');
Route::post('/new','clientController@new');
Route::post('/update','clientController@update');
Route::post('/getUpdate','clientController@getUpdate');
Route::post('/delete','clientController@delete');
