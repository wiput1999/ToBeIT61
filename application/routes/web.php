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

Route::get('/', 'indexController@getIndex');

//Default Authentication Routes
Auth::routes();

Route::get('/logout', 'homeController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/backend/dashboard', 'dashboardController@getDashboard')->name('dashboard');

    Route::get('/backend/list/{id}', 'dashboardController@getList');

    Route::post('/backend/check/saturday/{id}', 'dashboardController@doCheckSaturday');

    Route::post('/backend/check/sunday/{id}', 'dashboardController@doCheckSunday');

    Route::get('/backend/profile/{id}', 'dashboardController@getProfile');

    Route::get('/backend/edit/{id}', 'dashboardController@getEdit');

    Route::post('/backend/edit/{id}', 'dashboardController@doEdit');

    Route::delete('/backend/profile/{id}', 'dashboardController@doDelete');
});