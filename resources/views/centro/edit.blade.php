@extends('layouts.app')
@section('content')

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
<<<<<<< HEAD
                    <h2>Editar<small>Centro Deportivo</small></h2>
=======
                    <h2>Actualizar Datos <small>Centro</small></h2>
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
<<<<<<< HEAD
                    <form action="{{ route('ad_centro.update',$c->id) }}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
=======

    <form data-parsley-validate class="form-horizontal form-label-left" method="POST" 
<<<<<<< HEAD
    action="{{ route('centro.update',$centro->id) }}">                      
=======
    action="{{ route('ad_detallecentro.update',$detallecentro->id) }}">                      
>>>>>>> 4797250c03fbe38c7e6213c0925a5e57f073ff2d
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre del Centro Deportivo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
<<<<<<< HEAD
                          <input type="text" id="nombre" name="nombre" value="{{ $c->nombre }}" required="required" class="form-control col-md-7 col-xs-12">
=======
                          <input type="text" id="id_detalle" value="{{ $centro->id_detalle }}" name="id_detalle" required="required" class="form-control col-md-7 col-xs-12">
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                        </div>
                      </div>
                      <div class="form-group">
<<<<<<< HEAD
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="telefono" value="{{ $c->telefono }}" required="required" class="form-control col-md-7 col-xs-12">
=======
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" value="{{ $centro->nombre }}" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                        </div>
                      </div>
                      <div class="form-group">
<<<<<<< HEAD
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ubicación</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="ubicacion" value="{{ $c->ubicacion }}">
=======
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telefono" value="{{ $centro->telefono }}" name="telefono" required="required" class="form-control col-md-7 col-xs-12">
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                        </div>
                      </div>
                      <div class="form-group">
<<<<<<< HEAD
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="descripcion" value="{{ $c->descripcion }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Calidad<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="" class="btn-group" data-toggle="buttons">
                            <select id="" name="valoracion" class="form-control">
                                    @foreach( $v as $va )
                                       <option value="{{ $va->id }}" >{{ $va->descripcion }}</option>
                                    @endforeach
                            </select> 
                          </div>
                        </div>
                      </div> 
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="butto"><a href="{{ route('ad_centro.index') }}">Cancelar</a></button>
                        <button class="btn btn-warning" type="reset">Limpiar</button>
=======
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
>>>>>>> 80a760272018a3df192230a2c676500b1b8cd4bc
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>


@endsection