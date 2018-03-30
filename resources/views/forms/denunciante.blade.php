@extends('template.form')

@section('title', 'Agregar Denunciante')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a>
@endsection

@section('contenido')
	@include('forms.errores')
	{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
	<div class="card-header">
		@include('fields.tipo-persona')
		@include('forms.buttons') </div>
    {{ csrf_field() }}
    <div class="box-body">
    	<div class="row">
    		
    	</div>
    </div>
	<div class="card" id="datosPer">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapsePersonales1" aria-expanded="false" aria-controls="collapsePersonales1">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapsePersonales1" class="collapse show boxcollapse">
			<div class="box-body">
				@include('fields.personales')
			</div>
		</div>
	</div>

	<div class="card" id="datosDir">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseDir1" aria-expanded="false" aria-controls="collapseDir1">
					Dirección
				</a>
			</h5>
		</div>
		<div id="collapseDir1" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.direcciones')
			</div>
		</div>
	</div>

	<div class="card" id="datosTrab">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseTrab1" aria-expanded="false" aria-controls="collapseTrab1">
					Datos del trabajo
				</a>
			</h5>
		</div>
		<div id="collapseTrab1" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.lugartrabajo')
			</div>
		</div>
	</div>

	<div class="card" id="datosNotif">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseNotifs1" aria-expanded="false" aria-controls="collapseNotifs1">
					Dirección para notificaciones
				</a>
			</h5>
		</div>
		<div id="collapseNotifs1" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.notificaciones')
			</div>
		</div>
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

