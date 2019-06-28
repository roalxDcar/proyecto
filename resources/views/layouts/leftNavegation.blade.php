
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
                  
                  <li><a href="{{ route('ad_personal.index') }}"><i class="fa fa-sticky-note-o"></i> Registro Administradores</a></li>

                  <li><a href="{{ route('ad_detallecentro.index') }}"><i class="  fa fa-newspaper-o"></i> Centros Deportivos</a>
                  </li>

                  <li><a href="{{ route('ad_centro.index') }}"><i class=" fa fa-folder-open"></i> Registro Locales</a>
                  </li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->