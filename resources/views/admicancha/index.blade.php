@extends('layouts1.app')
@section('contenido')
                        <div class="row-center">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                      @foreach( $centro as $c )
                                          @if( $c->id == Auth::user()->id_centro )
                                        <h3 class="title-5 m-b-35">Lista de Personal  " {{ $c->nombre }} "</h3>
                                          @endif
                                      @endforeach
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i><a style="color: White;" href="{{ route('area.create') }}">Nueva Cancha</a></button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                              <th>N°</th>
                                              <th>Estado</th>
                                              <th>Nombre</th>
                                              <th>Costo</th>
                                              <th>Tamaño de la Cacha</th>
                                              <td>Actualizar</td>
                                            </tr>
                                        </thead>
                                        @php ($p=0)
                                        <tbody>
                                            @foreach( $cancha as $c )
                                                @if( $c->id_centro == Auth::user()->id_centro )
                                                     <tr class="tr-shadow">
                                                      @php ($p++)
                                                        {{-- id_usuario hecho con un contador -> c --}}
                                                          <td> {{ $p }}</td>  
                                                          @foreach($es as $e)
                                                            @if($c->id_estado == $e->id)
                                                              <td>{{ $e->descripcion }}</td>
                                                            @endif
                                                          @endforeach
                                                          <td>{{ $c->nombre }}</td>
                                                          <td>{{ $c->costo }}</td>
                                                          <td>{{ $c->descripcion }}</td>
                                                          @if(Auth::user()->id_rol == 2)
                                                          <td>
                                                              <a  href="{{ route('area.edit',$c->id) }}"><button type="button" class="btn btn-outline-secondary">
                                                                <i class="fa fa-lightbulb-o"></i>&nbsp; Editar</button></a>
                                                          </td>
                                                          @else
                                                          <td>
                                                              <a  href="{{ route('buscador.edit',$c->id) }}"><button type="button" class="btn btn-outline-secondary">
                                                                <i class="fa fa-lightbulb-o"></i>&nbsp;Cambiar Estado</button></a>
                                                          </td>
                                                          @endif                                                      
                                                      </tr>
                                                @endif
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                            </div>
@endsection