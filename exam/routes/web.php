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

Route::get('exams','ExamController@index');
Route::get('exams/create','ExamController@create');
Route::post('exams','ExamController@store');
Route::get('exams/category/{category}', 'ExamController@category');
// Route::post('articles','ArticlesController@new');




