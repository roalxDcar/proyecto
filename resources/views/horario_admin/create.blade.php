@extends('layouts.app')
@section('content')
          <div class="page-title">
           </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Horario de Atención del Centro Deportivo</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data"  method="POST" action="{{ route('horario_admin.store') }}">
                      @csrf
                      {{-- id_Centro deportivo --}}
                                @foreach($centro as $c)
                                  @php($cen = $c->id)
                                @endforeach

                                <input type="text" name="id_centro" value="{{ $cen }}" style="width:1px;height:1px;">


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Centro Deportivo<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="" class="btn-group" data-toggle="buttons">
                            <select disabled="" id="" name="" class="form-control">
                                    <option>{{ $c->nombre }}</option>
                            </select> 
                          </div>
                        </div>
                      </div> 

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Turno<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="" class="btn-group" data-toggle="buttons">
                            <select id="" name="id_turno" class="form-control">
                                    @foreach($turno as $t)
                                     <option value="{{ $t->id }}">{{ $t->descripcion }}</option>
                                    @endforeach
                            </select> 
                          </div>
                        </div>
                      </div>   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Dias de atención<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="" class="btn-group" data-toggle="buttons">
                            <select id="" name="id_detalle_dia" class="form-control">
                                    @foreach($dia as $d)
                                     <option value="{{ $d->id }}">{{ $d->descripcion }}</option>
                                    @endforeach
                            </select> 
                          </div>
                        </div>
                      </div>                  

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          {{-- <button class="btn btn-default" type="butto"><a href="{{ route('ad_detallecentro.index') }}">Cancelar</a></button> --}}
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