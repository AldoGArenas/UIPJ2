@extends('template.form')

@section('title', 'Agregar Denunciado')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><i class="fa fa-folder-open"></i></a>
@endsection

@section('contenido')
	@include('forms.errores')
    {!! Form::open(['route' => 'store.denunciado', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
		@include('forms.buttons') </div>
	<div class="box-body">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">Selecciona una opción</label>
					<div class="clearfix"></div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado1" name="tipoDenunciado" value="1" required> Q.R.R.
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado2" name="tipoDenunciado" value="2" required> Conoce al Denunciado o Imputado
						</label>
					</div>
					<div class="form-check form-check-inline">
						<label class="form-check-label col-form-label col-form-label-sm">
							<input class="form-check-input" type="radio" id="tipoDenunciado3" name="tipoDenunciado" value="3" required> Por comparecencia
						</label>
					</div>
				</div>
			</div>
			<div class="col-6 comparecencia">
				<div class="row">
	    			@include('fields.tipo-persona')
				</div>
	    	</div>
		</div>
	</div>

	<div id="qrr">
		<div class="box-body">
			<div class="row">
				<div class="col-12">
					<div class="form-group">
						{!! Form::label('nombresQ', 'Nombre', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('nombresQ', "QUIEN RESULTE RESPONSABLE", ['class' => 'form-control form-control-sm', 'readonly']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="conocido">
		<div class="box-body">
			@include('fields.det-conocido')
		</div>
	</div>

<div id="comparecenciatabs">
	<ul class="nav nav-tabs">
 		<li class="nav-item">
    		<a class="nav-link active" data-toggle="tab" href="#collapsePersonales2">Datos Personales</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseDir2">Direccion</a>
  		</li>
  		<li class="nav-item" id="tabfisica2">
    		<a class="nav-link" data-toggle="tab" href="#collapseTrab2">Datos del trabajo</a>
  		</li>
  		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseNotifs2">Dirección para notificaciones</a>
  		</li>
   		<li class="nav-item">
    		<a class="nav-link" data-toggle="tab" href="#collapseDenun2">Información sobre el Denunciado</a>
  		</li>
	</ul>
</div>

<!-- Contenido en Pestañas -->
<div class="tab-content" id="contenidotabs">
	<div class="tab-pane active container" id="collapsePersonales2">
  		<div class="box-body">
		@include('fields.personales')
		</div>
	</div>
<div class="tab-pane container" id="collapseDir2">
  		<div class="box-body">
		@include('fields.direcciones')
		</div>
</div>
<div class="tab-pane container" id="collapseTrab2">
  		<div class="box-body">
		@include('fields.lugartrabajo')
		</div>
  
</div>
<div class="tab-pane container" id="collapseNotifs2">
	<div class="box-body">
	@include('fields.notificaciones')
	</div>
</div>
<div class="tab-pane container" id="collapseDenun2">
	<div class="box-body">
	@include('fields.extra-denunciado')
	</div>
</div>

</div>

	
	{!! Form::close() !!}
	<div class="box-body">
		@include('tables.denunciados')
	</div>

	@endsection
