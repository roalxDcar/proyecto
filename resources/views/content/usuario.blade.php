@extends('layouts.app1')
@section('content1')
            
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
              
              <div class="d-block d-md-flex listing vertical">
                <a href="listings-single.html" class="img d-block" style="background-image: url('../assets/images/euro.png')"></a>
                <div class="lh-content">
                  <span class="category">Cars &amp; Vehicles</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">Wally Euro</a></h3>
                  <address> Distrito 3, Av. Bolivia, El Alto</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

              <div class="d-block d-md-flex listing vertical">
                <a href="listings-single.html" class="img d-block" style="background-image: url('../assets/images/img_2.jpg')"></a>
                <div class="lh-content">
                  <span class="category">Real Estate</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
                  <address>Don St, Brooklyn, New York</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

              <div class="d-block d-md-flex listing vertical">
                <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
                <div class="lh-content">
                  <span class="category">Furniture</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
                  <address>Don St, Brooklyn, New York</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Reviews)</span>
                  </p>
                </div>
              </div>

              

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