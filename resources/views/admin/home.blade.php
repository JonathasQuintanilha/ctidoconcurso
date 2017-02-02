@extends('layouts.app')
@section('title')
    Inicial
@stop
@section('content')

            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('curso.create') }}">Adicionar curso</a></li>
                <li class="list-group-item"><a href="{{ route('materia.create') }}">Adicionar matéria</a></li>
                <li class="list-group-item"><a href="{{ route('aula.create') }}">Adicionar aulas</a></li>
                <li class="list-group-item"><a href="{{ route('material.create') }}">Adicionar materiais</a></li>
            </ul>
                
@endsection
