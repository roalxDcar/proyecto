<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cancha;

class CaractercanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c = Caractercancha::orderBy('id','asc')->paginate(5);
        $cancha = Cancha::all();
        return view('caracteristica.index',[
                'c' => $c,
                'cancha'=>$cancha
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cancha = Cancha::all();
        return view('caracteristica.create',[
                'cancha'=>$cancha
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
        $car = new Caractercancha;
        $car->id_cancha = $request->observacion;
        $car->->observacion = $request->observacion;
        $car->save();
        return redirect()->route();

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
        $car = Caractercancha::findOrfail($id)
        $cancha = Cancha::all();
        return view('Caracteristica.edit',[
            'cancha'=>$cancha
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
        $c = Caractercancha::findOrFail($id);
        $c->id_cancha = $request->id_cancha;
        $c->observacion = $request->observacion;
        $c->save();
        return redirect()->route('caracteristica.index');
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
