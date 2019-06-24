        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="#">
                            <img src="../../assets/new/images/icon/info1.jpg" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                        {{-- Sidebar del Administrador --}}
                        @if( Auth::user()->id_rol == 2 )
                            <ul class="list-unstyled navbar__list">

                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendario</a>
                                </li>
                                <li>
                                    <a href="{{ route('horario.index') }}">
                                        <i class="fas fa-edit"></i>Horario</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Mapa</a>
                                </li>

                                <li class="has-sub">
                                    <a class="js-arrow" href="#">
                                        <i class="fas fa-desktop"></i>Registro</a>
                                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li>
                                            <a href="{{ route('personal.index') }}">Personal</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('area.index') }}">Cancha</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('caracteristica.index') }}">Fotografias de las Canchas</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('promocion.index') }}">Promocion</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>                        
                        @else
                        {{-- Siderbar del Empleado --}}
                            <ul class="list-unstyled navbar__list">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-calendar-alt"></i>Calendario</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-map-marker-alt"></i>Mapa</a>
                                </li>
                                <li>
                                    <a href="map.html">
                                        <i class="fas fa-cogs"></i>Cancha</a>
                                </li>
                            </ul>
                        @endif            
                    </ul>
                </div>
            </nav>
        </header>