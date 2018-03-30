@extends('template.form')

@section('title', 'Generar documento de colaboración con Policia Ministerial')
@section ('regresocarpeta')
<a href="{{ route('view.carpeta', $idCarpeta) }}" class="btn btn-primary"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a>
@endsection
@section('contenido')
    {!! Form::open(['route' => 'colaboracion.pm', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="box-body">
				<h6>Acusaciones</h6>
				<div class="table">
				    <table class="table table-striped">
				        <thead>
				        	<th>Seleccione una</th>
				            <th>Nombre denunciante</th>
				            <th>Delito</th>
				            <th>Nombre denunciado</th>
				        </thead>
				        <tbody>
				            @if(count($acusaciones)==0)
				                <tr><td colspan="3" class="text-center">Sin registros</td></tr>
				            @else
				                @foreach($acusaciones as $acusacion)
				                    <tr>
				                    	<td><input type="radio" value="{{ $acusacion->id }}" name="radioAcusacion"></td>
				                        <td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
				                        <td>{{ $acusacion->delito }}</td>
				                        <td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
				                    </tr>
				                @endforeach
				            @endif
				        </tbody>
				    </table>
				</div>
			</div>

			<div class="box-body">
				<div class="form-group">
					@foreach($servicios as $servicio)
						<div class="form-check">
							<label class="form-check-label col-form-label col-form-label-sm">
								<input class="form-check-input" type="checkbox" name="servicios[]" value="{{ $servicio->id }}" id="servicio{{ $servicio->id }}"> {{ $servicio->nombre }}
							</label>
						</div>
					@endforeach
				</div>
			</div>
			@include('forms.idcarpeta')
			<div class="box-body">
				<div class="row">
					<div class="col">
						<div class="text-left">
							<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center">Regresar</a>
						</div>
					</div>
					<div class="col">	
						<div class="text-right">
							{!! Form::submit('Generar documento', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection