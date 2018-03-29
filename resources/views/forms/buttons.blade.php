@include('forms.idCarpeta')
<div class="box-body">
	<div class="row">
		<div class="col">	
			<div class="text-right">
				{!! Form::button('Limpiar Campos', ['class' => 'btn btn-dark', 'id' => 'btn-reset']) !!}
				{!! Form::submit('Guardar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
			</div>
		</div>
	</div>
</div>
