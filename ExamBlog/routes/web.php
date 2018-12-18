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


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('products', 'ProductController@index');
Route::get('products/create', 'ProductController@create');
Route::post('products', 'ProductController@store');
Route::get('products/category/{category}', 'ProductController@category');
Route::get('products/show/{id}', 'ProductController@show');
Route::post('products/show/{id}', 'ProductController@edit');



