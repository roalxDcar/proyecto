<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Centro;
use App\Detalledia;
use App\Turno;
use App\Dia;

use App\User;
use App\Hora;
use App\Cancha;
use App\Reserva;
use App\Estadoreserva;

class HorarioadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horario = Horario::all();;
        $centro = Centro::all();
        $turno = Turno::all();
        $detalledia = Detalledia::all();

        $hora = Hora::all();
        $dia = Dia::all();
        $estado = Estadoreserva::all();
        $reserva = Reserva::all();
        return view('horariouser.index',[
            'centros'=>$centro,
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $reserva = Reserva::all();
        $centro = Centro::all();
        $hora = Hora::all();
        $dia = Dia::all();
        $cancha = Cancha::all();
        $estado = Estadoreserva::all();
        $turno = Turno::all();
        return view('horario_admin.create',[
            'reserva' => $reserva,
            'centro'=>$centro,
            'hora' => $hora,
            'turno'=> $turno
            'dia' => $dia,
            'cancha' => $cancha,
            'estado' => $estado
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
        $reserva -> nombre = $request->nombre;
        $reserva->save();
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

        $user = User::all();

        return view('horariouser.editareserva',[
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
