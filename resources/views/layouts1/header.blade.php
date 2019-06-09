        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../../assets/new/images/icon/info11.jpg" />
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
                        {{-- Sidebar del Usuario --}}
                    @if( Auth::user()->id_rol == 1 )
                    <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Principal</a>
                            </li>
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
                                    <i class="fas fa-folder-open"></i>Centros Deportivos</a>
                            </li>
                        </ul>
                    @else
                        {{-- Sidebar del Administrador --}}
                        @if( Auth::user()->id_rol == 2 )
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Principal</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendario</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-edit"></i>Cambiar Horario</a>
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
                                    <a href="button.html">Personal</a>
                                </li>
                                <li>
                                    <a href="badge.html">Cancha</a>
                                </li>
                                <li>
                                    <a href="tab.html">Estado Cancha</a>
                                </li>
                            </ul>
                        </li>
                    </ul>                        
                        @else
                        {{-- Siderbar del Empleado --}}
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Principal</a>
                            </li>
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
                    @endif               
                    </ul>
                </div>
            </nav>
        </header>