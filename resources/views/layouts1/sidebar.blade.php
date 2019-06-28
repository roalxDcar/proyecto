        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../../assets/new/images/icon/info1.png"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                        {{-- Sidebar del Administrador --}}
                        @if( Auth::user()->id_rol == 2 )
                    <ul class="list-unstyled navbar__list">

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
                                    <a href="{{ route('promocion.index') }}">Promoción</a>
                                </li>
                            </ul>
                        </li>
                    </ul>                        
                        @else
                        {{-- Siderbar del Empleado --}}
                        <ul class="list-unstyled navbar__list">

                            <li>
                            <a href="{{ route('horario.index') }}">
                                <i class="fas fa-edit"></i>Horario</a>
                            </li>
                            <li>
                                <a href="{{ route('area.index') }}"> <i class="fas fa-desktop"></i> Cancha</a>
                            </li>
                        </ul>
                        @endif

                </nav>
            </div>
        </aside>