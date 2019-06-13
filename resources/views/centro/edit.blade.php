@extends('layouts.app')
@section('content')

          <div class="page-title">
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Actualizar Datos <small>Centro</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

    <form data-parsley-validate class="form-horizontal form-label-left" method="POST" 
<<<<<<< HEAD
    action="{{ route('centro.update',$centro->id) }}">                      
=======
    action="{{ route('ad_detallecentro.update',$detallecentro->id) }}">                      
>>>>>>> 4797250c03fbe38c7e6213c0925a5e57f073ff2d
                      @csrf
                      @method('PUT')


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Propietario <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_detalle" value="{{ $centro->id_detalle }}" name="id_detalle" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" value="{{ $centro->nombre }}" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telefono" value="{{ $centro->telefono }}" name="telefono" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ubicacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ubicacion" value="{{ $centro->ubicacion }}" name="ubicacion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="descripcion" value="{{ $centro->descripcion }}" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                    

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
<<<<<<< HEAD
                          <button class="btn btn-default" type="butto"><a href="{{ route('centro.index') }}">Cancelar</a></button>
=======
                          <button class="btn btn-default" type="butto"><a href="{{ route('ad_detallecentro.index') }}">Cancelar</a></button>
>>>>>>> 4797250c03fbe38c7e6213c0925a5e57f073ff2d
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