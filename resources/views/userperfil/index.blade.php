@extends('layouts.app1')
@section('content1')
                {{-- Contenido --}}
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <br>
                                <h4 class="mb-0 site-logo"><a href="#" class="text-black mb-0"><b>Perfil</b></a></h4>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Nombre: </label>

                                            <div class="col-md-6">
                                                <label class="col-md-12 col-form-label text-md-center">{{ Auth::user()->name }}</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">Email: </label>

                                            <div class="col-md-6">
                                                <label class="col-md-12 col-form-label text-md-center">{{ Auth::user()->email }}</label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                              <div class="col-md-12">
                                                <a href="{{ route('user.edit',Auth::user()->id) }}"><input value="Editar" class="btn btn-primary py-2 px-4 text-white"></a>
                                              </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Fin de contenido --}} 
@endsection