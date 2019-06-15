<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Info-Sport</title>

    <!-- Fontfaces CSS-->
    <link href="{!! asset('assets/new/css/font-face.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/font-awesome-4.7/css/font-awesome.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/font-awesome-5/css/fontawesome-all.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/mdi-font/css/material-design-iconic-font.min.css') !!}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{!! asset('assets/new/vendor/bootstrap-4.1/bootstrap.min.css') !!}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{!! asset('assets/new/vendor/animsition/animsition.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/wow/animate.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/css-hamburgers/hamburgers.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/slick/slick.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/select2/select2.min.css') !!}" rel="stylesheet" media="all">
    <link href="{!! asset('assets/new/vendor/perfect-scrollbar/perfect-scrollbar.css') !!}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{!! asset('assets/new/css/theme.css') !!}" rel="stylesheet" media="all">

</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('layouts1.header')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('layouts1.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('layouts1.topNavegation')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">

                            @yield('contenido')
                            @include('layouts1.footer')
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{!! asset('assets/new/vendor/jquery-3.2.1.min.js') !!}"></script>
    <!-- Bootstrap JS-->
    <script src="{!! asset('assets/new/vendor/bootstrap-4.1/popper.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/bootstrap-4.1/bootstrap.min.js') !!}"></script>
    <!-- Vendor JS       -->
    <script src="{!! asset('assets/new/vendor/slick/slick.min.js') !!}">
    </script>
    <script src="{!! asset('assets/new/vendor/wow/wow.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/animsition/animsition.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') !!}">
    </script>
    <script src="{!! asset('assets/new/vendor/counter-up/jquery.waypoints.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/counter-up/jquery.counterup.min.js') !!}">
    </script>
    <script src="{!! asset('assets/new/vendor/circle-progress/circle-progress.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/chartjs/Chart.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/new/vendor/select2/select2.min.js') !!}">
    </script>

    <!-- Main JS-->
    <script src="{!! asset('assets/new/js/main.js') !!}"></script>

</body>

</html>
<!-- end document-->
