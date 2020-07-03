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

Route::get('/', 'HomeController@Home');

Route::get('/master', function(){
	return view("layouts.master");
});

Route::get('/data-tables', function(){
	return view("data-table");
});

Route::get('/item', 'ItemsController@index');
Route::get('/item/create', 'ItemsController@create');

Route::post('/item', 'ItemsController@store');
