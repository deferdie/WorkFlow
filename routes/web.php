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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Job Routes
Route::resource('job', 'JobController');

Route::patch('/job/{id}/complete', 'JobController@updateStatus');

// Worker Routes
Route::get('/worker', 'WorkerController@index');

Route::get('/worker/create', 'WorkerController@create');

Route::post('/worker', 'WorkerController@save');

Route::delete('/worker/{id}', 'WorkerController@delete');

Route::patch('/worker/{id}', 'WorkerController@update');

Route::patch('/worker/{id}/status', 'WorkerController@updateStatus');

// Estimate Routes
Route::get('/estimate', 'EstimateController@index');

Route::post('/estimate', 'EstimateController@create');

Route::delete('/estimate/{id}', 'EstimateController@delete');

Route::patch('/estimate/{id}', 'EstimateController@update');

Route::patch('/estimate/{id}/status', 'EstimateController@updateStatus');

// Notes Routes
Route::get('/notes', 'NotesController@index');

Route::post('/notes', 'NotesController@create');

Route::delete('/notes/{id}', 'NotesController@delete');

Route::patch('/notes/{id}', 'NotesController@update');

// Client Routes
Route::get('/client', 'ClientController@index');

Route::get('/client/create', 'ClientController@create');

Route::post('/client/store', 'ClientController@store');

Route::delete('/client/{id}', 'ClientController@delete');

Route::patch('/client/{id}', 'clientController@update');

// Business Settings Routes
Route::get('business-settings', 'BusinesSettingsController@index');

Route::get('business-settings/department', 'BusinesSettingsController@addDepartment');

Route::post('business-settings/department', 'BusinesSettingsController@addDepartment');
