<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservacion;
use App\Habitaciones;
use App\User;
use App\tipodehabitacion;


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
        $reservacion->users_id=$request->users_id;
        $reservacion->save();

        $habitacion=Habitaciones::find($request->habitacion_id);
        $habitacion->estado='ocupado';
        $habitacion->save();

        return response()->json (['mensaje'=>'reservacion creada', 'code'=>201]);
    }

    public function ReservacionUser($id){
        //$reservaciones=array();
        $reservaciones=Reservacion::with('Habitaciones.tipodehabitacion')->where('users_id',$id)->get();
        
        // foreach ($reservaciones as $ba) {
        //     $tipo=tipodehabitacion::find($ba->Habitaciones->id);
        //     //$reservaciones=Arr::add($reservaciones, $tipo);
        //     //$reservaciones->remove($tipo); 
        //     array_push($ba,$tipo);
        //     //$ba->append($tipo);
        //     $reservaciones->push($ba);

        //     //$reservaciones->push($tipo); 
        //     //$habitaciones=array($tipo);/
        //     //array_push($reservaciones,$tipo);
        //     //$listadehabitaciones=$habitaciones;
            
        // }
       return response()->json (['reservaciones',$reservaciones]);
    }

    public function EliminarReservacion(Request $request){
         $reservaciones = Reservacion::find($request->id)->delete();
        return response()->json (['eliminado'=>'reservacion eliminada']);
    }
}
