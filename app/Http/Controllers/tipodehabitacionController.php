<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipodehabitacion;

class tipodehabitacionController extends Controller
{
    public function ingresar_tipodehabitacion(Request $request )
    {

        if(empty($request->nombrehabitacion)|| empty($request->numerocamas)|| empty($request->aire)|| empty($request->precio) || empty($request->imagen)){
            return response() ->json(['mensaje'=>"Existen campos vacios",'code'=>406]);
        }
        $tipodehabitacion=new tipodehabitacion();
        $tipodehabitacion->nombrehabitacion=$request->nombrehabitacion;
        $tipodehabitacion->numerocamas=$request->numerocamas;
        $tipodehabitacion->aire=$request->aire;
        $tipodehabitacion->precio=$request->precio;
        $tipodehabitacion->imagen=$request->imagen;
        $tipodehabitacion->save();
        return response()->json (['mensaje'=>'habitacion creada', 'code'=>201]);
    }
}
