<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dia;
use App\Hora;
use App\Turno;
use App\Detalledia;
use App\Horario;
use App\Centro;
use App\Cancha;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $u = User::all();
        return view('calendario.index',['u'=>$u]);
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
        $cen = $id;
        $centros = Centro::all();
        $hora = Hora::all();
        $turno = Turno::all();
        $dia = Dia::all();
        $detalledia = Detalledia::all();
        $horario = Horario::All();
        return view('calendario.index',[
            'centro'=>$cen,
            'centros'=>$centros,
            'hora' => $hora,
            'turno' => $turno,
            'dia' => $dia,
            'detalledia' => $detalledia,
            'horario' => $horario
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
        // //
        // return $id;
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
        $centros = Centro::all();
        $centro = $id;

        $horas = Hora::all();
        $hora = $request->id_hora;
        
        $dias = Dia::all();
        $dia = $request->id_dia;
        
        $cancha = Cancha::all();
        return view('calendario.edit',[
            'centros'=>$centros,
            'horas'=>$horas,
            'dias'=>$dias,

            'centro' => $centro,
            'hora' => $hora,
            'dia' => $dia,
            'cancha' => $cancha
        ]);
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
