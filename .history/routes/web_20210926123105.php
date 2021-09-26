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

Route::get('/', 'HomeController@index');

Route::get('/classworks', 'HomeController@showClassworks');

Route::get('/lab2', 'HomeController@showLab1');

Route::get('/lab2', 'HomeController@showLab2');