<?php

namespace App\Http\Controllers;

use App\Centro;
use App\DetalleCentro;
use App\Valoracion;
use Illuminate\Http\Request;

class CentroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centro = Centro::all();
        $detalle = DetalleCentro::all();
        return view('centro.index',[
            'centro'=> $centro,
            'detalle'=>$detalle
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallecentro =DetalleCentro::all();
        $v = Valoracion::all();
        return view('centro.create',[
            'detallecentro'=> $detallecentro,
            'v'=>$v
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
            $centro = new Centro;
            $centro->id_detalle = $request->id_detalle;
            $centro->nombre = $request->nombre;
            $centro->telefono = $request->telefono;
            $centro->ubicacion = $request->ubicacion;
            $centro->descripcion = $request->descripcion;
            $centro->id_valoracion = $request->id_valoracion;
            $centro->save();
            return redirect()->route('ad_centro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $c = Centro::findOrFail($id);
        $detallecentro =DetalleCentro::all();
        $v = Valoracion::all();
        return view('centro.edit',[
            'c'=>$c,
            'detallecentro'=> $detallecentro,
            'v'=>$v
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
            $centro = Centro::findOrFail($id);
            $centro->nombre = $request->nombre;
            $centro->telefono = $request->telefono;
            $centro->ubicacion = $request->ubicacion;
            $centro->descripcion = $request->descripcion;
            $centro->id_valoracion = $request->id_valoracion;
            $centro->save();
            return redirect()->route('ad_centro.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Centro  $centro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
