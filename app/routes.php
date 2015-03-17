<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('user', 'UsersController');

Route::get('/', 'HomeController@showHome');

#Registration
Route::get('/register', 'HomeController@showRegisterForm')->before('guest');

#Login / logout
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
