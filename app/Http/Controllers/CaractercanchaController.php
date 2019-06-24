<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======

>>>>>>> 04929b67cab167b935825e194de4a34fd8169630
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
        $cancha = Cancha::all();
        $caractercancha = Caractercancha::all();
        $centro = Centro::all();
        return view('caractercancha.index',[
            'cancha' => $cancha,
            'car' => $caractercancha,
            'centro' => $centro
        ]);
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
<<<<<<< HEAD
            $caractercancha= new Caractercancha;
                if ($request->Hasfile('observacion')){
                    $file = $request->file('observacion');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time(). '.' .$extension;
                    $file->move('uploads/imagen/',$filename);
                    $caractercancha->observacion = $filename;
                }else {
                    return $request;
                    $caractercancha->observacion = '';
                }
        $caractercancha->save();
        
        return redirect()->route('ad_caractercancha.index');
    }

    // guarda: 
    // $caractercancha=request()->except('_token');
    //     if($request->hasFile('observacion')){
    //         $caractercancha['observacion']=$request->file('observacion')->store('uploads','public');
    //     }
    //     Caractercancha::insert($caractercancha);
        
    //     return redirect()->route('ad_caractercancha.index');


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

        // $caractercancha=Caractercancha::create(request->all());
        // if($request->file('observacion')){
        //     $path=Storage::disk('public')->put('image',$request->file('observacion'));
        //     $caractercancha->fill(['observacion'=> asset($path)])->save();
        // }
        // return redirect()->route('ad_caractercancha.index');
=======
        $imagen = $request->file('foto');
        $file = $imagen->store('cancha');

        $c = new Caractercancha;
        $c->id_cancha = $request->id_cancha;
        $c->foto = $file;
        $c->save();

        return redirect()->route('caracteristica.index');
>>>>>>> 04929b67cab167b935825e194de4a34fd8169630

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

        $caractercancha = Caractercancha::findorfail($id);
        $cancha = Cancha::all();
        $centro = Centro::all();
        return view('caractercancha.editarfoto',[
            'cancha' => $cancha,
            'car' => $caractercancha,
            'centro' => $centro
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
        $imagen = $request->file('foto');
        $file = $imagen->store('cancha');

        $c = Caractercancha::findOrFail($id);
        $c->id_cancha = $request->id_cancha;
        $c->foto = $file;
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
        Caractercancha::find($id)->delete();

        return redirect()->route('caracteristica.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
