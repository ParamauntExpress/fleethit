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

Route::get('/', function () {
    return view('index');
});

Route::get('/rent', function() {
    return view('rent');
});

Route::controller('sign', 'SignController');
Route::controller('dashboard', 'DashboardController');
Route::controller('user', 'UserController');

Route::auth();

Route::get('/home', 'HomeController@index');
