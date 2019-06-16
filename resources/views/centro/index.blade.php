@extends('layouts.app')
@section('content')

             <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Centros Deportivos Registrados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Nombre Centro</th>
                          <th>Propietario</th>
                          <th>Telefono</th>
                          <th>Ubicacion</th>
                          <th>Observación</th>
                          <th>Actualizar</th>

                        </tr>
                      </thead>

                      @php($c=0)
                      <tbody>
                        @foreach($centro as $centro)
                        <tr>
                          @php($c++)
                          <td>{{ $c }}</td>

                          <td>{{ $centro->nombre }}</td>
                          @foreach( $detalle as $d )
                            @if( $d->id == $centro->id_detalle )
                              <td>{{ $d->propietario }}</td>
                            @endif
                          @endforeach
                          <td>{{ $centro->telefono }}</td>
                          <td>{{ $centro->ubicacion }}</td>
                          <td>{{ $centro->descripcion }}</td>
                          <td>
                          <a href="{{ route('ad_centro.edit',$centro->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection