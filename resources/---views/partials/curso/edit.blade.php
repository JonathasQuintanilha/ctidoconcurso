<script>
	$(document).ready(function() { // quando o documento estiver pronto
	var campos_max = 100;   //max de 10 campos
	var x = 1; // campos iniciais
	$('#add_field').click (function(e) { // ao clicar no id#add_field faça isso...
	e.preventDefault();     // 1) prevenir novos clicks
	if (x < campos_max) { // Verificar se x ainda está menor que o máximo
	
	$('#listas').append('<div class="row"><div class="form-group col-md-11  has-success has-feedback"><input type="text" name="materia[]" class="form-control" placeholder="Nome da matéria">\</div>\
			<button type="button" class="btn btn-danger" onclick="removeParent(this)">\
				<i class="fa fa-trash" aria-hidden="true"></i>\
				</button></div>\
	');

	x++;
	}
	});
	
	// Remover o div anterior
	removeParent = function(e) {
	$(e).parent().remove();
	}
	});
</script>

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
<hr width="100%">

@foreach ($materias as $m)

<div class="form-group col-md-8">
	<input type="text" readonly="true" name="materia[]" class="form-control" placeholder="Nome da matéria" value="{{$m->materia}}">
</div>

<div class="col-sm-2">	
	<a class="btn btn-success btn-block" href="{{ route('materia.edit', $m->id) }}">Editar</a>
</div>
<div class="col-sm-2">
	<button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal{{$m->id}}">Excluir</button>
</div>
<hr width="100%">

	<div class="modal fade" id="myModal{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(
					[
					'method' => 'DELETE',
					'route' => ['materia.destroy', $m->id],
					'class' => 'link'
					])
					!!}
					<strong>Nome:</strong><span> {{$m->materia}}</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="submit" class="btn btn-danger">Eu realmente quero excluir</button>
					{{ Form::close() }}
				</div>
			</div>
		</div>
</div>

@endforeach

<div id="listas" class="form-group col-md-12">
	
</div>

<hr width="100%">
<div class="form-group col-md-12">
	<a id="add_field" type="button" class="btn btn-info">
		Adicionar Matéria
		<i class="fa fa-plus-square-o" aria-hidden="true"></i>
	</a>
</div>
<div class="form-group col-md-4">
	<div class="form-group">
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

	<a type="button" class="btn btn-warning btn-outline" href="javascript:history.back()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
</div>
</div>

