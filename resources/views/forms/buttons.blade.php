@include('forms.idCarpeta')
<div class="col-md-6">
	<div class="row pull-right">
		<div class="col ">	
			<div class="">
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
