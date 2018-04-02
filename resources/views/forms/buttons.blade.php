@include('forms.idCarpeta')
<div class="col-md-auto pull-right">
	<div class=" col-md-auto pull-right">		
				{!! Form::button('Limpiar Campos', ['class' => 'btn btn-primary', 'id' => 'btn-reset']) !!}
				{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
				
	</div>
</div>
@section ('regresocarpeta')
<div>
	
</div>
@endsection
