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

Route::get('/', function () {
    return view('welcome');
});
Route::get('registro', 'tipodehabitacionController@index');
Route::post('guardarregistro', 'tipodehabitacionController@ingresar_tipodehabitacion2');

Route::get('prueba/{id}','ReservacionController@ReservacionUser');
