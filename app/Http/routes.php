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

Route::group(['prefix' => '/'], function() {
    Route::get('/', ['as' => 'get_index', 'uses' => 'HomeController@getIndex']);
    Route::get('/detail/{car}', ['as' => 'get_detail', 'uses' => 'HomeController@getDetail']);
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
    Route::get('/cars', ['as' => 'cars', 'uses' => 'DashboardController@getCars']);
    Route::get('/kek', ['as' => 'kek', 'uses' => 'DashboardController@getKek']);
    //getUpdateUser
});

Route::group(['prefix' => '/user'], function() {
    Route::get('/edit/{id}', ['as' => 'get_user_edit', 'uses' => 'UserController@getEdit']);
    Route::post('/edit/{id}', ['as' => 'post_user_edit', 'uses' => 'UserController@postEdit']);
});

Route::group(['prefix' => '/car'], function() {
    Route::get('/create', ['as' => 'get_car_create', 'uses' => 'CarController@getCreate']);
    Route::post('/create', ['as' => 'post_car_create', 'uses' => 'CarController@postCreate']);
    Route::get('/edit/{car}', ['as' => 'get_car_edit', 'uses' => 'CarController@getEdit']);
    Route::post('/edit/{car}', ['as' => 'post_car_edit', 'uses' => 'CarController@postEdit']);
    Route::get('/delete/{car}', ['as' => 'get_car_delete', 'uses' => 'CarController@getDelete']);
    Route::post('/parse', ['as' => 'get_car_parse', 'uses' => 'CarController@postParse']);
    Route::get('/photo/{filename}', ['as' => 'get_photo', 'uses' => 'CarController@getPhoto']);
});

Route::auth();
