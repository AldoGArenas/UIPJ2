@extends('template.form')

@section('title', 'Agregar Autoridad')
@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.autoridad', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapsePersonales3" aria-expanded="false" aria-controls="collapsePersonales3">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapsePersonales3" class="collapse show boxcollapse">
			<div class="box-body">
				@include('fields.personales-aut')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseDir3" aria-expanded="false" aria-controls="collapseDir3">
					Dirección
				</a>
			</h5>
		</div>
		<div id="collapseDir3" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.direcciones')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseTrab3" aria-expanded="false" aria-controls="collapseTrab3">
					Datos del trabajo
				</a>
			</h5>
		</div>
		<div id="collapseTrab3" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.lugartrabajo')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseAutoridad" aria-expanded="false" aria-controls="collapseAutoridad">
					Información sobre la autoridad
				</a>
			</h5>
		</div>
		<div id="collapseAutoridad" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.extra-aut')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.autoridades')
	</div>
@endsection
