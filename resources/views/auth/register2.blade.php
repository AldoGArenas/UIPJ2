<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  {{-- Tell the browser to be responsive to screen width --}}
  {{--<link href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />--}}
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  {{-- Font Awesome --}}
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/font-awesome/css/font-awesome.min.css')}}">
  {{-- Ionicons --}}
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/Ionicons/css/ionicons.min.css')}}">
  {{-- Theme style --}}
  <link rel="stylesheet" type="text/css"  href="{{asset ('bower_components/admin-lte/dist/css/AdminLTE.min.css')}}">
  {{-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.--}}
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><img src="{{ asset('img/logofge.png') }}" alt="" style="height:200px"></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Formulario de Registro</p>

    <form  method="POST" action="{{ route('register') }}">
      <div class="form-group has-feedback row{{ $errors->has('idUnidad') ? ' has-error' : '' }}">
        {!! Form::label('idUnidad', 'Unidad', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        {!! Form::select('idUnidad', $unidades, null, ['class' => 'form-control select2', 'required']) !!}
           @if ($errors->has('idUnidad'))
              <span class="help-block">
                 <strong>{{ $errors->first('idUnidad') }}</strong>
              </span>
           @endif
      </div>
      <div class="form-group has-feedback row{{ $errors->has('nombres') ? ' has-error' : '' }}">
        {!! Form::label('nombres', 'Nombre', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="nombres" type="text" class="form-control" placeholder="" value="{{ old('nombres') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::label('primerAp', 'Primer Apellido', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="primerAp" type="text" class="form-control" placeholder="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::label('segundoAp', 'Segundo Apellido', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="segundoAp" type="text" class="form-control" placeholder="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::label('numFiscal', 'Numero de Fiscal', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="numFiscal" type="number" class="form-control" placeholder="">
        <span class="glyphicon  glyphicon-th-large form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
         {!! Form::label('email', 'Correo', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="email" type="email" class="form-control" placeholder="ejemplo@mas.com">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::label('password', 'Contraseña', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        {!! Form::label('password', 'Confirmar contraseña', ['class' => 'col-md-12 col-form-label text-center ']) !!}
        <input id="password-confirm" type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>            
        <div class="col-xs-12">
             <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
        </div>
         {{-- /.col --}}
      
    </form>
       
{{--
    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>--}}  
    <br>
    <br>
     <a href="" class="text-center" >Ya tengo una sesión</a>
    </div>   
  {{-- /.form-box --}}
</div>
{{-- /.register-box --}}

{{-- REQUIRED JS SCRIPTS --}}
{{-- jQuery 3 --}}
<script src="{{ asset ('bower_components/jquery/dist/jquery.min.js')}}"></script>
{{-- Bootstrap 4 --}}
<script src="{{ asset ('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
{{-- AdminLTE App --}}
<script src="{{ asset ('bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
{{--iCheck --}}
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
