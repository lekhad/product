<?php

use Illuminate\Support\Facades\Route;

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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index')->name('product.index');
Route::get('create/product', 'ProductController@create')->name('create.product');
Route::post('store', 'ProductController@store')->name('product.store');
Route::get('edit/product/{id}', 'ProductController@Edit');
Route::get('delete/product/{id}', 'ProductController@Delete');
Route::get('show/product/{id}', 'ProductController@Show');
Route::post('update/product/{id}', 'ProductController@Update');
