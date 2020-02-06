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

Route::get('/', 'CaffController@index');
Route::get('/caffDefaults','CaffController@defaults');
Route::get('/getDrinks','CaffController@getDrinks');
