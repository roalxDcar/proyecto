<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Centro;
use App\Detalledia;
use App\Turno;
use App\Dia;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //}
        $horario = Horario::OrderBy('id','asc')->paginate(10);
        $centro = Centro::all();
        $turno = Turno::all();
        $detalledia = Detalledia::all();
        return view('horariouser.index',[
            'horario' => $horario,
            'centro' => $centro,
            'turno' => $turno,
            'detalledia' => $detalledia
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
        $turno = Turno::all();
        $detalledia = Detalledia::all();
        return view('horariouser.create',[
            'turno' => $turno,
            'detalledia' => $detalledia
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
        $h = new Horario;
        $h->id_centro = $request->id_centro;
        $h->id_turno = $request->id_turno;
        $h->id_detalle_dia = $request->id_detalle_dia;
        $h->save();
        return redirect()->route('horario.index');
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
        $v = Horario::find($id); 
        $turno = Turno::all();
        $detalledia = Detalledia::all();
        return view('horariouser.edit',[
            'turno' => $turno,
            'detalledia' => $detalledia,
            'v'=>$v
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
        $h = Horario::FindOrFail($id);
        $h->id_centro = $request->id_centro;
        $h->id_turno = $request->id_turno;
        $h->id_detalle_dia = $request->id_detalle_dia;
        $h->save();
        return redirect()->route('horario.index');
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
