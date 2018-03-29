@extends('template.form')

@section('title', 'Agregar Familiar')

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.familiar', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				<h6>Datos del familiar (Denunciante/Denunciado)</h6>
				@include('fields.familiar')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.familiares')
	</div>
@endsection