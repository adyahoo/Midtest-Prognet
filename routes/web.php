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

Route::get('/', 'GameController@index');
// Route::get('/tambahGame','GameController@create');
// Route::post('/tambahGame','GameController@store');
// Route::get('/editGame','GameController@edit');
// Route::post('/editGame','GameController@update');

Route::resource('game','GameController');