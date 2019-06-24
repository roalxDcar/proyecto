@extends('layouts1.app')
@section('contenido')
                            <div class="col-lg-12">
                                <div class="card">
                                                <div class="card-title">
                                                   @foreach($centro as $ce)
                                                      @if($ce->id == Auth::user()->id_centro)
                                                         <div class="card-header">Centro Deportivo "{{ $ce->nombre }}"</div>
                                                      @endif
                                                   @endforeach
                                                </div>

                                    <div class="card-body">
                                                <div class="card-title">
                                                  <h3 class="text-center title-2">Actualizar Fotografia</h3>
                                                </div>

                                        <hr>
                                        <form action="{{ route('caracteristica.update',$car->id)}}" enctype="multipart/form-data" method="post" novalidate="novalidate">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                     @foreach($cancha as $can)
                                                       @if($can->id == $car->id_cancha)
                                                         <div class="col-3">
                                                            <div class="form-group">
                                                                <label for="cc-exp" class="control-label mb-1">Cancha *</label>
                                                                <input disabled="" id="" value="{{ $can->nombre }}" name="" type="tel" class="form-control cc-exp" value="" data-val="true">
                                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                            </div>
                                                        </div>
                                                       @endif
                                                     @endforeach
                                                <div class="col-6">
                                                    <label for="x_card_code" class="control-label mb-1">Fotografia*</label>
                                                    <div class="input-group">
                                                        <input id="foto" value="{{ $car->foto }}" name="foto" type="file" class="" value="" data-val="true" data-val-required="Please enter the security code"
                                                            data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                                    </div>
                                                </div>
                                            </div>
                                            <div style="visibility: hidden;">
                                                <input id="id_cancha" name="id_cancha" value="{{ $car->id_cancha }}"></input>
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
@endsection