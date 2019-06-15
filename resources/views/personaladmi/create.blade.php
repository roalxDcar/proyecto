@extends('layouts1.app')
@section('contenido')

             <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Registro </strong> Nuevo Personal
                                    </div>
                                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{ route('personal.store') }}" method="POST">
                                    @csrf
                                    <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Rol</label>
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

