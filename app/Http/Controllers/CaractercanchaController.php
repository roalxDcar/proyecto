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
        $caractercancha=request()->except('_token');
        if($request->hasFile('observacion')){
            $caractercancha['observacion']=$request->file('observacion')->store('uploads','public');
        }
        Caractercancha::insert($caractercancha);
        
        return redirect()->route('ad_caractercancha.index');
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
