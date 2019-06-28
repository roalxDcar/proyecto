<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Info-Sport</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets/fonts/icomoon/style.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/jquery-ui.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.theme.default.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap-datepicker.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/fonts/flaticon/font/flaticon.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/aos.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/rangeslider.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">

@yield('head')
        {{-- calendar --}}

    <link rel="stylesheet" href="{!! asset('assets/calendar/css/fullcalendar.min.css') !!}">
    
    <script src="{!! asset('assets/calendar/js/fullcalendar.min.js') !!}"></script>
    <script src="{!! asset('assets/calendar/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/calendar/js/moment.min.js') !!}"></script>
    {{-- calendar --}}
</head>
<body>


  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        {{-- BARRA SUPERIOR DE LA PANTALLA PRINCIPAL --}}
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{ url('/') }}" class="text-black mb-0">INFO<span class="text-primary">-SPORT</span>  </a></h1>
          </div>


          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">

                @if(Route::has('login'))
                  @auth
                      @if( Auth::user()->id_rol == 1 )                      
                        <li><a href="#"><span class="border-left pl-xl-4"></span>Comentarios</a></li>
                        <li><a href="#"><span class="border-left pl-xl-4"></span>Contactos</a></li>
                        <li><a href="{{ route('cancha_usuario.index') }}"><span class="border-left pl-xl-4"></span>Centros Depotivos</a></li>
                        <li class="has-children">
                          <a class="cta"><span class="bg-primary text-white rounded">{{ Auth::user()->name }}</span></a>
                          <ul class="dropdown">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Ajustes</a></li>
                              {{-- Cerrar Sesion --}}
                              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>Cerrar Sesion</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                              </form>
                            </li>
                          </ul>
                        </li>
                      @else
                          @if( Auth::user()->id_rol == 2 )
                            <li><a href="{{ url('/administrador') }}" class="cta"><span class="bg-primary text-white rounded"> Principal</span></a></li>
                          @else
                            <li><a href="{{ url('/empleado') }}" class="cta"><span class="bg-primary text-white rounded"> Principal</span></a></li>
                          @endif
                      @endif
                    @else
                    <li class="ml-xl-3 login"><a href="{{ route('login') }}"> Iniciar Sesión</a></li>
                    <li><a href="{{ route('register') }}" class="cta"><span class="bg-primary text-white rounded"> Registrarse</span></a></li>
                  @endauth
                @endif 

              </ul>

            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>
    {{-- Contenido dentro de la foto "PRINCIPAL" --}}
    <div class="site-blocks-cover overlay" style="background-image: url(../../assets/images/voley.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
                {{-- CONTENIDOS --}}
                @yield('content1')
                {{-- FIN DE CONTENIDO --}}

                {{-- Parte final --}}
        
          </div>
        </div>
      </div>
    </div> 

    @yield('content2')
    
                {{-- Fin de Parte final --}}

    {{-- Contenido dentro de la foto "PRINCIPAL" --}}

  
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <h2 class="footer-heading mb-4">About</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident rerum unde possimus molestias dolorem fuga, illo quis fugiat!</p>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Navigations</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  </div>
  <script src="{!! asset('assets/js/jquery-3.3.1.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery-migrate-3.0.1.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery-ui.js') !!}"></script>
  <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
  <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.stellar.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.countdown.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.magnific-popup.min.js') !!}"></script>
  <script src="{!! asset('assets/js/bootstrap-datepicker.min.js') !!}"></script>
  <script src="{!! asset('assets/js/aos.js') !!}"></script>
  <script src="{!! asset('assets/js/rangeslider.min.js') !!}"></script>

  <script src="{!! asset('assets/js/main.js') !!}"></script>
</body>
</html>

