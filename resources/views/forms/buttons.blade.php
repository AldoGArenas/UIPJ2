@include('forms.idCarpeta')
<div class="box-body">
	<div class="row">
		<div class="col">	
			<div class="text-right">
				{!! Form::button('Limpiar Campos', ['class' => 'btn btn-primary', 'id' => 'btn-reset']) !!}
				{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
			</div>
		</div>
	</div>
</div>
@section ('regresocarpeta')
<div>
	
</div>
@endsection
