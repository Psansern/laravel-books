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

use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    //return view('welcome');
    return view('mainpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('category','CategoryController@index')->name('category');
Route::resource('category','CategoryController');
Route::resource('books','BooksController');
