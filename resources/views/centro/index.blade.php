@extends('layouts.app')
@section('content')

            <div class="page-title">
              <div class="title_left">
                <h3>Centros Deportivos </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrados</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">

                      @foreach($centro as $ce)
                      <div class="col-md-55">
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset($ce->foto) }}" alt="image" />
                            <div class="mask">
                              <p><b>{{ $ce->nombre }}</b></p>
                              <div class="tools tools-bottom">
                                <a title="Editar" href="{{ route('ad_centro.edit',$ce->id) }}"><i class="fa fa-pencil"></i></a>
                                <a title="Ver Foto" href="{{ asset($ce->foto) }}"><i class="fa fa-link"></i></a>
                              </div>
                            </div>
                          </div>
                          @foreach($detalle as $de)
                            @if($de->id == $ce->id)
                              <div class="caption">
                                <p>Propietario: {{ $de->propietario }}</p>
                              </div>
                            @endif
                          @endforeach
                          <p>Tel/Cel# : {{ $ce->telefono }}</p>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>


        
@endsection

  
