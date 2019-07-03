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
Route::get('/product/index', 'ProductController@index');    // Crea lista de Productos
Route::get('/product/create', 'ProductController@create'); // Carga Formulario de Registro
Route::post('/product', 'ProductController@store'); // Guarda Nuevo Producto

Route::get('/product/{id}/edit', 'ProductController@edit'); // Listar Producto a Editar
Route::post('/product/{id}/edit', 'ProductController@update'); // Actualiza Datos de Producto Editado
Route::delete('/product/{id}', 'ProductController@destroy'); // Eliminar Registro de Producto
Route::get('/product/{id}/view', 'ProductController@view'); // Listar Producto a Editar

