@extends('template.form')

@section('title', 'Agregar Delito')

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.delito', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				<h6>Información sobre la comisión del delito</h6>
				@include('fields.delito')
			</div>
		</div>
	</div>

	<div class="box-body">
		<h6>Información sobre el lugar de los hechos</h6>
		@include('fields.direcciones')
		@include('fields.lugar-hechos')	
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.delitos')
	</div>
@endsection