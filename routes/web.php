<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@showHome')->name('home');
Route::get('/faq', 'PagesController@showFaq')->name('faq');
Route::get('/login', 'PagesController@showLogin')->name('login');
Route::get('/register', 'PagesController@showRegister')->name('register');
Route::get('/products', 'ProductsController@showProducts')->name('products');
Route::get('/admin', 'PagesController@showAdmin')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index');
