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
Route::get('/profile', 'UserController@showProfile')->middleware('auth');
Route::post('/profile/edit', 'UserController@update')->middleware('auth');
Route::get('/user/cart', 'UserController@showCart')->middleware('auth');
Route::get('/user/cart/clear', 'UserController@clearCart')->middleware('auth');
Route::get('/user/{vendorID}/cart', 'UserController@addToCart')->middleware('auth');


Route::get('/aboutus', 'AboutUsController@showAboutUs');
Route::get('/services', 'HomeController@services');;
Route::get('/vendors/{categoryName?}', 'VendorController@index');

Route::get('/reservation', 'ReservationController@index');
Route::get('/reservation/create/{date}', 'ReservationController@create');
Route::post('/reservation', 'ReservationController@store')->middleware('auth');
Route::post('/reservation/addVendor', 'ReservationController@addVendors')->middleware('auth');

Route::get('/admin/reservation', 'ReservationController@adminIndex')->middleware('admin');
Route::put('/admin/reservation/{reservationID}', 'ReservationController@update')->middleware('admin');
Route::get('/admin/reservation/{reservationID}/edit', 'ReservationController@edit')->middleware('admin');
Route::delete('/admin/reservation/{reservationID}', 'ReservationController@destroy')->middleware('admin');
Route::get('/admin/aboutus', 'AboutUsController@adminShowAboutUs')->middleware('admin');
Route::post('/admin/aboutus', 'AboutUsController@updateAboutUs')->middleware('admin');
Route::get('/admin', 'HomeController@adminIndex')->middleware('admin');
Route::get('/admin/vendor', 'VendorController@adminIndex')->middleware('admin');
Route::post('/admin/vendor', 'VendorController@store')->middleware('admin');
Route::get('/admin/vendor/create', 'VendorController@create')->middleware('admin');
Route::get('/admin/vendor/{vendorID}', 'VendorController@show')->middleware('admin');
Route::put('/admin/vendor/{vendorID}', 'VendorController@update')->middleware('admin');
Route::delete('/admin/vendor/{vendorID}', 'VendorController@destroy')->middleware('admin');
Route::get('/admin/vendor/{vendorID}/edit', 'VendorController@edit')->middleware('admin');

Route::get('/admin/gallery', 'GalleryController@index')->middleware('admin');
Route::post('/admin/gallery', 'GalleryController@store')->middleware('admin');
Route::get('/admin/gallery/create', 'GalleryController@create')->middleware('admin');
Route::get('/admin/gallery/{galleryID}', 'GalleryController@show')->middleware('admin');
Route::put('/admin/gallery/{galleryID}', 'GalleryController@update')->middleware('admin');
Route::delete('/admin/gallery/{galleryID}', 'GalleryController@destroy')->middleware('admin');
Route::get('/admin/gallery/{galleryID}/edit', 'GalleryController@edit')->middleware('admin');

Route::get('/admin/services', 'ServiceController@index')->middleware('admin');
Route::post('/admin/services', 'ServiceController@store')->middleware('admin');
Route::get('/admin/services/{serviceID}', 'ServiceController@show')->middleware('admin');
Route::put('/admin/services/{serviceID}', 'ServiceController@update')->middleware('admin');
Route::delete('/admin/services/{serviceID}', 'ServiceController@destroy')->middleware('admin');
Route::get('/admin/services/{serviceID}/edit', 'ServiceController@edit')->middleware('admin');
