
<script>

{{-- FILE INPUT  --}}

$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper         = $("#material_input"); //Fields wrapper
	var add_button      = $("#add_file"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<p> <div id="file" class="line row form-group"> <div class="col-md-5 col-sm-5"> <input type="text" class="form-control" name="namefile[]" placeholder="Digite o título do arquivo" /> </div> <div class="col-md-5 col-sm-5"> <div class="fileupload fileupload-new" data-provides="fileupload"> <span class="btn btn-primary btn-file"> <span class="fileupload-new">Escolha o arquivo</span> <span class="fileupload-exists"><i class="fa fa-upload"></i></span> <input name="file[]" type="file" /> </span> <span class="fileupload-preview"></span> <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a> </div> </div> <div class="col-md-1 col-sm-5"> <a type="button" class="btn btn-danger remove_field" onclick="removelinha(this)"> <i class="fa fa-trash-o"></i></a> </div> </div> </p>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
	})
});

{{-- VIDEO --}}

$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper         = $("#material_input"); //Fields wrapper
	var add_button      = $("#add_video"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<p> <div id="video" class="line row form-group"> <div class="col-md-6"> <input id="textinput" name="video[]" type="text" placeholder="Ex. [  https://www.youtube.com/watch?v=A31p64q5v5g ]" class="form-control"> </div> <div class="col-md-6"> <a type="button" class="btn btn-danger remove_field" onclick="removelinha(this)"><i class="fa fa-trash-o"></i></a> </div> </div> </p>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;

		})
});

{{-- SLIDE --}}

$(document).ready(function() {
	var max_fields      = 10; //maximum input boxes allowed
	var wrapper         = $("#material_input"); //Fields wrapper
	var add_button      = $("#add_slide"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<p><div id="slide" class="line row form-group"> <div class="col-md-6"> <input id="textinput" name="slide[]" type="text" placeholder="https://slides.com/" class="form-control input-md"> </div> <div class="col-md-6"> <a type="button" class="btn btn-danger remove_field" onclick="removelinha(this)"><i class="fa fa-trash-o"></i></a> </div> </div></p>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
	})
});


</script>


<div class="form-group">

	{!! Form::label('nome', 'Nome da aula', []) !!}
	{!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome da aula', 'readonly' => 'readonly']) !!}
</div>






<div id="listas" class="form-group col-md-12">


@if (count($aula->material) < 1)
	<div class="alert alert-warning" role="alert">
		<i class="fa fa-exclamation-triangle" aria-hidden="true"></i><strong> Estranho!</strong> Esta aula não tem nenhum material? Clique no botão abaixo para adicionar. 
	</div>
@endif


<hr width="100%">






	<div class="row">

		
			@foreach ($aula->material as $material)
				
						@if ($material->type === 'file')

				
						
						
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h2 class="panel-title">
								<a href="#collapseOne{{$material->id}}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> <i class="fa fa-file-pdf-o text-danger"></i> {{$material->nome}}</a>  
								<i class="fa fa-chevron-right"></i>
								<a href="" class="btn btn-danger delete" data-toggle="modal" data-target="#myModal{{$material->id}}"> 
								<i class="fa fa-trash-o"></i>
								</a> </h2>
							</div>
							<div class="panel-collapse collapse" role="tabpanel" id="collapseOne{{$material->id}}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe scrolling="auto" height="100%" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-remote="true" src="/materiais/{{$material->link}}"></iframe> 
										</div>
										<div> <a target="_blank" href="/materiais/{{$material->link}}">Ver em outra janela</a></div> </div>
							</div>

				
						</div>
						
						

						@elseif($material->type === 'video')
						
						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
								<a href="#collapseOne{{$material->id}}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> <i class="fa fa-file-video-o text-danger"></i> {{$material->nome}}</a> 
								<i class="fa fa-chevron-right"></i>
								<a href="" class="btn btn-danger delete" data-toggle="modal" data-target="#myModal{{$material->id}}"> 
								<i class="fa fa-trash-o"></i>
								</a>
								</h4>
							</div>
							<div class="panel-collapse collapse" role="tabpanel" id="collapseOne{{$material->id}}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe scrolling="auto" height="100%" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-remote="true" src="{{$material->link}}"></iframe> 
										</div>
										</div>
							</div>

						</div>
						

						@elseif($material->type === 'slide')

						
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
								<a href="#collapseOne{{$material->id}}" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="collapseOne" class="collapsed"> <i class="fa fa-file-powerpoint-o"></i> {{$material->nome}}</a> 
								</h4>
							</div>
							<div class="panel-collapse collapse" role="tabpanel" id="collapseOne{{$material->id}}" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe scrolling="auto" height="100%" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen data-remote="true" src="/materiais/{{$material->link}}"></iframe> 
										</div>
										<div> <a target="_blank" href="/materiais/{{$material->link}}">Ver em outra janela</a></div> </div>
							</div>

						</div>


					@endif 

					
					
<script>
	
$(function(){
      $(".delete").click(function(){

          $("#modalExcluir").append('<div class="modal fade" id="myModal{{$material->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4> </div> <div class="modal-body"> <strong>Nome:</strong> <span> {{$material->nome}}</span> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button><a id="delete_btn" class="btn btn-danger" href="{{route('material.destroy', $material->id) }}" data-method="delete" rel="nofollow"  data-disable-with="Apagando...">Realmente quero deletar</i></a> </div> </div> </div> </div>');


      }); 

      // Remover o div anterior
      removeModalExcluir = function() { document.getElementById('myModal{{$material->id}}').remove() }

 });

</script>		

			       
			        
@endforeach			
		


</div>



<div id="modalExcluir"> 




</div>

{{-- MATERIAL WRAP --}}


<div id="material_input" class="col-md-12">
	


</div>






<div class="form-group">
	<div class="btn-group dropdown">
  <button type="button" class="btn btn-info">Adicionar material  </button>
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	<span class="caret"></span>
	<span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
	<li><a id="add_file" href="" >PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a></li>
	<li><a id="add_video" href="" >VIDEO <i class="fa fa-vimeo"></i><i class="fa fa-youtube-play"></i></a></li>
	<li><a id="add_slide" href="" >SLIDE <i class="fa fa-picture-o"></i></a></li>
  </ul>
</div>

</div>








<div class="form-group">

<div class="form-group">
	
{!! Form::submit('Enviar', ['class' => 'btn btn-primary', 'id' => 'botaoenviar', 'name' => 'enviar']) !!}

<a type="button" class="btn btn-warning btn-outline" href="javascript:history.back()">
	<i class="fa fa-arrow-left" aria-hidden="true"></i>
</a>
</div>
</div>

