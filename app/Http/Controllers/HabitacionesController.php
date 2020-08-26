<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitaciones;
class HabitacionesController extends Controller
{
    public function ingresar_habitacion(Request $request )
    {

        if(empty($request->numero)|| empty($request->piso)|| empty($request->estado)){
            return response() ->json(['mensaje'=>"Existen campos vacios",'code'=>406]);
        }
        $habitacion=new Habitaciones();
        $habitacion->numero=$request->numero;
        $habitacion->piso=$request->piso;
        $habitacion->estado=$request->estado;
        $habitacion->save();
        return response()->json (['mensaje'=>'habitacion creada', 'code'=>201]);
    }
}
