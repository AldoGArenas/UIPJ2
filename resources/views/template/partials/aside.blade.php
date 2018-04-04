
<aside class="main-sidebar">

        {{-- sidebar: style can be found in sidebar.less --}}
        <section class="sidebar">
          
          {{-- Sidebar user panel (optional) --}}
          <div class="user-panel">
              @auth
            <div class="pull-left image">
              <img src="{{asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="rounded-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <div class="row">
               <div class="col-md-3">{{ Auth::user()->nombres}}</div>
               <div class="col-md-1"> <a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>             
               <div class="col-md-2"><a id="botonsalir" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"data-toggle="tooltip" data-placement="right" title="Da click para cerrar tu sesión" class="btn btn-sm btn-secondary"><i class="fa fa-sign-out"></i>Cerrar sesion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form></div>
                {{--<div class="col-md-1 "><p >cerrar sesión</p></div>--}}
              </div>
               <div class="row">
               <div class="col-md-6">{{ Auth::user()->primerAp." ".Auth::user()->segundoAp}}</div>
              {{-- Status --}}              
            </div>
            <div class="row">
            <div class="col-md-6"><small>Num de Fisc: <b></b> </small></div>
             <div class="col-md-6">{{ Auth::user()->numFiscal}}</div>
             
            </div>
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
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
            <li class="{{ Request::is( 'libro-gobierno') ? 'active' : '' }}"><a href="{{ route('libro.gobierno') }}"><i class="fa fa-book"></i> <span>Libro de gobierno</span></a></li>
            @if(isset($idCarpeta))
						<li class="{{ Request::is( 'carpeta') ? 'active' : '' }}" style="background-color:#424242 "><a href="{{ route('view.carpeta', $idCarpeta) }}"><i class="fa fa-folder-open"></i> <span>Carpeta Abierta</span></a></li>
            @endif
           {{--<li><a class="nav-link" href="#"><i class="fa fa-folder-open">Iniciando carpeta: {{ $carpetaNueva[0]->numCarpeta }}</a></li>--}}
            <li class="{{ Request::is( 'iniciar-carpeta') ? 'active' : '' }}"><a href="{{ url('/iniciar-carpeta') }}"><i class="fa fa-folder"></i> <span>Registra nueva carpeta</span></a></li>
            
            
           {{-- <li class="treeview">
              <a href="#"><i class="fa fa-folder-open"></i> <span>Con mas opciones</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Link in level 2</a></li>
                <li><a href="#">Link in level 2</a></li>
              </ul>
            </li>--}}
            @endauth
          </ul>
          {{-- /.sidebar-menu --}}
        </section>
        {{-- /.sidebar --}}
      </aside>
      @section('scripts')
      {{--<script src="{{ asset('js/popper.min.js')}}" ></script>--}}
    @endsection
    