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
// produtos
Route::post('/produtos', 'ControllerProduto@store');
Route::post('/produtos/{id}', 'ControllerProduto@update');
Route::get('/produtos', 'ControllerProduto@indexView');
Route::get('/produtos/novo', 'ControllerProduto@create');
Route::get('/produtos/edit/{edit}', 'ControllerProduto@edit');
Route::get('/produtos/delete/{edit}', 'ControllerProduto@destroy');
// produtos
// Categorias
Route::post('/categorias', 'ControllerCategoria@store');
Route::post('/categorias/{id}', 'ControllerCategoria@update');
Route::get('/categorias', 'ControllerCategoria@index');
Route::get('/categorias/nova', 'ControllerCategoria@create');
Route::get('/categorias/edit/{edit}', 'ControllerCategoria@edit');
Route::get('/categorias/delete/{edit}', 'ControllerCategoria@destroy');
// Categorias
