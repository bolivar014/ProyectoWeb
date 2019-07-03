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

Route::get('/', 'ComentsController@welcome');


Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('/about', 'HomeController@about');


// RUTAS ProductController
Route::get('/product', 'ProductController@index');
Route::get('/product/index', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::post('/product', 'ProductController@store');

Route::get('/product/{id}/edit', 'ProductController@edit');
Route::post('/product/{id}/edit', 'ProductController@update');
Route::delete('/product/{id}', 'ProductController@destroy');
