@extends('layouts.app')
@section('content')


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Centro Deportivo Datos "NIT" </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <button type="" class="btn btn-default"><a href="{{ route('ad_detallecentro.create') }}"><i class="fa fa-user"></i> <b>Agregar Nuevo Centro</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <br />

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Propietario</th>
                          <th>Centro Deportivo</th>
                          <th>Nit</th>
                          <th>Domicilio</th>
                          <th>Actividad</th>
                          <th>Actualizar</th>


                        </tr>
                      </thead>


                      <tbody>
                        @foreach($detallecentro as $detallecentro)
                        <tr>
                          <td>{{ $detallecentro->id }}</td>
                          <td>{{ $detallecentro->propietario }}</td>

                          @foreach($centro as $ce)
                             @if($ce->id == $detallecentro->id)
                               <td>{{ $ce->nombre }}</td>
                             @endif
                          @endforeach
                          
                          <td>{{ $detallecentro->nit }}</td>
                          <td>{{ $detallecentro->domicilio }}</td>
                          <td>{{ $detallecentro->actividad }}</td>
                          <td>
                          <a href="{{ route('ad_detallecentro.edit',$detallecentro->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


@endsection