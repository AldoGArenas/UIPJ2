@extends('template.form')

@section('title', 'Agregar Vehículo')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.vehiculo', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
		<div class="row">
			<div class="col-md-12">
					@include('forms.buttons')
			</div> 
		</div>
	</div>
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

	