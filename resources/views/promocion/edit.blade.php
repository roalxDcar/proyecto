@extends('layouts1.app')
@section('contenido')

{{-- Crear comentario --}}
                            <div class="col-lg-6">
                                <div class="card">
                                      @foreach( $centro as $c )
                                        @if( $c->id == Auth::user()->id_centro )
                                          <div class="card-header">Promociones  " {{ $c->nombre }} "</div>
                                        @endif
                                      @endforeach
                                  
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Crear Nueva Promoción</h3>
                                        </div>
                                        <hr>
                                        <form method="post" action="{{ route('promocion.update',$promo->id)}}">
                                          @csrf
                                          @method('PUT')
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><b>Administrador</b></label>
                                                </div>
                                                <div style="visibility: hidden;">
                                                    <input id="id_user" name="id_user" value="{{ $promo->id_user }}"></input>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{ Auth::user()->paterno }}</p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"><b>* Descripcion de la Promoción anterior</b></label> <br>
                                                <label for="cc-payment" class="control-label mb-1">   {{ $promo->descripcion }}</label><br>
                                                <label for="cc-payment" class="control-label mb-1"><b>* Actualizar Promoción</b></label>
                                                <textarea id="descripcion" name="descripcion" type="textarea" class="form-control" aria-required="true" aria-invalid="false" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                  <button class="btn btn-secondary"><a  style="color:white;" href="{{ route('promocion.index') }}">Cancelar</a></button>
                                                  <button type="submit" class="btn btn-success">Guardar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
{{-- Mostrar promociones --}}
@endsection