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
                                        <form method="post" action="{{ route('promocion.store')}}" novalidate="novalidate">
                                          @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label"><b>Administrador</b></label>
                                                </div>
                                                <div style="visibility: hidden;">
                                                    <input id="id_user" name="id_user" value="{{ Auth::user()->id }}"></input>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">{{ Auth::user()->paterno }}</p>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1"><b>Descripcion de la Promoción</b></label>
                                                <textarea id="descripcion" name="descripcion" type="textarea" class="form-control" aria-required="true" aria-invalid="false" value=""></textarea>
                                            </div>
                                          
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-floppy-o fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Guardar</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
{{-- Mostrar promociones --}}
                              <!-- PROMOCION -->
                              <div class="col-lg-6">
                                  <div class="top-campaign">
                                      <h3 class="title-3 m-b-30">Promociones Creadas</h3>
                                      <div class="table-responsive">
                                          <table class="table table-top-campaign">
                                              @php ($c=0)

                                            <tbody>
                                              @foreach( $promo as $p )
                                                  @if( $p->id_user == Auth::user()->id )
                                                       <tr class="tr-shadow">
                                                        @php ($c++)
                                                          {{-- id_usuario hecho con un contador -> c --}}
                                                            <td> {{ $c }}</td>  
                                                            {{-- rol del personal --}} 
                                                            <td>{{ $p->descripcion }}</td>
                                                            <td>
                                                              <div class="table-data-feature">
                                                                <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('promocion.edit',$p->id) }}"><i class="zmdi zmdi-edit"></a></i>
                                                              </div>
                                                            </td>                                                      
                                                        </tr>
                                                  @endif
                                              @endforeach
                                            </tbody>

                                          </table>
                                      </div>
                                  </div>
                              <!--  PROMOCION -->
                              </div>
@endsection