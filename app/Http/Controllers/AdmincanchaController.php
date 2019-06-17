<?php

namespace App\Http\Controllers;

use App\Cancha;
use App\EstadoCancha;
use App\Centro;
use App\Valoracion;
use Illuminate\Http\Request;

class AdmincanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cancha = Cancha::orderBy('id','asc')->paginate(5);
        $e = EstadoCancha::all();
        $centro = Centro::all();
        $valor = valoracion::All();
        return view('admicancha.index',[
            'cancha'=>$cancha, 
            'es'=>$e, 
            'centro'=>$centro, 
            'valor'=>$valor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $estado = EstadoCancha::All();
        $centro = Centro::All();
        $valor = valoracion::All();
        return view('admicancha.create',[
            'estado'=>$estado, 
            'centro'=>$centro, 
            'valor'=>$valor
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
        $cancha = new Cancha;
        $cancha->id_centro = $request->id_centro;
        $cancha->id_estado = $request->id_estado;
        $cancha->nombre = $request->nombre;
        $cancha->costo = $request->costo;
        $cancha->descripcion = $request->descripcion;
        $cancha->save();
        return redirect()->route('area.index');
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
        $cancha = Cancha::findOrFail($id);
        $estado = EstadoCancha::All();
        $centro = Centro::All();
        $valor = valoracion::All();
        return view('admicancha.edit',[
            'cancha'=>$cancha,
            'estado'=>$estado, 
            'centro'=>$centro, 
            'valor'=>$valor
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
        $cancha = Cancha::findOrFail($id);
        $cancha->id_centro = $request->id_centro;
        $cancha->id_estado = $request->id_estado;
        $cancha->nombre = $request->nombre;
        $cancha->costo = $request->costo;
        $cancha->descripcion = $request->descripcion;
        $cancha->save();
        return redirect()->route('area.index');
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
