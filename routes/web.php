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

Route::get('/', function () {
    return view('index');
});
Route::get('inicio', function () {
    return view('index');
})->name('inicio');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('academia', function () {
    return view('academia');
})->name('academia');

Route::get('alquileres', function () {
    return view('alquileres');
})->name('alquileres');

Route::get('palco', function () {
    return view('palco');
})->name('palco');

Route::get('contactanos', function () {
    return view('contactanos');
})->name('contactanos');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
