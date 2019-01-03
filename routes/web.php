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

Route::get('/', 'MainController@create');

Route::get('/contact', 'MainController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
