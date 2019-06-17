<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caractercancha;
use App\Cancha;
use App\Centro;

class CaractercanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caractercancha= Caractercancha::all();
        return view('caractercancha.index',['caractercancha'=> $caractercancha ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('caractercancha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagen = $request->file('foto');
        $file = $imagen->store('cancha');

        $c = new Caractercancha;
        $c->id_cancha = $request->id_cancha;
        $c->foto = $file;
        $c->save();

        return redirect()->route('area.index');

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
        $c = $id;
        $centro = Centro::all();
        $cancha = Cancha::all();
        return view('caractercancha.edit',[
            'c' => $c,
            'centro'=>$centro,
            'cancha'=>$cancha
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

        // $car = Caractercancha::findOrfail($id);
        // $cancha = Cancha::all();
        // return view('caractercancha.edit',[
        //     'caracter'=>$car,
        //     'cancha'=>$cancha
        // ]);
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
