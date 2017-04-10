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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::GET('/', 'ProductoController@welcome');
Route::GET('/buscarimagen', 'ProductoController@buscarimagen');
Route::GET('/test', 'ProductoController@test');
Route::POST('/test', 'ProductoController@test');
Route::get('/actualizar', 'ProductoController@actualizar');
Route::GET('/productonew', 'ProductoController@productonew');
Route::POST('/productonew', 'ProductoController@productonew');
Route::POST('/productocreate', 'ProductoController@productocreate');
Route::GET('/productocreate', 'ProductoController@productocreate');
Route::GET('/obtenerproducto', 'ProductoController@obtenerproducto');
Route::POST('/eliminarproducto', 'ProductoController@eliminarproducto');
Route::GET('/productoupdate/{id}', function ($id) {
    return view('productoupdate')->with('id',$id);
});
Route::POST('/productobuscar', 'ProductoController@productobuscar');
Route::GET('/productobuscar', 'ProductoController@productobuscar');

Route::POST('/productoupdate/{id}', function ($id) {
    $file = request()->file('imagen');
    if($file!=null){
        $file->storeAs('/images/productos/', $id.'.jpg');
    }
    return view('productoupdate')->with('id',$id);
});

Route::get('/contactanos', function () {
    return view('contactanos');
});

Route::GET('/productobuscarcliente', 'ProductoController@productobuscarcliente');
Route::POST('/productobuscarcliente', 'ProductoController@productobuscarcliente');


Route::GET('/detalle/{id}', 'ProductoController@detalle');

