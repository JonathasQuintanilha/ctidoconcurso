<script>
	$(document).ready(function() { // quando o documento estiver pronto
	var campos_max = 100;   //max de 10 campos
	var x = 1; // campos iniciais
	$('#add_field').click (function(e) { // ao clicar no id#add_field faça isso...
	e.preventDefault();     // 1) prevenir novos clicks
	if (x < campos_max) { // Verificar se x ainda está menor que o máximo
	
	$('#listas').append('<div id="materia" class="row"><div class="form-group col-md-11  has-success has-feedback"><input type="text" name="materia[]" class="form-control" placeholder="Nome da matéria">\</div>\
			<button type="button" class="btn btn-danger" onclick="removeMateria(this)">\
				<i class="fa fa-trash" aria-hidden="true"></i>\
				</button></div>\
	');

	x++;
	}
	});
	

	// Remover o div anterior
	removeMateria = function() {
	  document.getElementById('materia').remove()
	}




	});
</script>

<div class="form-group col-md-12">
	{!! Form::label('nome', 'Nome do curso', []) !!}
	{!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome do curso']) !!}
</div>
<div class="form-group col-md-6">
	{!! Form::label('inicio', 'Data de início do curso', []) !!}
	{!! Form::date('inicio', null, [
	'class' => 'form-control',
	'placeholder' => 'Data limite para o curso'
	])
	!!}
</div>
<div class="form-group col-md-6">
	{!! Form::label('termino', 'Previsão para o término do curso', []) !!}
	{!! Form::date('termino', null, [
	'class' => 'form-control',
	'placeholder' => 'Data limite para o curso'
	])
	!!}
</div>






<div id="listas" class="form-group col-md-12">


@if (count($curso->materia) < 1)
	<div class="alert alert-warning" role="alert">
	    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><strong> Estranho!</strong> Este curso não tem nenhuma matéria? Clique no botão abaixo para adicionar. 
	</div>
@endif
<hr width="100%">


@foreach ($curso->materia as $key => $materia)




<div id="listagens"  class="row">
	<div class="form-group col-md-10  has-success has-feedback">
		<input type="text" readonly="readonly" class="form-control" value="{{$materia->nome}}" placeholder="Nome da matéria"></div>
		<a type="button" class="btn btn-success" href="{{ route('materia.edit', $materia->id) }}">
			<i class="fa fa-pencil" aria-hidden="true"></i>
		</a>



	{{-- 	<a href="{{route('materia.destroy', $materia->id) }}" class="destroy-btn" data-method="delete" data-remote="true" data-confirm="Quer mesmo remover este registro: {{$materia->nome}} ?" data-disable-with="Deletando..." rel="follow">
			<i class="fa fa-trash" aria-hidden="true"></i>
		</a> --}}

		<button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#myModal{{$materia->id}}">
				<i class="fa fa-trash-o" aria-hidden="true"></i>
				</button>

		

	</div>

 
<script>
	
$(function(){
      $(".delete").click(function(){
      	//$("#formconteiner").attr("method", "get")

      	//$('#formconteiner').find('form').prop('disabled', true).attr(["method", "");

          $("#modalExcluir").append('<div class="modal fade" id="myModal{{$materia->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4> </div> <div class="modal-body"> <strong>Nome:</strong> <span> {{$materia->nome}}</span> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button><a id="delete_btn" class="btn btn-danger" href="{{route('materia.destroy', $materia->id) }}" data-method="delete" rel="nofollow"  data-disable-with="Apagando...">Realmente quero deletar</i></a> </div> </div> </div> </div>');


      }); 




      // Remover o div anterior
      removeModalExcluir = function() { document.getElementById('myModal{{$materia->id}}').remove() }



      


 });

</script>




<div id="modalExcluir"></div>
<!-- Modal -->


@endforeach
</div>


<div class="form-group col-md-12">
	<a id="add_field" type="button" class="btn btn-info">
		Adicionar Matéria
		<i class="fa fa-plus-square-o" aria-hidden="true"></i>
	</a>
</div>
<div class="form-group col-md-4">

<div class="form-group">
	
{!! Form::submit('Enviar', ['class' => 'btn btn-primary', 'id' => 'botaoenviar', 'data-disable-with' => 'Salvando...']) !!}

<a type="button" class="btn btn-warning btn-outline" href="javascript:history.back()">
	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
</div>
</div>

