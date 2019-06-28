@extends('layouts1.app')
@section('contenido')
<div class="row-center">
             <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Datos de Reserva</strong>
                                    </div>
                                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{ route('horario_admin.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body card-block">
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Centro Deportivo</label>
                                                </div>
                                                @foreach($centros as $c)
                                                  @if($c->id == $centro)

                                                  <div class="col-md-1"><input type="text" name="id_centro" value="{{ $c->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                  </div>
                                                    <div class="col-12 col-md-9">
                                                        <input disabled="" value="{{ $c->nombre }}" type="name" id="name" name="name" placeholder="Introduzca Nombre" class="form-control">
                                                    </div>
                                                  @endif
                                                @endforeach
                                                
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Cancha</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_cancha" id="select" class="form-control">
                                                        @foreach($cancha as $can)
                                                          @if($can->id_centro == Auth::user()->id_centro)
                                                            <option value="{{ $can->id }}">{{ $can->nombre }} - Precio{{ $can->costo }} Bs.
                                                            </option>
                                                          @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Hora de reserva</label>
                                                </div>
                                                @foreach($horas as $h)
                                                  @if($h->id == $hora)

                                                  <div class="col-md-1"><input type="text" name="id_hora" value="{{ $h->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                  </div>

                                                  <div class="col-12 col-md-9">
                                                      <input disabled="" type="name" id="materno" value="{{ $h->hora }}" placeholder="Introduzca Hora" class="form-control">
                                                  </div>
                                                  @endif
                                                @endforeach
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Dia de reserva</label>
                                                </div>
                                                @foreach($dias as $d)
                                                  @if($d->id == $dia )

                                                  <div class="col-md-1"><input type="text" name="id_dia" value="{{ $d->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                  </div>

                                                  <div class="col-12 col-md-9">
                                                      <input disabled="" type="text" value="{{ $d->dia }}" placeholder="Introduzca Numero Telefonico" class="form-control">
                                                  </div>
                                                  @endif
                                                @endforeach
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nombre del reservante</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" value="{{ Auth::user()->name }}" name="nombre" placeholder="Introduzca Numero de Celular" class="form-control">
                                                </div>

                                                <div class="col-md-1"><input type="text" name="id_user" value="{{ Auth::user()->id }}" style="width:1px;height:1px;visibility: hidden;">
                                                </div>
                                            </div>
                                             @php($id=$centro)

                                    </div>
                                    <div class="card-footer">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            </div>
@endsection

