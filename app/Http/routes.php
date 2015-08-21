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

// Site routes...
Route::get('/', ['uses' => 'HomeController@index']);
Route::get('page/{slug}', ['uses' => 'HomeController@page']);
Route::get('contact', ['uses' => 'HomeController@contact']);
Route::post('send', ['uses' => 'HomeController@send']);

// Redactor routes
Route::get('imageJson/{id?}', ['uses' => 'UploadController@imageJson']);
Route::get('fileJson/{id?}', ['uses' => 'UploadController@fileJson']);
Route::get('linkJson/{id?}', ['uses' => 'UploadController@linkJson']);

Route::post('uploadFileRedactor/{id?}', 'UploadController@uploadFileRedactor');
Route::post('uploadRedactor/{id?}', 'UploadController@uploadRedactor');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');