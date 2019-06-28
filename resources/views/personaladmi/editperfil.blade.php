@extends('layouts1.app')
@section('contenido')
<div class="row-center">
             <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Perfil </strong>
                                    </div>
                                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{ route('perfil.update',$perfil->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="card-body card-block">                                            

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Nombre</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input value="{{ $perfil->name }}" type="name" id="name" name="name" placeholder="Introduzca Nombre" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Apellido Paterno</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="paterno" value="{{ $perfil->paterno }}" name="paterno" placeholder="Introduzca Apellido Paterno" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Apellido Materno</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="name" id="materno" value="{{ $perfil->materno }}" name="materno" placeholder="Introduzca Apellido Materno" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Telefono</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="telefono" value="{{ $perfil->telefono }}" name="telefono" placeholder="Introduzca Numero Telefonico" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Celular</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="celular" value="{{ $perfil->celular }}" name="celular" placeholder="Introduzca Numero de Celular" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">E-mail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email" value="{{ $perfil->email }}" name="email" placeholder="Introduzca Correo Electronico" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">CI</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="ci" name="ci" value="{{ $perfil->ci }}" placeholder="Introduzca Cedula de Identidad" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Dirección</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="direccion" value="{{ $perfil->direccion }}" name="direccion" placeholder="Introduzca Direccion" class="form-control">
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            </div>
@endsection

