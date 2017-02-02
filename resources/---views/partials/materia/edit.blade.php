
<div class="form-group col-md-8">
	{!! Form::text('materia', null, ['class' => 'form-control', 'placeholder' => 'Nome da materia']) !!}
</div>

<div class="form-group col-md-2">
	<button class="btn btn-danger btn-block " data-toggle="modal" data-target="#myModal">Excluir</button>
</div>

<div class="form-group col-md-2">
	<button class="btn btn-primary btn-block " onclick="javascrit.history(-1)">Voltar</button>
</div>


<div class="form-group col-md-2">
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>





</div>
	