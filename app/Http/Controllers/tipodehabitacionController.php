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
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $namefoto = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/Fotos/', $namefoto);
        }
        $tipodehabitacion=new tipodehabitacion();
        $tipodehabitacion->nombrehabitacion=$request->nombrehabitacion;
        $tipodehabitacion->numerocamas=$request->numerocamas;
        $tipodehabitacion->aire=$request->aire;
        $tipodehabitacion->precio=$request->precio;
        $tipodehabitacion->imagen=$namefoto;
        $tipodehabitacion->save();
        return response()->json (['mensaje'=>'habitacion creada', 'code'=>201]);
    }

    public function ingresar_tipodehabitacion2(Request $request ){
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $namefoto = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/Fotos/', $namefoto);
        }
        $tipodehabitacion=new tipodehabitacion();
        $tipodehabitacion->nombrehabitacion=$request->nombrehabitacion;
        $tipodehabitacion->numerocamas=$request->numerocamas;
        $tipodehabitacion->aire=$request->aire;
        $tipodehabitacion->precio=$request->precio;
        $tipodehabitacion->imagen=$namefoto;
        $tipodehabitacion->save();
        return redirect()->action('tipodehabitacionController@index');
    }

    public function index(){
        return view('pageingresar');
    }

}
