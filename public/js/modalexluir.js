$(function(){
      $("#excluir").click(function(){
      	$("#botaoenviar").attr("type", "button")

      	//$('#botaoenviar').find('input').prop('disabled', true);
          $("#modalExcluir").append('<div class="modal fade" id="myModal{{$materia->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Confirmação de exclusão</h4> </div> <div class="modal-body"> {!! Form::open( [ 'method' => 'DELETE', 'route' => ['materia.destroy', $materia->id], 'name' => 'deletar' ]) !!} <strong>Nome:</strong><span> {{$materia->nome}}</span> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"onclick="removeMateria(this)">Fechar</button> <button type="submit" id="deletar" class="btn btn-danger">Eu realmente quero excluir</button> {{ Form::close() }} </div> </div> </div> </div>');


      });


      // Remover o div anterior
      removeModalExcluir = function() { document.getElementById('myModal{{$materia->id}}').remove() }



      


 });
