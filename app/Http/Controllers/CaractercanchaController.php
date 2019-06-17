<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Cancha;

=======
use App\Caractercancha;
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
class CaractercanchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $c = Caractercancha::orderBy('id','asc')->paginate(5);
        $cancha = Cancha::all();
        return view('caracteristica.index',[
                'c' => $c,
                'cancha'=>$cancha
            ]);
=======
        $caractercancha= Caractercancha::all();
        return view('caractercancha.index',['caractercancha'=> $caractercancha ]);
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $cancha = Cancha::all();
        return view('caracteristica.create',[
                'cancha'=>$cancha
            ]);
=======
        return view('caractercancha.create');
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $car = new Caractercancha;
        $car->id_cancha = $request->observacion;
        $car->->observacion = $request->observacion;
        $car->save();
        return redirect()->route();

=======
        $caractercancha=request()->except('_token');
        if($request->hasFile('observacion')){
            $caractercancha['observacion']=$request->file('observacion')->store('uploads','public');
        }
        Caractercancha::insert($caractercancha);
        
        return redirect()->route('ad_caractercancha.index');
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
    }
 // con los que no da : 

 //        if($request->hasFile('observacion')){
 //            $file= $request->file('observacion');
 //            $name= time().$file->getClientOriginalName();  
 //            $file->move(public_path().'/canchas/', $name);
  
 //        }
 //        $caractercancha= new Caractercancha;
 //        $caractercancha-> observacion = $name;
 //        $caractercancha->save();
        
 //        return redirect()->route('ad_caractercancha.index');

 //        $caractercancha= new Caractercancha;
 //        if ($request->Hasfile('observacion')){
 //            $file = $request->file('observacion');
 //            $extension = $file->getClientOriginalExtension();
 //            $filename = time(). '.' .$extension;
 //            $file->move('uploads/imagen/',$filename);
 //            $caractercancha->image = $filename;
 //        }else {
 //            return $request;
 //            $caractercancha->image = '';
 //        }
 //        $caractercancha->save();
        
 //        return redirect()->route('ad_caractercancha.index');



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
