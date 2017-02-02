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

{!! Form::model( $curso, [ 'route' => ['curso.update', $curso->id] ], ['class' => 'form-inline'] ) !!}
<input type="hidden" name="_method" value="PUT"> 
	@include('partials.curso.edit')
{!! Form::close() !!}

@stop

