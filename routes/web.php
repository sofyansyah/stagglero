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
    return view('auth.register');
});

Route::get('/activity', function () {
    return view('communitys.activity');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('profile/{username}', 'ProfileController@profile');
Route::resource('communitys', 'CommunitysController');
Route::get('profile/{username}/edit', 'ProfileController@edit_profile');
Route::post('profile/{id}/edit', 'ProfileController@post_profile');