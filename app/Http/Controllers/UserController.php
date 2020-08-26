<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    

    public function ingresar_usuario(Request $request )
    {

        if(empty($request->name)|| empty($request->apellido)|| empty($request->correo)|| empty($request->password)){
            return response() ->json(['mensaje'=>"Existen campos vacios",'code'=>406]);
        }
        $user=new User();
        $user->name=$request->name;
        $user->apellido=$request->apellido;
        $user->correo=$request->correo;
        $user->password=$request->password;
        $user->save();
        return response()->json (['mensaje'=>'Usuario creado', 'code'=>201]);
    }


    public function show($correo,$password){
        if ($correo == "correo"|| $password == "null") {
            return response()->json(['mensaje'=>"Campos vacios",'code'=>'406', 'value'=>'false']);
        }

        $datos=User::where('correo', $correo)->where('password', $password)->get();  
        return response()->json(['register'=>$datos]);
    }

    public function valida(Request $request)
    {
        $user=User::where('correo',$request->correo)->where('password',$request->password)->get();
        if ($user->isEmpty()) {
            return response()->json(['result' => 'Usuario o contraseña incorrecto', 'Codigo' => 406]);
        } else {
            return response()->json(['result' => $user, 'Codigo' => 200]);
        }
    }
}
