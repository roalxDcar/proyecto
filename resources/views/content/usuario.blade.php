@extends('layouts.app1')
@section('content1')
{{-- Calendario --}} 
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-7"><div id="calendario"></div></div>
                        <div class="col"></div>
                    </div>
                </div>
                @section('script')
                <script>
                  $(document).ready(function(){
                    $('#calendario').fullCalendar();
                  });
                </script>
                @endsection
                {{-- Calendario --}}   
          </div>
        </div>
      </div>
    </div>  
{{-- Contenido de detalle de centros --}}
    <div class="site-section bg-light">
      <div class="container">      
        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black">Centros Deportivos</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">         
              
              @foreach($centro as $cen)
                <div class="d-block d-md-flex listing vertical">
                  <a target="_blak" href="{{ asset($cen->foto) }}" class="img d-block"><img title="{{ $cen->nombre }}" src="{{ asset($cen->foto) }}"></a>
                  <div class="lh-content">
                    <a title="Mirar Ambientes" href="mostrar_cancha" class="bookmark"><span class="icon-eye"></span></a>
                    <h3>Reservar:  <a title="Reservar" href="{{ route('calendario.show',$cen->id) }}">" {{ $cen->nombre }} "</a></h3>
                    <p><b>* Ubicacion:</b> {{ $cen->ubicacion }}</p>
                    <p><b>*Telefono: </b>{{ $cen->telefono }}</p>
                  </div>
                </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
         
    <div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Promociones</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          @foreach( $promo as $p)
            <div>
              <div class="testimonial">
                {{-- nombre del administrador del centro deportivo --}}
                <figure class="mb-4">
                  @foreach( $user as $u )
                      @if( $p->id_user == $u->id )
                        @foreach($centro as $c)
                           @if($c->id == $u->id_centro)
                             <p>{{ $u->name }} {{ $u->paterno }}</p>
                           @endif
                        @endforeach
                      @endif
                  @endforeach
                </figure>
                <figure class="mb-4">
                  @foreach( $user as $u )
                      @if( $p->id_user == $u->id )
                        @foreach($centro as $c)
                           @if($c->id == $u->id_centro)
                             <p>{{ $c->descripcion }} {{ $c->nombre }}"</p>                             
                           @endif
                        @endforeach
                      @endif
                  @endforeach
                </figure>
                      {{-- promocion --}}
                <blockquote>
                  <p>{{ $p->descripcion }}</p>
                </blockquote>

              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

@endsection