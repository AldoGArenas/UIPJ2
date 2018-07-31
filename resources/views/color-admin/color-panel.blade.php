@extends('template.form')

@section('title', 'Administrador de color del sistema')
@section('contenido')	

{!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}
{{ csrf_field() }}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
				</div>
			</div>
		<div class="col">	
			<div class="text-right">
			{{--  @include('forms.buttons')  --}}
			</div>
		</div>
	</div>
</div> 
@include('forms.errores')
<div class=" card-body boxone">
		<div class="row no-gutters">
			<div class="col-6">
 				{!! Form::button('Mamalon', ['id'=>'mamalon','class'=>'boton-mamalon']) !!}
				<input id="selector" class="jscolor {hash:true}" value="ab2567">
			</div>
			<div class="col-6">
				<label for="">Background color navbar</label>
				<input id="navbar-bcolor" class="jscolor {hash:true}" value="ab2567">
			</div>
			<div class="col-6">
				<label for="">Background del Body</label>
				<input id="body-bcolor" class="jscolor {hash:true}" value="ab2567">
			</div>
			
		
	</div>
</div>	
{!! Form::close() !!}


@endsection
@section('tabla')
	<div class="boxtwo">
		{{--  @section('titulo-tabla', 'Abogados Registrados')
		@include('tables.abogados')  --}}

		
	</div>


@endsection
@push('PilaScripts')
<script src="{{ asset('js/jscolor.js')}}" ></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.card').change('input',function(){		
		less.modifyVars({
			 '@color-secundario':$('#navbar-bcolor').val(),
			 '@color-primario':$('#selector').val(),
			 '@color-fondo':$('#body-bcolor').val()
         });
	});
	});
	
</script>
@endpush
