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
Route::get('/home', function () {
    return redirect('/');
});


Auth::routes();

Route::get('/', 'HomeController@first');
Route::get('/home', 'HomeController@index');
Route::post('/createproject/{id}', 'ProjectController@createproject');
Route::get('/deleteproject/{id}', 'ProjectController@deleteproject');
Route::post('/createcontent/{id}', 'ProjectController@createcontent');
Route::post('/deletecontent/{id}', 'ProjectController@deletecontent');
Route::get('/sortproject/{id}', 'ProjectController@sortproject');
Route::get('/today', 'ProjectController@today');
