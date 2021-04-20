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
Route::resource('/productos', 'App\Http\Controllers\ProductoController');
Route::resource('/clientes', 'App\Http\Controllers\ClientesController');
Route::resource('/vendedores', 'App\Http\Controllers\VendedoresController');
Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/inicio', 'App\Http\Controllers\ProductoController@index');
Route::get('/cproducto', 'App\Http\Controllers\ProductoController@create');
*/