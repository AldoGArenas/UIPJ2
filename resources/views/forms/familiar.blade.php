@extends('template.form')

@section('title', 'Agregar Familiar')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.familiar', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
		<div class="col-md-12">
			@include('forms.buttons')
		</div>
			
	</div>
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				<h6>Datos del familiar (Denunciante/Denunciado)</h6>
				@include('fields.familiar')
			</div>
		</div>
	</div>
	
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.familiares')
	</div>
@endsection