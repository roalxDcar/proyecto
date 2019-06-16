@extends('layouts.app')
@section('content')
          <div class="page-title">
           </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nuevo Centro</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate class="form-horizontal form-label-left"  method="POST" action="{{ route('ad_centro.store') }}">
                      @csrf
                                @foreach($detallecentro as $detalle)
                                  @php($p = $detalle)
                                @endforeach

                      <div style="visibility: hidden;">
                        <input id="id_detalle" name="id_detalle" value="{{ $p->id }}"></input>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre del propietario<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="" class="btn-group" data-toggle="buttons">
                            <select disabled="" id="" name="" class="form-control">
                                    <option>{{ $p->propietario }}</option>
                            </select> 
                          </div>
                        </div>
                      </div>                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre del Centro Deportivo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telefono" name="telefono" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ubicacion del Centro Deportivo<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ubicacion" name="ubicacion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Observacion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Valoración<span class="required">*</span></label>
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
                          <button class="btn btn-default" type="butto"><a href="{{ route('ad_detallecentro.index') }}">Cancelar</a></button>
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