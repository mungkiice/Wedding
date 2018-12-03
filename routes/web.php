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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::post('/logout', 'LoginController@logout')->middleware('auth');
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register')->middleware('guest');
Route::post('/register', 'RegisterController@register');
Route::get('/profile', 'HomeController@showProfile')->middleware('auth');

Route::get('/reservation', 'ReservationController@index');
Route::get('/reservation/create/{date}', 'ReservationController@create');
Route::post('/reservation', 'ReservationController@store')->middleware('auth');


Route::get('/admin', 'HomeController@adminIndex')->middleware('admin');

Route::get('/admin/vendor', 'VendorController@index')->middleware('admin');
Route::post('/admin/vendor', 'VendorController@store')->middleware('admin');
Route::get('/admin/vendor/create', 'VendorController@create')->middleware('admin');
Route::get('/admin/vendor/{id}', 'VendorController@show')->middleware('admin');
Route::put('/admin/vendor/{id}', 'VendorController@update')->middleware('admin');
Route::delete('/admin/vendor/{id}', 'VendorController@destroy')->middleware('admin');
Route::get('/admin/vendor/{id}/edit', 'VendorController@edit')->middleware('admin');

Route::get('/admin/gallery', 'GalleryController@index')->middleware('admin');
Route::post('/admin/gallery', 'GalleryController@store')->middleware('admin');
Route::get('/admin/gallery/create', 'GalleryController@create')->middleware('admin');
Route::get('/admin/gallery/{id}', 'GalleryController@show')->middleware('admin');
Route::put('/admin/gallery/{id}', 'GalleryController@update')->middleware('admin');
Route::delete('/admin/gallery/{id}', 'GalleryController@destroy')->middleware('admin');
Route::get('/admin/gallery/{id}/edit', 'GalleryController@edit')->middleware('admin');