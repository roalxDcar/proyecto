<?php

namespace App\Http\Controllers;

use App\DetalleCentro;
use App\centro;
use Illuminate\Http\Request;

class DetalleCentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallecentro = DetalleCentro::all();
        $centro = Centro::all(); 
        return view('detallecentro.index',[
            'detallecentro'=> $detallecentro,
            'centro'=> $centro 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detallecentro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $detalle = new DetalleCentro;
            $detalle->propietario = $request->propietario;
            $detalle->nit = $request->nit;
            $detalle->domicilio = $request->domicilio;
            $detalle->actividad = $request->actividad;
            $detalle->observacion = $request->observacion;
            $detalle->save();
            return redirect()->route('ad_centro.create');
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
        $detalle = DetalleCentro::findOrFail($id);
        
        return view('detallecentro.edit',['detallecentro'=> $detalle ]);
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
            $detalle = DetalleCentro::findOrFail($id);
            $detalle->propietario = $request->propietario;
            $detalle->nit = $request->nit;
            $detalle->domicilio = $request->domicilio;
            $detalle->actividad = $request->actividad;
            $detalle->observacion = $request->observacion;
            $detalle->save();
            return redirect()->route('ad_detallecentro.index');
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
