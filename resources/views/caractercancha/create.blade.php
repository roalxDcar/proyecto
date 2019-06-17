@extends('layouts.app')
@section('content')
          <div class="page-title">
           </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nueva Imagen</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate class="form-horizontal form-label-left"  method="POST" action="{{ route('ad_caractercancha.store') }}" enctype="multipart/form-data">
                     {{ csrf_field() }}
                      
                           <div class="input-group">
                              <div class="custom-file">
                                  <label class="custom-file-label" for="last-name">Seleccione una imagen: <span class="required">*</span>
                                  </label>
                                  <input type="file" class="custom-file-input" placeholder="Introduzca una imagen" id="observacion" name="observacion">
                                  <span class="highlight"></span>
                                  <span class="bar"></span>
                                  
                               </div>
                          </div>

                          <div class="ln_solid"></div>
                            <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <button class="btn btn-default" type="butto"><a href="{{ route('ad_caractercancha.index') }}">Cancelar</a></button>
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