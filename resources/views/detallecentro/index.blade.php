@extends('layouts.app')
@section('content')
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Detalles <small>Some examples to get you started</small></h3>
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
                    <h2>Lista Detalles Centro </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <button type="" class="btn btn-default"><a href="{{ route('ad_detallecentro.create') }}"><i class="fa fa-user"></i> <b>Agregar Detalle</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Propietario</th>
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