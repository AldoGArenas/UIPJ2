@extends('template.form')

@section('title', 'Agregar Delito')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.delito', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">@include('forms.buttons') </div>
	<div class="row no-gutters">
		<div class="col-md-12">
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
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.delitos')
	</div>
@endsection