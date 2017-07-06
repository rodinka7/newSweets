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

Route::get('/catalog', 'ProductsController@storeCatalog');
Route::get('/product/{id}', 'ProductsController@storeProduct');
Route::get('/about', 'ProductsController@storeAbout');

Auth::routes();

Route:: prefix('/admin')->group(function(){
	Route::get('/create/product', 'AdminController@storeProduct');
	Route::post('/create/product', 'AdminController@createProduct');
	Route::get('/edit/product/{id}', 'AdminController@editProduct');
	Route::post('/edit/product/{id}', 'AdminController@updateProduct');
});

Route::get('/home', 'HomeController@index')->name('home');
