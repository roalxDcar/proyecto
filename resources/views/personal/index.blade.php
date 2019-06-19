@extends('layouts.app')
@section('content')

            <div class="page-title">
              <div class="title_left">
                <h3>Usuarios <small>Centros Deportivos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="" class="btn btn-default"><a href="{{ route('ad_personal.create') }}"><i class="fa fa-user"></i> <b> Nuevo Usuario </b> </a></button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            @foreach( $centro as $cen )
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Centro Deportivo " {{ $cen->nombre }} "</h2>
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
                          <th>Nombre</th>
                          <th>Paterno</th>
                          <th>Materno</th>                      
                          <th>Celular</th>
                          <th>CI</th>
                          <th>Email</th>
                          <td>Direccion</td>
                          <td>Actualizar</td>
                        </tr>
                      </thead>
                      @php ($c=0)
                      <tbody>
                        @foreach( $user as $use )
                          @if( $cen->id == $use->id_centro )
                            <tr>
                            @php ($c++)
                                @if( $use->id_rol == 2 || $use->id_rol == 3 )
                                  {{-- id_usuario hecho con un contador -> c --}}
                                    <td> {{ $c }}</td>   
                                    @foreach( $rol as $r ) 
                                      @if( $use->id_rol == $r->idrol ) 
                                        @if($r->idrol == 2)
                                          <td><span style="background-color: green; color:white;">{{ $r->descripcion }}</span></td>
                                          @else
                                          <td><span style="background-color: orange; color:white;">{{ $r->descripcion }}</span></td>
                                        @endif
                                      @endif 
                                     @endforeach 
                                    <td>{{ $use->name }}</td>
                                    <td>{{ $use->paterno }}</td>
                                    <td>{{ $use->materno }}</td>
                                    <td>{{ $use->celular }}</td>
                                    <td>{{ $use->ci }}</td>
                                    <td>{{ $use->email }}</td>
                                    <td>{{ $use->direccion }}</td>
                                    <td>
                                    <a href="{{ route('ad_personal.edit',$use->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                                    </td>
                                @endif
                            </tr>
                          @endif
                        @endforeach
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
            @endforeach

@endsection





