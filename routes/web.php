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

Route::get('/', 'HomeController@register');
    Route::get('login', 'HomeController@login');
    Route::post('login', 'HomeController@post_login');
// Auth::routes();

Route::group(['middleware' => ['login']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('profile/{username}', 'ProfileController@profile');
    Route::resource('communitys', 'CommunitysController');
    Route::resource('posts', 'PostsController');
    Route::get('profile/{username}/edit', 'ProfileController@edit_profile');
    Route::post('profile/{id}/edit', 'ProfileController@post_profile');

});