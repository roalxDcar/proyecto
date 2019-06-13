<?php

namespace App\Http\Controllers;

use App\Cancha;
use App\EstadoCancha
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cancha = Cancha::orderBy('id','desc')->paginate(5);
        return view('cancha.index',['cancha'=>$cancha]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = EstadoCancha::All();
        return view('cancha.create',['estado'=>$estado]);
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
        $cancha->id_cancha = $request->id_cancha;
        $cancha->nombre = $request->nombre;
        $cancha->costo = $request->costo;
        $cancha->descripcion = $request->descripcion;
        $cancha->valoracion = $request->valoracion;
        $cancha->save();
        return redirect()->route('cancha.index');
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
        $cancha = Cancha::findOrFail($id);
        $cancha = EstadoCancha::all();
        return view('cancha.index',['cancha'=>$cancha,'estado'=>$estado]);
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
        $cancha = Cancha::findOrFail($id);
        $cancha->id_cancha = $request->id_cancha;
        $cancha->nombre = $request->nombre;
        $cancha->costo = $request->costo;
        $cancha->descripcion = $request->descripcion;
        $cancha->valoracion = $request->valoracion;
        $cancha->save();
        return redirect()->route('cancha.index');
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
