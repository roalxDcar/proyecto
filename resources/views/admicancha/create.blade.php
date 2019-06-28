@extends('layouts1.app')
@section('contenido')
                        <div class="row-center">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Crear Nueva Cancha</div>
                                    <div class="card-body">
                                        @foreach($centro as $c)
                                            @if( Auth::user()->id_centro == $c->id )
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Centro Deportivo "{{ $c->nombre }}"</h3>
                                                </div>
                                            @endif
                                        @endforeach
                                        <hr>
                                        <form action="{{ route('area.store') }}" method="post" novalidate="novalidate">
                                            @csrf
                                            <input type="text" name="id_centro" value="{{ Auth::user()->id_centro }}" style="width:1px;height:1px;visibility: hidden;">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nombre de la Cancha *</label>
                                                <input id="nombre" name="nombre" type="text" class="form-control" aria-required="true" value="" autocomplete="off">
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Estado de la Cancha*</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_estado" id="id_estado" class="form-control">
                                                        @foreach( $estado as $e )
                                                           <option value="{{ $e->id }}">{{ $e->descripcion }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="cc-exp" class="control-label mb-1">Costo por Hora*</label>
                                                        <input id="costo" name="costo" type="tel" class="form-control cc-exp" value="" data-val="true">
                                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Tamaño de la Cancha*</label>
                                                    <div class="input-group">
                                                        <input id="descripcion" name="descripcion" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block-center">
                                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                    <span id="payment-button-send"> Guardar Datos </span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
@endsection