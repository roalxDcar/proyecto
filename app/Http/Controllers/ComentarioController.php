<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Centro;
use App\User;
use App\Comentario;
use App\Promocion;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $promo = Promocion::all();
        $user = User::all();
        $centros = Centro::findorfail($id);
        $comentario = Comentario::Orderby('id','desc')->paginate(50);
        $id_centro = $id;
        $user = User::all();
        return view('comentario.index',[
            'centro' => $centros,
            'comentario' => $comentario,
            'id_centro' => $id_centro,
            'user' => $user,
            'promo' => $promo,
            'user' => $user
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
        $comentario = new Comentario;
        $comentario -> id_user = $request -> id_user;
        $comentario -> id_centro = $id;
        $comentario -> comentario = $request -> comentario;
        $comentario -> save();
        return redirect()->route('comentario.show',$id);
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
