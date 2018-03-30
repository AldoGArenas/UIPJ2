@extends('template.form')

@section('title', 'Agregar Denunciante')

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
    <div class="box-body">
    	<div class="row">
    		@include('fields.tipo-persona')
    	</div>
    </div>





<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#collapsePersonales1">Datos Personales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseDir1">Direccion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseTrab1">Datos del trabajo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseNotifs1">Dirección para notificaciones</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Información sobre el Denunciante o Agraviado</a>
  </li>
</ul>



<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="collapsePersonales1">
  				<div class="box-body">
				@include('fields.personales')
				</div>
  </div>
  <div class="tab-pane container" id="menu1">...</div>
  <div class="tab-pane container" id="menu2">...</div>
</div>







	
	@include('forms.buttons')
	{!! Form::close() !!}
		
	<div class="box-body">
		@include('tables.denunciantes')
	</div>
@endsection

