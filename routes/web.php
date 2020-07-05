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

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/create', 'QuestionController@create');
Route::post('/questions', 'QuestionController@store');
Route::get('/questions/{id}', 'QuestionController@detail');
Route::post('/questions/{id}', 'AnswerController@store');
Route::get('/questions/{id}/edit', 'QuestionController@edit');
Route::put('/questions/{id}', 'QuestionController@update');
Route::delete('/questions/{id}', 'QuestionController@destroy');

Route::get('/answer/{question_id}', 'AnswerController@index');
Route::get('/answer/{question_id}/create', 'AnswerController@create');

