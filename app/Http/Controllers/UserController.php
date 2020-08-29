<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($correo,$password)
    {
        if ($correo == "correo"|| $password == "null") {
            return response()->json(['mensaje'=>"Campos vacios",'code'=>'406', 'value'=>'false']);
        }

        $datos=User::where('correo', $correo)->where('password', $password)->get();  
        return response()->json(['register'=>$datos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
