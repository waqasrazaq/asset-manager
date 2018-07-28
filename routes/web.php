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

Route::get('/', 'AssetsController@home');
Route::get('/add', function() {
	return view('add');
});
Route::post('/insert', 'AssetsController@add');
Route::get('/update/{id}', 'AssetsController@update');
Route::post('/edit/{id}', 'AssetsController@edit');