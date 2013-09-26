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
Route::controller('auth', 'AuthController');
Route::controller('/', 'HomeController');

// Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('emails', 'EmailController');
});