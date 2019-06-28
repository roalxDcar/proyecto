<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centro;
use App\Cancha;
use App\EstadoCancha;
use App\Caractercancha;

class CanchausuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //centros registrados
        $centro = Centro::all();
        $cancha = Cancha::all();
        $estado = EstadoCancha::all();
        return view('canchas_usuario.index',[
            'centro' => $centro,
            'cancha' => $cancha,
            'estado' => $estado
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        //mostrar canchas
        $idcentro = $id;

        $centro = Centro::all();
        $cancha = Cancha::all();
        $estado = EstadoCancha::all();
        $caracteristica = Caractercancha::all();
        return view('canchas_usuario.indexcancha',[
            'centro' => $centro,
            'cancha' => $cancha,
            'estado' => $estado,
            'caracteristica' => $caracteristica,
            'idcentro' => $idcentro
        ]);
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
