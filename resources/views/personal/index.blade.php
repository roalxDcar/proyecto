@extends('layouts.app')
@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista Personal </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <button type="" class="btn btn-default"><a href="{{ route('usuario.create') }}"><i class="fa fa-user"></i> <b>Nuevo Personal</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Rol</th>
                          <th>Nombre</th>
                          <th>Paterno</th>
                          <th>Materno</th>
                          <th>Genero</th>
                          <th>Telefono</th>
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
                        <tr>
                        @php ($c++)
                        {{-- id_usuario hecho con un contador -> c --}}
                          <td> {{ $c }}</td>
                          
                          @foreach( $rol as $r ) 

                            @if( $use->id_rol == $r->idrol ) 
                              <td>{{ $r->descripcion }}</td>
                            @endif 

                           @endforeach 

                          <td>{{ $use->name }}</td>
                          <td>{{ $use->paterno }}</td>
                          <td>{{ $use->materno }}</td>

                          @if( $use->genero == 1 )
                            <td> Masculino  </td>
                            @else
                            @if( $use->genero == 2 )
                            <td> Femenino  </td>
                            @endif
                            <td>  </td>
                          @endif

                          <td>{{ $use->telefono }}</td>
                          <td>{{ $use->celular }}</td>
                          <td>{{ $use->ci }}</td>
                          <td>{{ $use->email }}</td>
                          <td>{{ $use->direccion }}</td>
                          <td>
                          <a href="{{ route('usuario.edit',$use->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>
                          

                        </tr>
                        @endforeach
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              {{-- <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Administradores</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <button type="submit" class="btn btn-success">Nuevo Administrador</button>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      This example shows FixedHeader being styling by the Bootstrap CSS framework.
                    </p>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                        </tr>
                        <tr>
                          <td>Garrett Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> --}}

@endsection