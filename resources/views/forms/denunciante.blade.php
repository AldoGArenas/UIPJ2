@extends('template.form')

@section('title', 'Agregar Denunciante')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}"  class="btn btn-primary"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a>
@endsection

@section('contenido')
	@include('forms.errores')
	{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST'])  !!}
	<div class="card-header">
		@include('fields.tipo-persona')
		@include('forms.buttons') </div>
    {{ csrf_field() }}

   <script type="text/javascript">
$( '.micheckbox' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        alert("El checkbox con valor " + $(this).val() + " ha sido seleccionado");
    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");
    }
});
</script>

<div id="tabs">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#collapsePersonales1">Datos Personales</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseDir1">Direccion</a>
  </li>
  <li class="nav-item" id="tabfisica">
    <a class="nav-link" data-toggle="tab" href="#collapseTrab1">Datos del trabajo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseNotifs1">Dirección para notificaciones</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#collapseDenun">Información sobre el Denunciante o Agraviado</a>
  </li>
</ul>
</div>

<!-- Tab panes -->
<div class="tab-content" id="contenidotabs">

  <div class="tab-pane active container" id="collapsePersonales1">
  		<div class="box-body">
		@include('fields.personales')
		</div>
  </div>
  <div class="tab-pane container" id="collapseDir1">
  		<div class="box-body">
		@include('fields.direcciones')
		</div>
  </div>
 
     <div class="tab-pane container" id="collapseTrab1">
  		<div class="box-body">
		@include('fields.lugartrabajo')
		</div>
  
  </div>


<div class="tab-pane container" id="collapseNotifs1">
	<div class="box-body">
	@include('fields.notificaciones')
	</div>
</div>
<div class="tab-pane container" id="collapseDenun">
	<div class="box-body">
	@include('fields.extra-denunciante')
	</div>
</div>

</div>







<<<<<<< HEAD
	
			
=======
	<div class="card" id="datosExtra">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseDenun" aria-expanded="false" aria-controls="collapseDenun">
					Información sobre el Denunciante o Agraviado
				</a>
			</h5>
		</div>
		<div id="collapseDenun" class="collapse boxcollapse">
			<div class="box-body">
				@include('fields.extra-denunciante')
			</div>
		</div>
	</div>	
	{!! Form::close() !!}		
>>>>>>> 7db663d592a569db0d42e50426ebb0114e6b56a3
	<div class="box-body">
		@include('tables.denunciantes')
	</div>
@endsection

