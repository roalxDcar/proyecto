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
use App\Reserva;
use App\Estadoreserva;

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
        $reserva = Reserva::all();
        return view('calendario.reserva',[
            'reserva' => $reserva
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
        $reserva = new Reserva;
        $reserva -> id_user = $request->id_user;
        $reserva -> id_centro = $request->id_centro;
        $reserva -> id_hora = $request->id_hora;
        $reserva -> id_dia = $request->id_dia;
        $reserva -> id_cancha = $request->id_cancha;
        $reserva -> id_nombre = $request->id_nombre;
        $reserva->save();
        return redirect()->route('calendario.create');

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
        $estado = Estadoreserva::all();
        $reserva = Reserva::all();
        return view('calendario.index',[
            'centro'=>$cen,
            'centros'=>$centros,
            'hora' => $hora,
            'turno' => $turno,
            'dia' => $dia,
            'detalledia' => $detalledia,
            'horario' => $horario,
            'estado' => $estado,
            'reserva' => $reserva
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
        //Envia Datos de la Reserva
        $centros = Centro::all();
        $centro = $id;

        $horas = Hora::all();
        $hora = $request->id_hora;
        
        $dias = Dia::all();
        $dia = $request->id_dia;
        
        $cancha = Cancha::all();

        $user = User::all();

        return view('calendario.edit',[
            'centros'=>$centros,
            'horas'=>$horas,
            'dias'=>$dias,

            'centro' => $centro,
            'hora' => $hora,
            'dia' => $dia,
            'cancha' => $cancha,
            'user' => $user
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
