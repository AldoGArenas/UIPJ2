@section ('css')
<link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
@endsection
<header class="main-header">

        {{-- Logo --}}
        <a  class="logo" href="{{ url('/home') }}">
          {{-- mini logo for sidebar mini 50x50 pixels --}}
          <span class="logo-mini"><img src="https://rawcdn.githack.com/Romaincks/assets/master/img/logo-150px-FGE.png" alt="" style="height:30px"></span>
          {{-- logo for regular state and mobile devices --}}
          <span class="logo-lg"><img src="https://rawcdn.githack.com/Romaincks/assets/master/img/logo-nooficial-fge.png" alt="" style="height:40px"></span>
        </a>    
        {{-- Header Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-fixed-top" role="navigation">
          {{-- Sidebar toggle button--}}
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          {{-- Navbar Right Menu --}}
          <div class="collapse navbar-collapse justify-content-end" id="nav-content">  
          <ul id="nav-derecha" class="navbar-nav ">
              {{-- Messages: style can be found in dropdown.less--
                @auth              
              <li class="dropdown  user-menu" style="">
                {{-- Menu Toggle Button --
                <a class="dropdown-toggle"id="Preview" href="#" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                 {{-- The user image in the navbar--                 
                  <img src="{{asset('bower_components/admin-lte/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  {{-- hidden-xs hides the username on small devices so only the image appears. --}}
                 {{--}} <span class="hidden-xs">{{ Auth::user()->nombres}}</span>
                </a>  
                <div class="dropdown-menu ajuste" aria-labelledby="Preview">            
                  <div class="">
                            <div class="">
                             <a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Cerrar sesión</a>
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                             </form>
                           </div>
                          </div>
                          @endauth
                </div>
              </li>--}}
                                                 
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                  </ul>
                  
              </div>
                
                  {{-- The user image in the menu --}}
                  
                  {{-- Menu Body --}}
                  {{--<li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </div>
                    {{-- /.row --}}
                  {{--</li>--}}
                  {{-- Menu Footer--}}
                  
               
              
              
              {{-- Control Sidebar Toggle Button --}}
              
              
        </nav>
      </header>
      @include ('template.partials.asideder')