@extends('template.form')

@section('title', 'Agregar Denunciante')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
	{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
	<div class="card-header">
		<div class="row">
		@include('fields.tipo-persona')
		@include('forms.buttons')
	</div>
</div>
    {{ csrf_field() }}


  <div id="tabs">
	<ul class="nav nav-tabs">
 		<li class="nav-item">
    		<a class="nav-link active" data-toggle="tab" href="#collapsePersonales1">Datos Personales</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseDir1">Direccion</a>
  		</li>
  		<li class="nav-item" id="tabfisica">
    		<a class="nav-link" data-toggle="tab" href="#collapseTrab1">Datos del trabajo</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseNotifs1">Dirección para notificaciones</a>
  		</li>
   		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseDenun">Información sobre el Denunciante o Agraviado</a>
  		</li>
	</ul>
</div>

<!-- Pestañas -->
<div class="tab-content" id="contenidotabs">
	<div class="tab-pane active container" id="collapsePersonales1">
  		<div class="box-body">
		@include('fields.personales')
		</div>
	</div>
<div class="tab-pane container" id="collapseDir1">
  		<div class="box-body">
		@include('fields.direcciones')
		</div>
</div>
<div class="tab-pane container" id="collapseTrab1">
  		<div class="box-body">
		@include('fields.lugartrabajo')
		</div>
  
</div>
<div class="tab-pane container" id="collapseNotifs1">
	<div class="box-body">
	@include('fields.notificaciones')
	</div>
</div>
<div class="tab-pane container" id="collapseDenun">
	<div class="box-body">
	@include('fields.extra-denunciante')
	</div>
</div>

</div>	
	{!! Form::close() !!}		

	<div class="box-body">
		@include('tables.denunciantes')
	</div>
@endsection

