@extends('layouts.app')
@section('title')
    Criar curso
@stop

@section('content')
{!! Form::open(['route' => ['curso.store', null], 'method' => 'post' ]) !!}
	@include('partials.curso.create')
{!! Form::close() !!}
@stop