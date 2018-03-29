@extends('template.form')

@section('title', 'Agregar Acusación')
@section('contenido')
    {!! Form::open(['route' => 'store.acusacion', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				@include('fields.acusacion')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.acusaciones')
	</div>
@endsection