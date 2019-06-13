<?php

namespace App\Http\Controllers;

use App\DetalleCancha;
use App\Centro;
use App\Cancha;
use Illuminate\Http\Request;

class DetalleCanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecancha = DetalleCancha::all();
        
        return view('detallecancha.index',['detallecancha'=> $detallecancha]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallecancha =DetalleCancha::all();
        $cancha = Cancha::all();
        $centro = Centro::all();
        
        return view('detallecancha.create',[ 'cancha'=> $cancha, 'centro'=> $centro]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $detallecancha = new DetalleCancha;
            $detallecancha->id_centro = $request->id_centro;
            $detallecancha->id_cancha = $request->id_cancha;
            $detallecancha->observacion = $request->observacion;
            $detallecancha->save();
            return redirect()->route('detallecancha.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleCancha  $detalleCancha
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleCancha $detalleCancha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleCancha  $detalleCancha
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleCancha $detalleCancha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleCancha  $detalleCancha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleCancha $detalleCancha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleCancha  $detalleCancha
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleCancha $detalleCancha)
    {
        //
    }
}
