<?php

namespace App\Http\Controllers;

use App\EstadoCancha;
use Illuminate\Http\Request;

class EstadoCanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadocancha = EstadoCancha::orderBy('id','desc')->paginate(5);
        return view('estadocancha.index',['estadocancha'=> $estadocancha ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estadocancha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $estado = new EstadoCancha;
            $estado->descripcion = $request->descripcion;
            $estado->observacion = $request->observacion;
            $estado->save();
            return redirect()->route('estadocancha.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstadoCancha  $estadoCancha
     * @return \Illuminate\Http\Response
     */
    public function show(EstadoCancha $estadoCancha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstadoCancha  $estadoCancha
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = EstadoCancha::findOrFail($id);
        return view('estadocancha.edit',['estado'=> $estado ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstadoCancha  $estadoCancha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $estado = EstadoCancha::findOrFail($id);
            $estado->descripcion = $request->descripcion;
            $estado->observacion = $request->observacion;
            $estado->save();
            return redirect()->route('estadocancha.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstadoCancha  $estadoCancha
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoCancha $estadoCancha)
    {
        //
    }
}
