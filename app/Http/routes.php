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
//Route::get('/users', 'UserController@index');
//Route::get('/user/{id}', 'UserController@show');
//Route::get('/create-user', 'UserController@create');
Route::resource('user', 'UserController');

Route::get('/delete-user/{id}', 'FrontController@deleteUser');

/* Routes for Category */
Route::get('/category/{id}', 'FrontController@showPostByCategory');