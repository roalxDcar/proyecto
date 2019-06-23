@extends('layouts.app')
@section('content')
        <header>
          <div class="overlay"></div>
          <div class="absolute">
            <h1>Esto es INFO-SPORT!!</h1>
          </div>
          <video onloadedmetadata="this.muted=true" autoplay loop>
            <source src="../assets/images/we.mp4">
          </video>
        </header>
@endsection