
			      <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> INFO<span class="text-green">-SPORT</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../assets/images/imagen.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  <li><a><i class="fa fa-sticky-note-o"></i> Registro <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('ad_personal.index') }}">Personal</a></li>
                      <li><a href="{{ route('cancha.index') }}">Cancha</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-soccer-ball-o"></i> Deporte <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{ route('ad_deporte.index') }}">Tipo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Centro Deportivo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu"
                      <li><a href="{{ route('ad_detallecentro.index') }}">Detalles centro deportivo</a></li>
                      <li><a href="{{ route('ad_centro.index') }}">Registro centro deportivo</a></li>
                      <li><a href="{{ route('detallecancha.index') }}">Detalles de Canchas</a></li>
                      <li><a href="{{ route('ad_estadocancha.index') }}">Estado de cancha</a></li>
                      <li><a href="{{ route('ad_caractercancha.index') }}">Imagenes de canchas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="{{ route('ad_detallecentro.index') }}">NIT centro deportivo</a></li>
                      <li><a href="{{ route('ad_centro.index') }}">Registro centro deportivo</a></li>
                      <li><a href="{{ route('ad_estadocancha.index') }}">Estado de cancha</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Calendario <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('ad_calendario.index') }}">Horario</a></li>
                    </ul>
                  </li>

                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->