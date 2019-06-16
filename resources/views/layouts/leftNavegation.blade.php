
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
                      <li><a href="{{ route('ad_personal.index') }}">Lista de Administradores</a></li>
                      <li><a href="{{ route('cancha.index') }}">Lista de Canchas</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-soccer-ball-o"></i> Deporte <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                      <li><a href="{{ route('ad_deporte.index') }}">Tipo</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Centro Deportivo <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('ad_detallecentro.index') }}">Nuevo Centro</a></li>
                      <li><a href="{{ route('ad_centro.index') }}">Lista de centros deportivos</a></li>
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