<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('api')->group(function () {
  Route::prefix('auth')->group(function () {
    Route::post('register', 'UsersController@create');
    Route::get('getAll', 'UsersController@getAll');
    Route::post('login', 'UsersController@login');
  });
    Route::post('user-update', 'LevelsController@hwaPoints');
    Route::get('user', 'LevelsController@getUserInfo');
});


Route::get('/{any}', 'SpaController')->where('any', '.*');