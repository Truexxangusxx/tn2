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

Route::GET('/buscarimagen', 'ProductoController@buscarimagen');
Route::GET('/test', 'ProductoController@test');
Route::POST('/test', 'ProductoController@test');
Route::GET('/productonew', 'ProductoController@productonew');
Route::POST('/productocreate', 'ProductoController@productocreate');
Route::GET('/productocreate', 'ProductoController@productocreate');
