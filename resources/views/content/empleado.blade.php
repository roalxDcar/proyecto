@extends('layouts1.app')
@section('contenido')

    <div style=" height: 625px; width: 1250px;background-image: url(../../assets/images/voley.jpg);" >
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">

                <div style="margin:250px;" class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 style="color:white;" class="" data-aos="fade-up">Bienvenido {{ Auth::user()->name }}</h1>
                <p style="color:black;" data-aos="fade-up" data-aos-delay="100">Esto es Info-Sport!!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

@endsection