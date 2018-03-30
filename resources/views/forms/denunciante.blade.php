@extends('template.form')

@section('title', 'Agregar Denunciante')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
	{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
	<div class="card-header">
		@include('fields.tipo-persona')
		@include('forms.buttons') </div>
    {{ csrf_field() }}
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
		<div class="card container-fluid">
			@include('fields.personales')
						
		</div>
  				
  </div>
  <div class="tab-pane container" id="menu1">...</div>
  <div class="tab-pane container" id="menu2">...</div>
</div>
	<div class="card" id="datosExtra">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseDenun" aria-expanded="false" aria-controls="collapseDenun">
					Información sobre el Denunciante o Agraviado
				</a>
			</h5>
		</div>
		<div id="collapseDenun" class="collapse boxcollapse">
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

