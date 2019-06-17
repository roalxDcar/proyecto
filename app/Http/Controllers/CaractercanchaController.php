<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Caractercancha;

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

        // $car = new Caractercancha;
        // $car->id_cancha = $request->observacion;
        // $car->->observacion = $request->observacion;
        // $car->save();
        // return redirect()->route();


        $caractercancha=request()->except('_token');
        if($request->hasFile('observacion')){
            $caractercancha['observacion']=$request->file('observacion')->store('uploads','public');
        }
        Caractercancha::insert($caractercancha);    
        return redirect()->route('ad_caractercancha.index');

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
