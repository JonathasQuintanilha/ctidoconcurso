@extends('layouts.app')
@section('title')
    Criar Matéria
@stop

@section('content')
{!! Form::open(['route' => ['materia.store', null], 'method' => 'post' ]) !!}
	@include('partials.materia.create')
{!! Form::close() !!}
@stop