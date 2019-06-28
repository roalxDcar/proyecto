@extends('layouts.app')
@section('content')
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div  style="margin-left: 70px; margin-top: 30px; height: 625px; width: 1250px;background-image: url(../../assets/images/voley.jpg);" class="dashboard_graph">
                <div class="col-md-8 text-center" style="margin-left: 225px;margin-top: 250px;">
                  <h1 style="color:white;" >Bienvenido {{ Auth::user()->name }}</h1>
                  <p style="color:black;" >Esto es Info-Sport!!</p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

          </div>
         
@endsection