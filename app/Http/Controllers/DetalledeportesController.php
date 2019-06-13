<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalledeportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalle = Detalledeporte::All();
        $deporte = Deporte::All();
        $dcancha = Detallecancha::All();
        return view('detalledeporte.index',['detalle'=>$detalle, 'deporte'=>$deporte, 'dcancha'=>$dcancha]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deporte = Deporte::All();
        $dcancha = Detallecancha::All();
        return view('detalledeporte.create',['deporte'=>$deporte, 'dcancha'=>$dcancha]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detalle = new Detalledeporte;
        $detalle->nombre = $request->nombre;
        $detalle -> save();
        return redirect()->route('ad_detalledeporte.index');
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
