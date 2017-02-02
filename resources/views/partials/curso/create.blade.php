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
		removeParent = function(e){
			$(e).parent().remove();
		}
	});
</script>


<div class="form-group col-md-12">
	{!! Form::label('nome', 'Nome do curso', []) !!}
	{!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome do curso']) !!}
</div>
<div id="sandbox-container">
<div class="form-group col-md-6 input-daterange " >
	{!! Form::label('inicio', 'Data de início do curso', []) !!}
	{!! Form::date('inicio', null, [
	'class' => 'form-control ',
	'placeholder' => 'Que dia o curso começa'
	]) 
	!!}
</div>

<div class="form-group col-md-6">
	{!! Form::label('termino', 'Data de término do curso', []) !!}
	{!! Form::date('termino', null, [
	'class' => 'form-control', 
	'placeholder' => 'Que dia o curso termina'
	]) 
	!!}
</div>
</div>

<hr width="100%">

<div id="listas" class="form-group col-md-12"></div>

<div class="form-group col-md-12">
	<a id="add_field" type="button" class="btn btn-info">
		 Matéria 
		<i class="fa fa-plus-square-o" aria-hidden="true"></i>
	</a>
</div>
<div class="form-group col-md-2">
	<div class="form-group">
		{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
	</div>
</div>