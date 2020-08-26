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
Route::post('ingresarusuario','UserController@ingresar_usuario');
Route::post('ingresartipoh','tipodehabitacionController@ingresar_tipodehabitacion');
Route::post('ingresarreservacion','ReservacionController@ingresar_reservacion');

///validar
Route::post('validarusuario','UserController@valida');


//mostar
