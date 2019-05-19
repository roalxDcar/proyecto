<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::orderBy('id','desc')->paginate(5);
        $rol= Rol::all(); 
        return view('personal.index',[
            'user'=> $usuario, 
            'rol'=>$rol
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $r= Rol::all();
        return view('personal.create',['r'=>$r]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user = new User;
         $user->id_rol = $request->id_rol;
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
         return redirect()->route('usuario.index');
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
        $user = User::findOrFail($id);
        $r= Rol::all();
        return view('personal.edit',['r'=>$r ,'user'=>$user]);
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
         // $user->id_rol = $request->id_rol;
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
         return redirect()->route('usuario.index');
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
