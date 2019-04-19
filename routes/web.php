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

Route::get('/', 'SiteController@index')->name('index');
Route::get('/2018', 'SiteController@last_year')->name('last_year');
//Route::post('/', 'SiteController@store');
//Route::get('/test', 'SiteController@sendEmailReminder');

Route::group(['prefix' => Config::get('app.loginUrl')], function() {
    Auth::routes();
});

Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin'], function(){
    Route::get('', 'AdminController@index')->name('admin');
    Route::post('/mail/check-mail', 'AdminController@checkMail');
    Route::get('/mail/send-one', 'AdminController@mailSendOne')->name('mailSendOne');
    Route::post('/mail/send-one', 'AdminController@mailSendOnePOST');
    Route::get('/mail/send-all', 'AdminController@mailSendAll')->name('mailSendAll');
    Route::post('/mail/send-all', 'AdminController@mailSendAllPOST');
});

Route::get('/home', 'HomeController@index')->name('home');
