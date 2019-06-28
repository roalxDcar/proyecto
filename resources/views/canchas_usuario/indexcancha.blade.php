    @extends('layouts.app1')
    @section('content1')
            @foreach($centro as $centros)
              @if($centros->id == $idcentro)
                <div class="row justify-content-center mt-5">
	              <div class="col-md-8 text-center">
	                <h1>Canchas {{ $centros->nombre }}</h1>
	              </div>
	            </div>
              @endif
            @endforeach
    @endsection
    @section('content2')
   <div class="site-section" data-aos="fade">
      <div class="container">
      	@foreach($cancha as $can)
            @if($can->id_centro == $idcentro)

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Cancha "{{ $can->nombre }}"</h2>
          </div>
        </div>

        <div class="row">
              @foreach($caracteristica as $ca)
                @if($ca->id_cancha == $can->id)
                  	<div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
  		            <div class="listing-item">
  		              <div class="listing-image">
  		                <img src="{{ asset($ca->foto) }}" alt="Image" class="img-fluid">
  		              </div>
  		              <div class="listing-item-content">
  		                <a href="{{ asset($ca->foto) }}" target="_blak" class="bookmark" data-toggle="tooltip" data-placement="left" title="Ver {{ $can->nombre }}"><span class="icon-eye"></span></a>
  		                <h2 class="mb-1">Costo por Hora: {{ $can->costo }} Bs</h2>
  		                <h2 class="mb-1">Tamaño de la cancha: {{ $can->descripcion }}</h2>
  		              </div>
  		            </div>
		          	</div>
                @endif
              @endforeach
        </div>

        	@endif
        @endforeach
        <div class="row justify-content-center mb-5">
          <a href="{{ route('calendario.show',$idcentro) }}"><input type="submit" class="btn btn-primary btn-block rounded" value="Reservar Cancha"></a>
        </div>
      </div>
    </div>

    @endsection