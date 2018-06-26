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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@store')->name('contact.store');
Route::get('/login', 'PagesController@login')->name('login');
Route::get('/logout', 'PagesController@logout')->name('logout');
Route::get('/message', 'PagesController@message')->name('message');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/viewmessages', 'PagesController@viewmessages')->name('viewmessages');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');