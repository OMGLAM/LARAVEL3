@extends('layouts.app')

@section('content')
    <h1>Liste des tâches</h1>
    <a href="{{ url('/tasks/create') }}">Ajouter une tâche</a>
    <ul>
        @foreach($tasks as $task)
            <li><a href="{{ url('/tasks/' . $task->id) }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>
@endsection
