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

Route::get('/', 'indexController@getIndex')->name('landing');

Route::get('/signup', 'registerController@getRegister')->name('signup');

Route::post('/signup', 'registerController@doRegister');

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

    Route::get('/backend/changepassword', 'dashboardController@getChangePassword');

    Route::post('/backend/changepassword', 'dashboardController@doChangePassword');

    Route::get('/backend/config', 'dashboardController@getConfig');

    Route::post('/backend/config', 'dashboardController@doConfig');

    Route::get('/backend/excel', 'dashboardController@getExcel');

    Route::get('/backend/excel/register', 'dashboardController@getExcelRegister');

    Route::get('/backend/excel/walkin', 'dashboardController@getExcelWalkin');

    Route::get('/backend/excel/saturday', 'dashboardController@getExcelSaturday');

    Route::get('/backend/excel/sunday', 'dashboardController@getExcelSunday');

    Route::get('/backend/visitor', 'dashboardController@getVisitor');

    Route::get('/backend/visitor/new', 'dashboardController@getVisitorForm');

    Route::post('/backend/visitor/new', 'dashboardController@doSaveVisitor');

    Route::delete('/backend/visitor/delete/{id}', 'dashboardController@doDeleteVisitor');

    Route::get('/backend/walkin/new', 'dashboardController@getWalkinForm');

    Route::post('/backend/walkin/new', 'dashboardController@doSaveWalkin');

    Route::get('/backend/walkin/{id}', 'dashboardController@getWalkin');

    Route::get('/backend/checkout/{id}', 'dashboardController@getCheckoutList');

    Route::post('/backend/checkout/saturday/{id}', 'dashboardController@doCheckoutSaturday');

    Route::post('/backend/checkout/sunday/{id}', 'dashboardController@doCheckoutSunday');
});