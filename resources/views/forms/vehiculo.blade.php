@extends('template.form')

@section('title', 'Agregar Vehículo')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}" class="btn btn-primary"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a>
@endsection

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.vehiculo', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">@include('forms.buttons') </div>
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				<h6>Datos generales de la unidad</h6>
				<div class="row">
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
					@endif
					@include('fields.vehiculo')
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.vehiculos')
	</div>
@endsection

	