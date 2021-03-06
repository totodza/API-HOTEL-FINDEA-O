<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//guardar
Route::resource('user','UserController');

Route::get('user/{name}/{password}','UserController@show');


///////////////////////////////
Route::post('ingresartipoh','tipodehabitacionController@ingresar_tipodehabitacion');

Route::post('ingresarhabitacion','HabitacionesController@ingresar_habitacion');
//Route::post('ingresarreservacion','ReservacionController@ingresar_reservacion');

Route::get('obtenerHabitaciones/{estado}','HabitacionesController@obtenerHabitaciones');
Route::get('buscarHabitacion/{id}','HabitacionesController@buscarHabitacion');

Route::get('resultado/{nombrehabitacion}','tipodehabitacionController@buscarHabitacion');

Route::post('reservacion','ReservacionController@ingresar_reservacion');

//eliminar
Route::get('eliminar/{id}','ReservacionController@EliminarReservacion');
///validar
//Route::post('validarusuario','UserController@valida');

//lista de departamentos
Route::get('prueba/{id}','ReservacionController@ReservacionUser');
