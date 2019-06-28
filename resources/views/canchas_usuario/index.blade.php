    @extends('layouts.app1')
    @section('content1')
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Centros Deportivos</h1>
              </div>
            </div>
    @endsection
    @section('content2')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Registrados</h2>
          </div>
        </div>
        <div class="row mt-5">
          @foreach($centro as $cen)
          <div class="col-lg-6">          
              <div class="d-block d-md-flex listing">
                <a href="{{ asset($cen->foto) }}" target="_blak" title="{{ $cen->nombre }}" class="img d-block" style="background-image: url({{ asset($cen->foto)  }})"></a>
                <div class="lh-content">
                  <h3><b><b>Centro Deportivo</b> {{ $cen->nombre }}</b></h3>
                  {{-- unidad de cancha --}}
                  @php($unidad=0)

                  @foreach($cancha as $can)
                   @if($cen->id == $can->id_centro)
                     @foreach($estado as $es)
                       @if($es->id == $can->id_estado)
                        @php($unidad++)
                       @endif
                     @endforeach
                   @endif
                  @endforeach

                    @if($unidad == 0)
                        <address><b>Cantidad de Canchas: </b>{{ $unidad }}</address>
                      @else
                        <address><b>Cantidad de Canchas: </b>{{ $unidad }} <a href="{{ route('cancha_usuario.show',$cen->id) }}" style="color:blue;"><b>Ver Cancha(s)</b></a></address>
                    @endif
                    <address><b>Ubicación:</b> {{ $cen->ubicacion }}</address>
                    <address><b>Telefono:</b> {{ $cen->telefono }}</address>
                    <a href="{{ route('calendario.show',$cen->id) }}"><input type="submit" class="btn btn-primary btn-block rounded" value="Reservar Cancha"></a>
                </div>
              </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endsection