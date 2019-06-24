@extends('layouts.app1')
@section('head')
    <link href="{!! asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') !!}" rel="stylesheet">
@endsection
@section('content1')

{{-- Contenido --}}
{{-- Calendario --}} 
<div class="container">
    <div class="row">  
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    @php($contador=0)
                    @foreach($centros as $c)
                      @if($c->id == $centro)
                      @php($contador++)
                        <h1 class="panel-title" style="color:black;">Horario Centro Deportivo "{{ $c->nombre }}"</h1> 
                        @endif                    
                    @endforeach
                    @if($contador == 0)
                      <h1 class="panel-title" style="color:black;">Horario</h1>
                    @endif 
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    @if($contador > 0)
                      <tr >
                        <th style="text-align: center;">Hora</th>
                        {{-- DIAS DE LA SEMANA JALAR DE LA TABLA "DIAS"--}}
                        @foreach($horario as $horarios )
                          @if($horarios->id_centro == $centro)
                            @foreach($detalledia as $d)
                              @if($horarios->id_detalle_dia == $d->id)
                                @foreach($dia as $dias)
                                  @if($d->id == $dias->id_detalle_dia)
                                    <th style="text-align: center;">{{ $dias->dia }}</th>
                                  @endif
                                @endforeach
                              @endif
                            @endforeach
                          @endif
                        @endforeach
                        {{-- DIAS DE LA SEMANA JALAR DE LA TABLA "DIAS"--}}
                      </tr>
                      @else
                      <tr>
                        <th style="text-align: center;">...</th>
                      </tr>
                    @endif 
                  </thead>
                  <tbody>
                      @if($contador > 0)

                          @foreach($horario as $h)
                            @if($h->id_centro == $centro)
                              @foreach($turno as $t)
                                @if($h->id_turno == $t->id)
                                  @foreach($hora as $horas)
                                    @if($horas->id_turno == $t->id)
                                      <tr>
                                        {{-- Para mostrar las horas --}}
                                        <td class="hidden-xs">{{ $horas->hora }}</td>
                                        {{-- Boton para solicitar reserva --}}

                                        @foreach($horario as $horarios )
                                          @if($horarios->id_centro == $centro)
                                            @foreach($detalledia as $d)
                                              @if($horarios->id_detalle_dia == $d->id)
                                                @foreach($dia as $dias)
                                                  @if($d->id == $dias->id_detalle_dia)
                                                    <td style="text-align: center;">
                                                      <form action="{{ route('calendario.update',$centro) }}" enctype="multipart/form-data" method="POST">
                                                      @csrf                              
                                                      @method('PUT')
                                                      {{-- Primer Input hora id--}}
                                                      <input type="text" name="id_hora" value="{{ $horas->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                       {{-- boton para guardar la reserva --}}
                                                      <button class="btn btn-default" type="submit">Libre</button>
                                                      {{-- segundo input dia id--}}
                                                      <input type="text" name="id_dia" value="{{ $dias->id }}" style="width:1px;height:1px;visibility:hidden;">  
                                                      </form>
                                                    </td>
                                                  @endif
                                                @endforeach
                                              @endif
                                            @endforeach
                                          @endif
                                        @endforeach

                                      </tr>
                                    @endif
                                  @endforeach
                                @endif
                              @endforeach
                            @endif
                          @endforeach

                          @else
                          <tr>
                            <td style="text-align: center;"><h3 class="panel-title" style="color:black;">No Disponible...</h3></td>
                          </tr>
                      @endif
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection