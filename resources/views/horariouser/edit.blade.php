@extends('layouts1.app')
@section('contenido')
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Actualizar Horario</strong> de Atención
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="{{ route('horario.update',$v->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="id_centro" value="{{ Auth::user()->id_centro }}" style="width:1px;height:1px;">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Turno</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_turno" id="select" class="form-control">
                                                        @foreach($turno as $t)
                                                        <option value="{{ $t->id }}">{{ $t->descripcion }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Dia(s) de Atención</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="id_detalle_dia" id="select" class="form-control">
                                                        @foreach($detalledia as $dia)
                                                        <option value="{{ $dia->id }}">{{ $dia->descripcion }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Guardar
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    Limpiar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
@endsection