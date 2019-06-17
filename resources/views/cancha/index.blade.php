@extends('layouts.app')
@section('content')
            <div class="page-title">
              <div class="title_left">
                <h3>Cancha<small> Centros deportivos</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

              @foreach( $centro as $c )
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cancha(s) "{{ $c->nombre }}"</h2>
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
                          <th>Estado</th>
                          <th>Nombre de la Cancha</th>
                          <th>Costo</th>
                          <th>Descripcion</th>
                          <th>Actualizar</th>


                        </tr>
                      </thead>


                      <tbody>
                        @foreach($cancha as $c)
                        <tr>
                          <td>{{ $c->id }}</td>
                          @foreach($es as $e)
                                @if($c->id_estado == $e->id)
                                  <td>{{ $e->descripcion }}</td>
                                @endif
                          @endforeach
                          <td>{{ $c->nombre }}</td>
                          <td>{{ $c->costo }}</td>
                          <td>{{ $c->descripcion }}</td>
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
              @endforeach
@endsection