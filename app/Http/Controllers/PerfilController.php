<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\User;

class PerfilController extends Controller
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
        //
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
        $perfil = User::findorfail($id);
        $rol = Rol::all();
        return view('personaladmi.editperfil',[
            'rol' => $rol,
            'perfil' => $perfil
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
        //
         $user = User::findOrFail($id);
         $user->name = $request->name;
         $user->paterno = $request->paterno;
         $user->materno = $request->materno;
         $user->telefono = $request->telefono;
         $user->celular = $request->celular;
         $user->ci = $request->ci;
         $user->direccion = $request->direccion;
         $user->email = $request->email;
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
