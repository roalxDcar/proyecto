@extends('layouts.app1')
@section('content1')
<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="card">
                                <br>
                                <h4 class="mb-0 site-logo"><a href="#" class="text-black mb-0"><b>Datos de Registrados</b></a></h4>
                                @foreach($reserva as $r)
                                 @php($reserva = $r)
                                @endforeach

                                <div class="card-body">
                                    <div class="p-2 mb-3 bg-white">

                                      @foreach($centro as $c)
                                        @if($c->id == $r->id_centro)
                                          <p style="color:black;" class="mb-4"><b>Centro Deportivo: </b>{{ $c->nombre }}</p>
                                        @endif
                                      @endforeach

                                          <p style="color:black;" class="mb-4"><b>Nombre de reserva: </b>{{ $r->nombre }}</p>

                                      @foreach($hora as $h)
                                       @if($h->id == $r->id_hora)
                                        <p style="color:black;" class="mb-4"><b>Hora de reserva: </b>{{ $h->hora }}</p>
                                       @endif
                                      @endforeach

                                      @foreach($dia as $d)
                                        @if($d->id == $r->id_dia)
                                          <p style="color:black;" class="mb-4"><b>Dia de reserva: </b>{{ $d->dia }}</p>
                                        @endif
                                      @endforeach

                                      @foreach($cancha as $can)
                                       @if($can->id == $r->id_cancha)
                                         <p style="color:black;" class="mb-4"><b>Cancha reservada: </b>{{ $can->nombre }} - Precio{{ $can->costo }}Bs.</p>
                                       @endif
                                      @endforeach

                                      @foreach($estado as $es)
                                       @if($es->id == $r->id_estado)
                                         <p style="color:black;" class="mb-4"><b>Estado: </b>{{ $es->estado }}</p>
                                       @endif
                                      @endforeach

                                        <div class="row form-group">
                                            {{--     <a href="{{ route('calendario.show',$centro) }}">
                                                <div class="col-md-2">
                                                   <input value="Cancelar" class="btn btn-secondary py-2 px-4 text-white">
                                                 </div>
                                              </a> --}}
                                              <a href="{{ route('calendario.show',$r->id_centro) }}">
                                                  <div class="col-md-2" style="margin-left:70px;">
                                                    <input value="Aceptar" class="btn btn-primary py-2 px-4 text-white">
                                                  </div>
                                              </a>
                                        </div>

                                    </div>
                      
                                </div>

                            </div>
                        </div>
                    </div>
                </div>          
@endsection