@extends('template.form')

@section('title', 'Agregar Defensa')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection
@section('contenido')
    {!! Form::open(['route' => 'store.defensa', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	@include('forms.idcarpeta')
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				@include('fields.defensa')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.defensas')
	</div>
@endsection