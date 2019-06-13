@extends('layouts.app')
@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">



            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nuevo Detalle de cancha</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate class="form-horizontal form-label-left"  method="POST" action="{{ route('detallecancha.store') }}">
                      @csrf

                      <div class="form-group">
                          <label for="exampleInputPassword1">Seleccione el centro deportivo:</label>
                              <select name="id_centro" class="form-control">
                                @foreach($centro as $centro)
                                <option value="{{ $centro->id }}">{{ $centro->nombre }}</option>
                                @endforeach
                              </select>
                      </div>
                      
                      <div class="form-group">
                          <label for="exampleInputPassword1">Seleccione la cancha:</label>
                              <select name="id_cancha" class="form-control">
                                @foreach($cancha as $c)
                                <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                                @endforeach
                              </select>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Observacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="observacion" name="observacion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="butto"><a href="{{ route('detallecancha.index') }}">Cancelar</a></button>
						  <button class="btn btn-warning" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


@endsection