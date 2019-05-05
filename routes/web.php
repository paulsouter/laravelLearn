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
    return view('welcome');
});


Route::get('/', 'PagesController@index');

Route::get('/cart', 'PagesController@cart');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/createAccount', 'PagesController@createAccount');

Route::get('/products', 'PagesController@products');

Route::get('/quantityPurchased', 'PagesController@quantityPurchased');

Route::get('/signIn', 'PagesController@signIn');

Route::resource('posts', 'PostsController');
Route::resource('customers', 'CustomerController');
Route::resource('products', 'ProductController');
Route::resource('sales', 'SaleController');
Route::resource('saleItem', 'SaleItemController');
