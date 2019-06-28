<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Horario;
use App\Centro;
use App\Detalledia;
use App\Turno;
use App\Dia;
use App\Hora;
use App\User;
use App\Cancha;
use App\Estadoreserva;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reserva = Reserva::all();
        $centro = Centro::all();
        $user = User::all();
        $hora = Hora::all();
        $dia = Dia::all();
        $cancha = Cancha::all();
        $estado = Estadoreserva::all();

        return view('calendario.reserva',[
            'reserva' => $reserva,
            'user'=>$user,
            'hora'=>$hora,
            'dia'=>$dia,
            'cancha'=>$cancha,
            'estado'=>$estado,
            'centro'=>$centro
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
        $reserva -> id_centro = $request -> id_centro;
        $reserva -> id_user = $request -> id_user;
        $reserva -> id_hora = $request -> id_hora;
        $reserva -> id_dia = $request -> id_dia;
        $reserva -> id_cancha = $request -> id_cancha;
        $reserva -> nombre = $request -> nombre;
        $reserva -> save();
        return redirect()->route('reserva.index');
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
