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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('panel', function () {
    return view('panel');
});

Route::get('/almacen', function () {
    return view('almacen');
});

Route::get('/encomienda', function () {
    return view('encomienda');
});


Route::post('clientes/insertn', 'ClienteController@insertClienteN');
Route::post('clientes/insertj', 'ClienteController@insertClienteJ');

Route::get('/clientesn', 'ClienteController@mostrarClientesN')->name('clientesn');
Route::get('/clientesj', 'ClienteController@mostrarClientesJ');

Route::get('/panel', 'HomeController@index')->name('home');
