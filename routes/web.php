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
Route::get('/product/{id}', 'ProductsController@showProduct')->name('product');
Route::get('/admin', 'PagesController@showAdmin')->name('admin');
Route::get('/create-product', 'PagesController@showCreateProduct')->name('createProduct');
Route::post('/create-product', 'AddProductController@addProduct')->name('addProduct');
Route::get('/edit', 'ProductsController@showProductsToEdit')->name('edit');
Route::get('/product-edit/{id}', 'ProductsController@showProductToEdit')->name('editProduct');
Route::post('/product-edit/{id}', 'EditProductController@updateProduct')->name('editarProducto');
Route::post('/erase/{id}', 'ProductsController@eraser')->name('eraser');
Route::get('/fruits', 'ProductsController@showProductsFruits')->name('fruits');
Route::get('/vegetables', 'ProductsController@showProductsVegetables')->name('vegetables');
Route::get('/cereals', 'ProductsController@showProductsCereals')->name('cereals');

Auth::routes();

Route::get('/home', 'HomeController@index');
