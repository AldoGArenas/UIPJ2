<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de inicio de Carpetas de Investigación</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" type="text/css" href="{{asset ('bower_components/admin-lte/dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{asset ('css/sweetalert.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme-jquery-validation.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
  @yield('css')
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
{{--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
--}}
<body class="hold-transition   sidebar-mini">
    <div class="wrapper">
        {{-- Main Header --}}
        @include('template.partials.header2')
        {{-- Left side column. contains the logo and sidebar --}}
        @include('template.partials.aside')
        {{-- Content Wrapper. Contains page content --}}
        <div class="content-wrapper">
             {{-- Content Header (Page header) 
                @include ('template.partials.headercontainer')--}}
                @yield ('cabinterna')
                          
            <section class="content container-fluid">
                {{--Contenido de la pagina--}}
                    @yield('content')
            </section>
        </div>
        {{--Footer
            @include('template.partials.footer')
            --}}
    </div>
    <script src="{{ asset ('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}" ></script>
     {{-- Bootstrap 4 --}}
    <script src="{{ asset ('js/bootstrap.min.js')}}"></script>
    
     {{-- AdminLTE App --}}
    <script src="{{ asset ('bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
    
    <script src="{{asset ('js/sweetalert.min.js')}}"></script>
	<script src="{{ asset('plugins/select2/select2.min.js')}}" ></script>
	<script src="{{ asset('js/toastr.min.js')}}" ></script>
	<script src="{{ asset('js/jquery.form-validator.min.js')}}" ></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
	<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script type="text/javascript">
        $(window).on("unload", function(e) {

            console.log('saliendio');
          });
      
              $("input:text").keyup(function() {
              $(this).val($(this).val().toUpperCase());
              });
              $("textarea").keyup(function() {
                  $(this).val($(this).val().toUpperCase());
              });
              $(document).ready(function() {
                  $('select').select2();
                  toastr.options = {
                      "closeButton": true,
                      "debug": false,
                      "newestOnTop": true,
                      "progressBar": true,
                      "positionClass": "toast-bottom-right",
                      "preventDuplicates": true,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "3000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                  }
              });
         $.validate({
            lang : 'es'
        });
    </script>
    @yield('scripts')
    @include('sweet::alert')
     {{-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. --}}
</body>
</html>