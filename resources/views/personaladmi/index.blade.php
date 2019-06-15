@extends('layouts1.app')
@section('contenido')
<div class="row">
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
                                            <i class="zmdi zmdi-plus"></i><a href="{{ route('personal.create') }}">Nuevo Personal</a></button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                              <th>N°</th>
                                              <th>Rol</th>
                                              <th>Nombre</th>
                                              <th>Paterno</th>
                                              <th>Materno</th>                      
                                              <th>Celular</th>
                                              <th>CI</th>
                                              <th>Email</th>
                                              <td>Actualizar</td>
                                            </tr>
                                        </thead>
                                        @php ($c=0)
                                        <tbody>
                                            @foreach( $user as $use )
                                                @if( $use->id_centro == Auth::user()->id_centro )
                                                     <tr class="tr-shadow">
                                                      @php ($c++)
                                                        {{-- id_usuario hecho con un contador -> c --}}
                                                          <td> {{ $c }}</td>  
                                                          {{-- rol del personal --}} 
                                                          @foreach( $rol as $r ) 
                                                                @if( $use->id_rol == $r->idrol ) 
                                                                  <td>{{ $r->descripcion }}</td>
                                                                @endif 
                                                           @endforeach 

                                                          <td>{{ $use->name }}</td>
                                                          <td>{{ $use->paterno }}</td>
                                                          <td>{{ $use->materno }}</td>
                                                          <td>{{ $use->celular }}</td>
                                                          <td>{{ $use->ci }}</td>
                                                          <td>{{ $use->email }}</td>
                                                          <td>
                                                          <a href="{{ route('personal.edit',$use->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                                                          </td>                                                      
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