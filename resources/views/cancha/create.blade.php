@extends('layouts.app')
@section('content')

            <div class="page-title">



            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nueva cancha</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate class="form-horizontal form-label-left"  method="POST" action="{{ route('cancha.store') }}">
                      @csrf

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Rol<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="id_estado" class="btn-group" data-toggle="buttons">
                            <select name="id_estado" class="form-control">
                                    @foreach($estado as $e)
                                      <option value="{{ $e->id }}"> {{ $e->descripcion }} </option>
                                    @endforeach
                              </select> 
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre de la Cancha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Costo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="costo" name="costo" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Valoración <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="Valoracion" name="Valoracion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-default" type="butto"><a href="{{ route('cancha.index') }}">Cancelar</a></button>
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