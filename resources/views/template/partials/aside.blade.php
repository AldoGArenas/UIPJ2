<aside class="main-sidebar">

        {{-- sidebar: style can be found in sidebar.less --}}
        <section class="sidebar">
          
          {{-- Sidebar user panel (optional) --}}
          <div class="user-panel">
              @auth
            <div class="pull-left image">
              <img src="{{asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{ Auth::user()->nombres}}
              {{-- Status --}}
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            @endauth
          </div>
    
          {{-- search form (Optional) --}}
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
            </div>
          </form>
          {{-- /.search form --}}
    
          {{-- Sidebar Menu --}}
          <ul class="sidebar-menu" data-widget="tree">
            @auth
            <li class="header">CONTENIDO</li>
            {{-- Optionally, you can add icons to the links --}}
            <li class="active"><a href="{{ url('/home') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
            <li><a href="{{ route('libro.gobierno') }}"><i class="fa fa-book"></i> <span>Libro de gobierno</span></a></li>
            @if(!isset($carpetas))
						  @if(isset($carpetaNueva))
							    <li><a class="nav-link" href="#"><i class="fa fa-folder-open">Iniciando carpeta: {{ $carpetaNueva[0]->numCarpeta }}</a></li>
              @endif
            @else
            <li><a href="{{ url('/iniciar-carpeta') }}"><i class="fa fa-folder"></i> <span>Registra nueva carpeta</span></a></li>
            @endif
            <li class="treeview">
              <a href="#"><i class="fa fa-folder-open"></i> <span>Con mas opciones</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>
            @endauth
          </ul>
          {{-- /.sidebar-menu --}}
        </section>
        {{-- /.sidebar --}}
      </aside>
    