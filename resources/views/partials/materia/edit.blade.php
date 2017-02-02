<script>
$(document).ready(function() { // quando o documento estiver pronto
var campos_max = 100;   //max de 10 campos
var x = 1; // campos iniciais
$('#add_field').click (function(e) { // ao clicar no id#add_field faça isso...
e.preventDefault();     // 1) prevenir novos clicks
if (x < campos_max) { // Verificar se x ainda está menor que o máximo
$('#listas').append('<div id="aula" class="row"> <div class="form-group col-md-5 has-success has-feedback"> <input placeholder="Assunto da aula" type="text" name="aula[]" class="form-control" aria-describedby="sizing-addon2"> </div> <div class="form-group col-md-5 has-success has-feedback"> {!! Form::date('aula[]', \Carbon\Carbon::now(), ['class' => 'form-control']) !!} </div> <button type="button" class="btn btn-danger" onclick="removeaula(this)"> <i class="fa fa-trash" aria-hidden="true"></i> </button> </div>');
x++;
}
});
// Remover o div anterior
removeaula = function() {
document.getElementById('aula').remove()
}
});
</script>
{{-- FILE INPUT  --}}
<script>
$(document).ready(function() { // quando o documento estiver pronto
var campos_max = 100;   //max de 10 campos
var x = 1; // campos iniciais
$('#add_file_input').click (function(e) { // ao clicar no id#add_field faça isso...
e.preventDefault();     // 1) prevenir novos clicks
if (x < campos_max) { // Verificar se x ainda está menor que o máximo
$('#file_input').append('<hr><div class="form-group"><input type="text" class="form-control filestyle" name="namefile[]"></div><input type="file" class="filestyle" name="file[]"></div>');
x++;
}
});
// Remover o div anterior
removeaula = function() {
document.getElementById('aula').remove()
}
});
{{-- VIDEO --}}
$(document).ready(function() { // quando o documento estiver pronto
var campos_max = 100;   //max de 10 campos
var x = 1; // campos iniciais
$('#add_video').click (function(e) { // ao clicar no id#add_field faça isso...
e.preventDefault();     // 1) prevenir novos clicks
if (x < campos_max) { // Verificar se x ainda está menor que o máximo
$('#file_input').append('<hr><div class="form-group"><label class="control-label" for="textinput">URL do youtube ou vimeo</label> <input id="textinput" name="video[]" type="text" placeholder="Ex. [  https://www.youtube.com/watch?v=A31p64q5v5g ]" class="form-control input-md"> </div>');
x++;
}
});
// Remover o div anterior
removeaula = function() {
document.getElementById('aula').remove()
}
});
{{-- SLIDE --}}
$(document).ready(function() { // quando o documento estiver pronto
var campos_max = 100;   //max de 10 campos
var x = 1; // campos iniciais
$('#add_slide').click (function(e) { // ao clicar no id#add_field faça isso...
e.preventDefault();     // 1) prevenir novos clicks
if (x < campos_max) { // Verificar se x ainda está menor que o máximo
$('#file_input').append('<hr><div class="form-group"> <label class="control-label" for="textinput">Slides.com</label>  <input id="textinput" name="slide[]" type="text" placeholder="https://slides.com/" class="form-control input-md"></div>');
x++;
}
});
// Remover o div anterior
removeaula = function() {
document.getElementById('aula').remove()
}
});
</script>
<div class="form-group col-md-12">
    {!! Form::label('nome', 'Nome da matéria', []) !!}
    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome da matéria']) !!}
</div>
<div id="listas" class="form-group col-md-12">
    @if (count($materia->aula) === 0)
    <div class="alert alert-warning" role="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><strong> Estranho!</strong> Esta matéria não tem nenhuma aula? Clique no botão abaixo para adicionar.
    </div>
    @endif
    <hr width="100%">



{{-- <div class="btn-group"> --}}


        @foreach ($materia->aula as $key => $aula)
       
        
       
        <div class="list-group col-md-3">
          <li class="list-group-item">
            <a href="{{ route('aula.edit', $aula->id) }}"> <h4 class="list-group-item-heading">{{$aula->nome}}</h4></a>
            <p>Data: <i>{{$aula->data}}</i></p>
          </li>
        </div>


        <!-- Modal -->
        @endforeach



{{-- </div> --}}

<hr width="100%">
<div id="modalExcluir"></div>

</div>
<div class="form-group col-md-12">
    <a data-toggle="modal" data-target=".modal" id="add_field" type="button" class="btn btn-info">
        {{-- <a data-toggle="modal" data-target=".modal"  type="button" class="btn btn-info"> --}}
            Adicionar Aula
            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
        </a>
    </div>
    <!-- line modal -->
    
    <div class="form-group col-md-4">
        <div class="form-group">
            
            {!! Form::submit('Enviar', ['class' => 'btn btn-primary', 'id' => 'botaoenviar', 'disable-with' => 'Enviando...']) !!}
            <a type="button" class="btn btn-warning btn-outline" href="javascript:history.back()">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
        </div>
    </div>