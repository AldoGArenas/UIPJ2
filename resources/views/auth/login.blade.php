<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  {{-- Tell the browser to be responsive to screen width --}}
  {{--<link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />--}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
  {{-- Font Awesome --}}
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/font-awesome/css/font-awesome.min.css')}}">
  {{-- Ionicons --}}
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/Ionicons/css/ionicons.min.css')}}">
  {{-- Theme style --}}
  <link rel="stylesheet" type="text/css"  href="{{asset ('bower_components/admin-lte/dist/css/AdminLTE.css')}}">
  {{-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.--}}
  <link rel="stylesheet" type="text/css" href="{{asset('/css/estilos.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/admin-lte/dist/css/skins/skin-blue.min.css')}}">
  {{-- iCheck--}}
  <link rel="stylesheet"type="text/css" href="{{asset ('bower_components/admin-lte/plugins/iCheck/square/blue.css')}}">
  

  {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
  {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
  {{--[if lt IE 9]--}
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--}}

  {{-- Google Font --}}
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box cf card text-white bg-dark"id="loginbox">
  
  {{-- /.login-logo --}}
  
      <div class="card-body logo-fge" id="logo-fge">
          <a ><img src="{{ asset('img/logo-fge-svg.svg') }}" alt=""></a>
          {{--<p class="login-box-msg">Ingresa tus datos para iniciar sesión</p>--}}
        </div>   
    <form class="card-body abajo"  method="POST"action="{{ route('login') }}">
      {{csrf_field()}}
      <div class="form-group has-feedback row{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="input-group">
            <span class="rounded-left"><i class="fa fa-envelope fa-lg " aria-hidden="true"></i></span>
        <input id="email" type="email" class="form-control rounded" placeholder="Correo electrónico "name ="email" value="{{ old('email') }}">
          </div>
          @if ($errors->has('email'))
          <span class="help-block" id="error">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
           @endif
      </div>
      <div class="form-group has-feedback row{{ $errors->has('password') ? ' has-error' : '' }}" >
        <div class="input-group">
          <span class="rounded"><i class="fa fa-key fa-lg " aria-hidden="true"></i></span>            
            <input id="password" type="password" name="password" class=" form-control rounded" placeholder="Contraseña">
            
                @if ($errors->has('password'))
                   <span class="help-block">
                     <strong>{{ $errors->first('password') }}</strong>
                   </span>
                @endif
        </div>
         
        </div>
      
        {{-- /.col --}}
        <div class="col-md-12 ">
          <button type="submit" class="btn btn-inicio pull-right ">Entrar</button>
        </div>
        {{-- /.col --}}
      
    </form>

    {{--<div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    {{-- /.social-auth-links --}}

    {{--<a href="#">I forgot my password</a><br>--}}
    

  
  {{-- /.login-box-body --}}
</div>
{{-- /.login-box --}}

{{-- REQUIRED JS SCRIPTS --}}
{{-- jQuery 3 --}}
<script src="{{ asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
{{-- Bootstrap 4 --}}
<script src="{{ asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
{{-- AdminLTE App --}}
<script src="{{ asset ('bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset ('bower_components/admin-lte/plugins/iCheck/icheck.min.js')}}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
