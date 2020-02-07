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

Route::get('/','PagesController@index')->name('index');

Route::get('academia', 'PagesController@academia')->name('academia');

Route::get('alquileres', 'PagesController@alquileres')->name('alquileres');

Route::get('palco', 'PagesController@palco')->name('palco');

Route::get('torneos', 'PagesController@torneos')->name('torneos');

Route::get('contactanos', 'ContactFormController@create')->name('contactanos');

Route::post('contactanos','ContactFormController@store')->name('conatactanos');

Route::get('blog', 'blogController@getBlog')->name('blog');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




