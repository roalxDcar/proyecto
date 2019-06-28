@extends('layouts.app1')
@section('content1')
<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <br>
                                <h4 class="mb-0 site-logo"><a href="#" class="text-black mb-0"><b>Datos de la Registrados</b></a></h4>

                                <div class="card-body">
                                        
                                        <div class="form-group row">
                                            <label class="col-md-12 col-form-label text-md-left">Tiene 15min para cancelar la reserva, caso contrario se le quitara la reserva y sera sancionado</label>
                                        </div>


                                        <div class="row form-group">
{{--                                               <a href="{{ route('calendario.show',$centro) }}">
                                              	<div class="col-md-2">
	                                               <input value="Cancelar" class="btn btn-secondary py-2 px-4 text-white">
	                                             </div>
                                              </a> --}}
                                              <div class="col-md-2">
                                                <input type="submit" value="Guardar Reserva" class="btn btn-primary py-2 px-4 text-white">
                                              </div>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
@endsection