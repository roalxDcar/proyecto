<<<<<<< HEAD
@extends('layouts.app')
@section('content')

            <div class="page-title">
              <div class="title_left">
                <h3>Caracteristicas <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Caracteristicas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <button type="" class="btn btn-default"><a href="{{ route('ad_caractercancha.create') }}"><i class="fa fa-user"></i> <b>Agregar Centro</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Imagen</th>
                          <th>Accion</th>

                        </tr>
                      </thead>


                      <tbody>
                        @foreach($caractercancha as $caracter)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>
                            <img  src="{{ asset('uploads/imagen/'.$caracter->observacion) }}" alt="" width="200">
                          </td>
                          <td>
                          <a href="{{ route('ad_caractercancha.edit',$caracter->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>
                          {{--<td>
                           <a href="{{ route('centro.edit',$centro->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td> --}}

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
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