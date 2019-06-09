        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../assets/new/images/icon/info11.png"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
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
                </nav>
            </div>
        </aside>