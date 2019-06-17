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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Centro Deportivo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          @foreach( $centro as $c )
                              @if(  Auth::user()->id_centro == $c )
                                 <input  id="id_centro" disabled="" value="{{ $c->nombre }}" name="id_centro" class="form-control col-md-7 col-xs-12">
                              @endif
                          @endforeach
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
                          <input type="text" id="valoracion" name="valoracion" required="required" class="form-control col-md-7 col-xs-12">
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



@extends('layouts1.app')
@section('contenido')

             <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Registrar </strong> Nueva Cancha
                                    </div>
                                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{ route('cancha.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Estado</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_rol" id="select" class="form-control">
                                                        <option value="2">Administrador</option>
                                                        <option value="3">Empleado</option>
                                                    </select>
                                                </div>
                                            </div>
                                                    <div class="row form-group">
                                                        <div class="col col-md-3">
                                                            <label for="select" class=" form-control-label">Centro Deportivo</label>
                                                        </div>
                                                        <div class="col-12 col-md-9">
                                                            <select disabled="" name="id_centro" id="id_centro" class="form-control">
                                                                @foreach( $centro as $c )
                                                                    @if( $c->id == Auth::user()->id_centro )
                                                                    <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nombre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="name" name="name" placeholder="Introduzca Nombre" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Apellido Paterno</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="paterno" name="paterno" placeholder="Introduzca Apellido Paterno" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Apellido Materno</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="materno" name="materno" placeholder="Introduzca Apellido Materno" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Genero</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="genero" id="select" class="form-control">
                                                        <option value="1">Masculino</option>
                                                        <option value="2">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Telefono</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="telefono" name="telefono" placeholder="Introduzca Numero Telefonico" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Celular</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="celular" name="celular" placeholder="Introduzca Numero de Celular" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">E-mail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" name="email" placeholder="Introduzca Correo Electronico" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">CI</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="ci" name="ci" placeholder="Introduzca Cedula de Identidad" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Dirección</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="direccion" name="direccion" placeholder="Introduzca Direccion" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Contraseña</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button class="btn btn-default" type="butto"><a href="{{ route('ad_personal.index') }}">Cancelar</a></button>
                                                <button type="submit" class="btn btn-success">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
@endsection

