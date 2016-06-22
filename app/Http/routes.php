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

Route::group(['prefix' => '/sign'], function() {
    Route::post('/rent', ['as' => 'rent', 'uses' => 'SignController@postRent']);
    Route::get('/pdf/{id}', ['as' => 'pdf', 'uses' => 'SignController@getPdf']);
});

Route::group(['prefix' => '/dashboard'], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@getIndex']);
    Route::get('/drivers', ['as' => 'drivers', 'uses' => 'DashboardController@getDrivers']);
    Route::get('/users', ['as' => 'users', 'uses' => 'DashboardController@getUsers']);
    //getUpdateUser
});

Route::group(['prefix' => '/user'], function() {
    Route::get('/edit/{id}', ['as' => 'get_edit', 'uses' => 'UserController@getEdit']);
    Route::post('/edit/{id}', ['as' => 'post_edit', 'uses' => 'UserController@postEdit']);
});

Route::auth();
