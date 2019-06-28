@extends('layouts.app1')
@section('content1')
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <br>
                                <h4 class="mb-0 site-logo"><a href="#" class="text-black mb-0"><b>Datos de la Reserva</b></a></h4>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('reserva.store') }}">
                                        @csrf
                                        {{-- Centro deportivo id--}}
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Centro Deportivo :</label>
                                            @foreach($centros as $c)
                                              @if($c->id == $centro)

                                              <div class="col-md-1"><input type="text" name="id_centro" value="{{ $c->id }}" style="width:1px;height:1px;visibility: hidden;">
                                              </div>

                                              <div class="col-md-5">
	                                                <input disabled="" class="form-control" value="{{ $c->nombre }}" required autocomplete="email" autofocus>
	                                            </div>
                                              @endif
                                            @endforeach
                                        </div>
                                        {{-- Cancha id --}}

                                        <div class="form-group row">
                                          <label for="email" class="col-md-4 col-form-label text-md-right">Cancha :</label>
                                          <select name="id_cancha" class="form-control col-md-5">
                                            @foreach($cancha as $can)
                                              @if($can->id_centro == $centro)
                                                <option value="{{ $can->id }}">{{ $can->nombre }} - Precio{{ $can->costo }} Bs.
                                                </option>
                                              @endif
                                            @endforeach
                                          </select> 
                                        </div>
                                        {{-- Hora id --}}
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Hora de reserva:</label>
                                            @foreach($horas as $h)
                                              @if($h->id == $hora)

                                              <div class="col-md-1"><input type="text" name="id_hora" value="{{ $h->id }}" style="width:1px;height:1px;visibility: hidden;">
                                              </div>

                                                <div class="col-md-5">
                                                  <input disabled="" class="form-control" value="{{ $h->hora }}" required autocomplete="email" autofocus>
                                                </div>
                                              @endif
                                            @endforeach
                                        </div>
                                        {{-- Dia id --}}
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Dia de reserva:</label>

                                            @foreach($dias as $d)
                                              @if($d->id == $dia )

                                              <div class="col-md-1"><input type="text" name="id_dia" value="{{ $d->id }}" style="width:1px;height:1px;visibility: hidden;">
                                              </div>
                                              
                                              <div class="col-md-5">
		                                            <input disabled="" class="form-control" name="id_centro" value="{{ $d->dia }}" required autocomplete="email" autofocus>
		                                          </div>
                                              @endif
                                            @endforeach
                                        </div>
                                        {{-- nombre id user --}}
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Nombre del reservante:</label>

                                            <div class="col-md-1"><input type="text" name="id_user" value="{{ Auth::user()->id }}" style="width:1px;height:1px;visibility: hidden;">
                                            </div>

                                            <div class="col-md-6">
                                              <input name="nombre" class="form-control" value="{{ Auth::user()->name }}" required="name" autofocus>
                                            </div>
                                        </div>

                                        @php($id=$centro)

                                        <div class="row form-group">
                                              <a href="{{ route('calendario.show',$centro) }}">
                                              	<div class="col-md-2">
	                                               <input value="Cancelar" class="btn btn-secondary py-2 px-4 text-white">
	                                             </div>
                                              </a>
                                              <div class="col-md-2">
                                                <input type="submit" value="Guardar Reserva" class="btn btn-primary py-2 px-4 text-white">
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-12 col-form-label text-md-left">Tiene 15min para cancelar la reserva, caso contrario se le quitara la reserva y sera sancionado</label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
@endsection