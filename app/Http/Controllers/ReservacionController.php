<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservacion;
use App\Habitaciones;

class ReservacionController extends Controller
{
    
    public function ingresar_reservacion(Request $request ){

        if(empty($request->fecha_entrada)|| empty($request->fecha_salida)){
            return response() ->json(['mensaje'=>"Existen campos vacios",'code'=>406]);
        }
        $reservacion=new Reservacion();
        $reservacion->fecha_entrada=$request->fecha_entrada;
        $reservacion->fecha_salida=$request->fecha_salida;
        $reservacion->habitacion_id=$request->habitacion_id;
        $reservacion->save();

        $habitacion=Habitaciones::find($request->habitacion_id);
        $habitacion->estado='ocupado';
        $habitacion->save();

        return response()->json (['mensaje'=>'reservacion creada', 'code'=>201]);
    }
}
