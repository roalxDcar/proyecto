@extends('layouts.app1')
@section('content1')
			<div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Bienvenid@ {{ Auth::user()->name }}</h1>
                <h1>Esto es Info-Sport!!</h1>
              </div>
            </div>
@endsection
