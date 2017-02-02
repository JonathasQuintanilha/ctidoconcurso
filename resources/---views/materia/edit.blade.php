@extends('layouts.app')
@section('title')
    Editar o curso
@stop

@section('content')


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

    <div class="alert alert-success">{{ Session::get('success') }}</div>

@endif

{!! Form::model(
    $dadosmateria, 
    ['route' => ['materia.update', $dadosmateria->id]],
    ['class' => 'form-inline']) !!}
<input type="hidden" name="_method" value="PUT">
	@include('partials.materia.edit')
{!! Form::close() !!}
@stop