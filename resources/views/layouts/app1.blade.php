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
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a class="text-black mb-0">INFO<span class="text-primary">-SPORT</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="blog.html">Comentarios</a></li>
                <li><a href="contact.html">Contactos</a></li>

                @if (Route::has('login'))
                @auth
                    <li><a href="{{ route('/principal') }}" class="cta"><span class="bg-primary text-white rounded">Home</span></a></li>
                        @else
                    <li class="ml-xl-3 login"><a href="{{ route('login') }}"><span class="border-left pl-xl-4"></span>Iniciar Sesión </a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="cta"><span class="bg-primary text-white rounded">Registrarse</span></a></li>
                        @endif
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

  @yield('content1')


    
    <div class="newsletter bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>Newsletter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-6">
            
            <form class="d-flex">
              <input type="text" class="form-control" placeholder="Email">
              <input type="submit" value="Subscribe" class="btn btn-white"> 
            </form>
          </div>
        </div>
      </div>
    </div>
  
    
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

