<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use App\Centro;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per = User::orderBy('id','asc')->paginate(20);
        $rol= Rol::all();
        $centro=Centro::all(); 
        return view('personaladmi.index',[
            'user'=> $per,
            'rol'=>$rol,
            'centro'=>$centro
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $per = User::orderBy('id','desc')->paginate(5);
        $rol= Rol::all();
        $centro=Centro::all(); 
        return view('personaladmi.create',[
            'user'=> $per,
            'rol'=>$rol,
            'centro'=>$centro
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $us = new User;
         $us->id_rol = $request->id_rol;
         $us->id_centro = $request->id_centro;         
         $us->name = $request->name;
         $us->paterno = $request->paterno;
         $us->materno = $request->materno;
         $us->genero = $request->genero;
         $us->telefono = $request->telefono;
         $us->celular = $request->celular;
         $us->ci = $request->ci;
         $us->direccion = $request->direccion;
         $us->email = $request->email;
         $us->password = bcrypt($request->password);
         $us->save();
         return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $per = User::findOrFail($id);
        $rol= Rol::all();
        $centro = Centro::all();
        return view('personaladmi.edit',[
            'rol'=>$rol ,
            'per'=>$per,
            'centro'=>$centro
        ]);
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
        
         $user = User::findOrFail($id);
         $user->id_rol = $request->id_rol;
         $user->id_centro = $request->centro;
         $user->name = $request->name;
         $user->paterno = $request->paterno;
         $user->materno = $request->materno;
         $user->genero = $request->genero;
         $user->telefono = $request->telefono;
         $user->celular = $request->celular;
         $user->ci = $request->ci;
         $user->direccion = $request->direccion;
         $user->email = $request->email;
         $user->password = bcrypt($request->password);
         $user->save();
         return redirect()->route('personal.index');
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