@extends('layouts.app')
@section('content')

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
                      <button type="" class="btn btn-default"><a href="{{ route('cancha.create') }}"><i class="fa fa-user"></i> <b>Agregar Cancha</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Estado</th>
                          <th>Nombre de la Cancha</th>
                          <th>Costo</th>
                          <th>Descripcion</th>
                          <th>valoracion</th>
                          <th>Actualizar</th>


                        </tr>
                      </thead>


                      <tbody>
                        @foreach($cancha as $c)
                        <tr>
                          <td>{{ $c->id }}</td>
                          @foreach($es as $e)
                                <td>{{ $e->descripcion }}</td>
                          @endforeach
                          <td>{{ $c->nombre }}</td>
                          <td>{{ $c->costo }}</td>
                          <td>{{ $c->descripcion }}</td>
                          <td>{{ $c->valoracion }}</td>
                          <td>
                          <a href="{{ route('cancha.edit',$c->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


@endsection