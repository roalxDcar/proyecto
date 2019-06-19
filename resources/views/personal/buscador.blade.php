@extends('layouts.app')
@section('content')

            <div class="page-title">
              <div class="title_left">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button class="btn btn-default"><a href="{{ route('ad_personal.create') }}"><i class="fa fa-user"></i> <b> Nuevo Usuario </b> </a></button>
                      </span>
                  </div>
                <h3>Usuarios <small>Centros Deportivos</small></h3>
              </div>
                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <form method="POST" action="{{ route('buscador.store') }}" >
                      @csrf
                      <div class="input-group">
                        <input type="text" class="form-control" name="buscador" placeholder="Ingresar Nombre o Gmail...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Buscar</button>
                          </span>
                      </div>
                    </form>
                  </div>
                </div>
            </div>

            <div class="clearfix"></div>
            @php($nuevo=0)
            @foreach( $user as $us )
              @if($us->name == $variable || $us->email == $variable)
              @php($nuevo++)
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Usuario Registrado</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>

                      <div class="x_content">
              
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>N°</th>
                              <th>Rol</th>
                              <th>Centro Deportivo</th>
                              <th>Nombre</th>  
                              <th>Email</th>
                              <td>Actualizar Datos</td>
                            </tr>
                          </thead>

                          @php ($c=0)
                          <tbody>

                                <tr>
                                @php ($c++)
                                      {{-- id_usuario hecho con un contador -> c --}}
                                        <td> {{ $c }}</td>   
                                        @foreach( $rol as $r ) 
                                          @if( $us->id_rol == $r->idrol ) 
                                            @if($r->idrol == 2)
                                              <td><span style="background-color: green; color:white;">{{ $r->descripcion }}</span></td>
                                              @else
                                              @if($r->idrol == 3)
                                                <td><span style="background-color: orange; color:white;">{{ $r->descripcion }}</span></td>
                                                @else
                                                @if($r->idrol == 4)
                                                  <td><span style="background-color: blue; color:white;">{{ $r->descripcion }}</span></td>
                                                  @else
                                                  <td><span style="background-color: red; color:white;">{{ $r->descripcion }}</span></td>
                                                @endif
                                              @endif
                                            @endif
                                          @endif 
                                        @endforeach 

                                        @foreach($centro as $ce)
                                        @if($ce->id == $us->id_centro)
                                        <td>{{ $ce->nombre }}</td>
                                        @else
                                        <td><span style="background-color: red; color:white;">NINGUNO</span></td>
                                        @endif
                                        @endforeach

                                        <td>{{ $us->name }}</td>
                                        <td>{{ $us->email }}</td>
                                        <td>
                                        <a href="{{ route('ad_personal.edit',$us->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                                        </td>
                                </tr>

                          </tbody>
                        </table>
              
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
            @if($nuevo == 0)
            {{-- Usuarios No Registrados --}}
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2><b>USUARIO NO REGISTRADO!!!</b></h2>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </div>
            @endif

@endsection





