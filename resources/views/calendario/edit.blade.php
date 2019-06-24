@extends('layouts.app1')
@section('content1')
<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <br>
                                <h4 class="mb-0 site-logo"><a href="#" class="text-black mb-0"><b>Reserva</b></a></h4>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('reserva.store') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Centro Deportivo :</label>

                                            @foreach($centros as $c)
                                              @if($c->id == $centro)
                                                <div class="col-md-6">
	                                                <input type="" class="form-control" name="id_centro" value="{{ $c->nombre }}" required autocomplete="email" autofocus>
	                                            </div>
                                              @endif
                                            @endforeach

                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Hora :</label>
                                            @foreach($horas as $h)
                                              @if($h->id == $hora)
                                                <div class="col-md-6">
	                                                <input type="" class="form-control" name="id_centro" value="{{ $h->hora }}" required autocomplete="email" autofocus>
	                                            </div>
                                              @endif
                                            @endforeach
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Dia :</label>

                                            @foreach($dias as $d)
                                              @if($d->id == $dia )
                                                <div class="col-md-6">
		                                          <input id="" type="" class="form-control" name="id_centro" value="{{ $d->dia }}" required autocomplete="email" autofocus>
		                                        </div>
                                              @endif
                                            @endforeach
                                        </div>

                                        @php($id=$centro)

                                        <div class="row form-group">
                                              <a href="{{ route('calendario.show',$centro) }}">
                                              	<div class="col-md-6">
	                                               <input value="Cancelar" class="btn btn-secondary py-2 px-4 text-white">
	                                             </div>
                                              </a>
                                              <div class="col-md-6">
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