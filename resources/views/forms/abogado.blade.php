@extends('template.form')

@section('title', 'Agregar Abogado')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection
@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">@include('forms.buttons') </div>
	


<div id="abogadotabs">
	<ul class="nav nav-tabs">
 		<li class="nav-item">
    		<a class="nav-link active" data-toggle="tab" href="#collapsePersonales3">Datos Personales</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseTrab3">Datos del trabajo</a>
  		</li>
  		<li class="nav-item" id="tabfisica3">
    		<a class="nav-link" data-toggle="tab" href="#collapseAutoridad">Información sobre el abogado</a>
  		</li>
  		
	</ul>
</div>

<div class="tab-content" id="contenidotabs">
	<div class="tab-pane active container" id="collapsePersonales3">
  		<div class="box-body">
		@include('fields.personales-abo')
		</div>
	</div>
<div class="tab-pane container" id="collapseTrab3">
  		<div class="box-body">
		@include('fields.lugartrabajo')
		</div>  
</div>
<div class="tab-pane container" id="collapseAutoridad">
	<div class="box-body">
	@include('fields.extra-abo')
	</div>
</div>

</div>



	

	

	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.abogados')
	</div>
@endsection
