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

//URL Home Page
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Autentikasi
Route::get('/login', 'LoginController@showLoginForm')->middleware('guest')->name('login');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::post('/logout', 'LoginController@logout')->middleware('auth');
Route::get('/register', 'RegisterController@showRegistrationForm')->middleware('guest');
Route::post('/register', 'RegisterController@register');

//Profile page dan edit photo profil
Route::get('/profile', 'UserController@showProfile')->middleware('auth');
Route::post('/profile/edit', 'UserController@update')->middleware('auth');
Route::get('/gallery/{galleryID}', 'GalleryController@show');

Route::get('/user/cart', 'UserController@showCart')->middleware('auth');
Route::get('/user/cart/clear', 'UserController@clearCart')->middleware('auth');
Route::get('/user/{vendorID}/cart', 'UserController@addToCart')->middleware('auth');

Route::get('/aboutus', 'AboutUsController@showAboutUs');
Route::get('/services', 'ServiceController@showService');


Route::get('/reservation', 'ReservationController@index');
Route::get('/vendors/{categoryName?}', 'VendorController@index');
Route::get('/reservation/create/{date}', 'ReservationController@create');
Route::post('/reservation', 'ReservationController@store')->middleware('auth');
Route::post('/reservation/addVendor', 'ReservationController@addVendors')->middleware('auth');

//grup URL untuk admin dengan middleware admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	Route::get('/', 'HomeController@adminIndex');

	Route::get('/reservation', 'ReservationController@adminIndex');
	Route::put('/reservation/{reservationID}', 'ReservationController@update');
	Route::get('/reservation/{reservationID}/edit', 'ReservationController@edit');
	Route::delete('/reservation/{reservationID}', 'ReservationController@destroy');
	Route::post('/reservation/{reservationID}/upload/{vendorID}', 'ReservationController@uploadVendorFile');
	
	Route::get('/aboutus', 'AboutUsController@adminShowAboutUs');
	Route::post('/aboutus', 'AboutUsController@updateAboutUs');
	
	Route::get('/service', 'ServiceController@adminShowService');
	Route::post('/service', 'ServiceController@updateService');
	
	Route::get('/vendor', 'VendorController@adminIndex');
	Route::post('/vendor', 'VendorController@store');
	Route::get('/vendor/create', 'VendorController@create');
	Route::get('/vendor/{vendorID}', 'VendorController@show');
	Route::put('/vendor/{vendorID}', 'VendorController@update');
	Route::delete('/vendor/{vendorID}', 'VendorController@destroy');
	Route::get('/vendor/{vendorID}/edit', 'VendorController@edit');

	Route::get('/promo', 'PromoController@index');
	Route::post('/promo', 'PromoController@store');
	Route::get('/promo/create', 'PromoController@create');
	Route::get('/promo/{promoID}', 'PromoController@show');
	Route::put('/promo/{promoID}', 'PromoController@update');
	Route::delete('/promo/{promoID}', 'PromoController@destroy');
	Route::get('/promo/{promoID}/edit', 'PromoController@edit');

	Route::get('/gallery', 'GalleryController@index');
	Route::post('/gallery', 'GalleryController@store');
	Route::get('/gallery/create', 'GalleryController@create');
	Route::get('/gallery/{galleryID}', 'GalleryController@show');
	Route::put('/gallery/{galleryID}', 'GalleryController@update');
	Route::delete('/gallery/{galleryID}', 'GalleryController@destroy');
	Route::get('/gallery/{galleryID}/edit', 'GalleryController@edit');
	Route::delete('/photo/{photoID}', 'PhotoController@destroy');
});