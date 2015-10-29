<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Routes for Home */
Route::get('/', 'FrontController@show');

/* Routes for Post */
Route::get('/posts', 'FrontController@showAll');
Route::get('/post/{id}/{slug?}', 'FrontController@showPost');

/* Routes for User */
Route::get('/users', 'FrontController@showUsers');
Route::get('/user/{id}', 'FrontController@showUser');

Route::get('/create-user', 'FrontController@createUser');
Route::post('/user-created', 'FrontController@userCreated');
