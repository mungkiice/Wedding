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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'LoginController@showLoginForm')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@login')->middleware('guest');
Route::post('/logout', 'LoginController@logout')->middleware('auth');
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register')->middleware('guest');
Route::post('/register', 'RegisterController@register');
Route::get('/profile', 'HomeController@showProfile')->middleware('auth');
Route::get('/reservation', 'ReservationController@index');
Route::post('/reservation', 'ReservationController@store')->middleware('auth');
Route::get('/admin', 'HomeController@adminIndex')->middleware('admin');