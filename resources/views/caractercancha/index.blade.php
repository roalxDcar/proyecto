@extends('layouts1.app')
@section('contenido')
<div class="row-center">
    <div class="col-md-6">
 <!-- MAP DATA-->
        @foreach($centro as $c)
          @if(Auth::user()->id_centro == $c->id)
            @foreach($cancha as $can)
              @if($can->id_centro == Auth::user()->id_centro)
                <div class="map-data m-b-40">
                  <h3 class="title-3 m-b-30">
                      <i class="zmdi zmdi-collection-image"></i>Cancha: {{ $can->nombre }}       
                      <button id="button" type="submit" class="btn btn-lg btn-primary btn-block-center">
                            <a href="{{ route('caracteristica.show',$can->id) }}" style="color:white;">
                                                  <span id="payment-button-send"> Agregar Fotografia </span>
                            </a>
                          <span id="payment-button-sending" style="display:none;">Sending…</span>
                      </button>
                  </h3>

                  @foreach($car as $ca)
                    @if($ca->id_cancha == $can->id)
                      <div class="map-wrap">
                          <a href="{{ asset($ca->foto) }}" target="_blak"><img title="{{ $c->nombre }}/Cancha:{{$can->nombre}}" width="350" height="350" src="{{ asset($ca->foto) }}"></a>
                      </div>
                      <div>
                        <br>
                        <button id="button" type="submit" class="btn btn-lg btn-success btn-block-center">
                            <a href="{{ route('caracteristica.edit',$ca->id) }}" style="color:black;">
                            <i class="fa fa-edit fa-lg"></i>&nbsp;
                            <span id="payment-button-send"> Cambiar Fotografia </span>
                            </a>
                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                        </button>
                                <br>
                                <br>
                        <form action="{{action('CaractercanchaController@destroy', $ca->id)}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">

                        <button class="btn btn-lg btn-danger btn-block-center" type="submit">
                          <i class="fa fa-edit fa-lg"></i>&nbsp;
                          <span id="payment-button-send"> Eliminar </span>
                        </button>
                      </div>
                      <br>
                    @endif
                  @endforeach
                </div>
              @endif
            @endforeach
          @endif
        @endforeach
<!-- END MAP DATA-->
    </div>
</div>
@endsection