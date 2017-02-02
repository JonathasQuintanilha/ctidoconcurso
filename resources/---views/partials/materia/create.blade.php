<div class="form-group col-md-6">
{!! Form::label('nome', 'Nome do curso', []) !!}
	{!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome do curso']) !!}
</div>
<div class="form-group col-md-6">
	{!! Form::label('deadline', 'Data de encerramento do curso', []) !!}
	{!! Form::date('deadline', null, [
				                       'class' => 'form-control', 
				                       'placeholder' => 'Data limite para o curso'
				                      ]) 
	!!}
</div>

<div class="form-group col-md-2">
	<div class="form-group">
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	</div>
</div>