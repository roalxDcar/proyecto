@extends('layouts.app')
@section('content')

            <div class="page-title">
              <div class="title_left">
                <h3>Caracteristicas <small>Some examples to get you started</small></h3>
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
              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Caracteristicas </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <button type="" class="btn btn-default"><a href="{{ route('ad_caractercancha.create') }}"><i class="fa fa-user"></i> <b>Agregar Centro</b> </a></button>
                      
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Imagen</th>
                          <th>Accion</th>

                        </tr>
                      </thead>


                      <tbody>
                        @foreach($caractercancha as $caracter)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>
                            <img class="card-img-top" src="canchas/{{ $caracter->observacion }}" alt="" width="200">
                          </td>
                          <td>
                          <a href="{{ route('ad_caractercancha.edit',$caracter->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td>
                          {{--<td>
                           <a href="{{ route('centro.edit',$centro->id) }}"  class="buttonPrevious buttonDisabled btn btn-primary"><i class="glyphicon glyphicon-refresh"></i></a>
                          </td> --}}

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

@endsection