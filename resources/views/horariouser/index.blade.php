@extends('layouts1.app')
@section('contenido')
						<div class="row-center">
                            <div class="col-md-6">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                      @foreach( $centro as $c )
                                          @if( $c->id == Auth::user()->id_centro )
                                        <h3 class="title-5 m-b-35">Horario de Atención " {{ $c->nombre }} "</h3>
                                          @endif
                                      @endforeach
                                    </div>
                                    <div class="table-data__tool-right">
                                       <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>
                                            <a style="color:white;" href="{{ route('horario.create') }}">Nuevo Horario</a>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                              <th>N°</th>
                                              <th>Dias</th>
                                              <th>Turno</th>
                                              <td>Actualizar</td>
                                            </tr>
                                        </thead>
                                        @php ($cont=0)
                                        <tbody>
                                            <tr class="tr-shadow">
                                             @php ($cont++)
                                                {{-- id_usuario hecho con un contador -> c --}}
                                                @foreach($horario as $h)
                                                @if($c->id == $h->id_centro)
                                                    
                                                    <td> {{ $cont }}</td>  

                                                     @foreach($detalledia as $d)
                                                         @if($d->id == $h->id_detalle_dia)
                                                         <td>{{ $d->descripcion }}</td>
                                                         @endif
                                                     @endforeach

                                                     @foreach($turno as $t)
                                                         @if($t->id == $h->id_turno)
                                                         <td>{{ $t->descripcion }}</td>
                                                         @endif
                                                     @endforeach

                                                     <td>
                                                       <div style="align-content: center;" class="table-data-feature">
                                                           <a type="" class="item" data-toggle="tooltip" data-placement="top" title="Edit" style=" text-decoration:  none;"  href="{{ route('horario.edit',$h->id) }}"><i class="zmdi zmdi-edit"></i></a>
                                                        </div>
                                                     </td> 
                                                @endif
                                                @endforeach                                                     
                                             </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

@endsection