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
                    <h2>Actualizar Datos <small>Estado</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

    <form data-parsley-validate class="form-horizontal form-label-left" method="POST" 
    action="{{ route('estadocancha.update',$estado->id) }}">                      
                      @csrf
                      @method('PUT')


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="descripcion" value="{{ $estado->descripcion }}" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Observacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="observacion" value="{{ $estado->observacion }}" name="observacion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="butto"><a href="{{ route('estadocancha.index') }}">Cancelar</a></button>
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