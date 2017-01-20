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

Route::get('/dash', function () {
    return view('dash');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/icons', function () {
    return view('icons');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/panels', function () {
    return view('panels');
});

Route::get('/tables', function () {
    return view('dash');
});

Route::get('/widgets', function () {
    return view('widgets');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/kata', 'KataController@index');

Route::get('/suninmotion', function () {
    return view('suninmotion');
});

Route::get('/lightsaber', function () {
    return view('lightsaber');
});
