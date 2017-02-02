@extends('layouts.app')
@section('content')
@section('routes_action')Lista de medicamentos  @stop
@if(count($errors->all()) > 0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)
		<li><strong>Ops! </strong>{{ $error }}</li>
		@endforeach
	</ul>
	
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <i class="fa fa-smile-o" aria-hidden="true"></i><strong> Uhuuu!</strong> {{ Session::get('success') }}</div>
@endif


<table class="table table-bordered table-striped">
	
	<thead>
		<tr>
			<th>Nome</th>
			<th>Acaba em</th>
			<th>Ações</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($cursos as $c)
		<tr>
			
			<td>{{$c->nome}}</td>
			<td>{{$c->deadline}}</td>
			<td width="1%" nowrap="">
				<a class="btn btn-success" href="{{ route('curso.edit', $c->id) }}">Editar</a>
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$c->id}}">
				Excluir
				</button>
				<div class="modal fade" id="myModal{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
									'route' => ['curso.destroy', $c->id],
									'class' => 'link'
									])
								!!}
								<strong>Nome:</strong><span> {{$c->nome}}</span>
								
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
								<button type="submit" class="btn btn-danger">Eu realmente quero excluir</button>
								{{ Form::close() }}
							</div>
						</div>
					</div>
				</div>
			</td>
			
		</tr>
		@endforeach
	</tbody>
</table>
@stop