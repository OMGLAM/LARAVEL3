@extends('layouts.app')

@section('content')
    <h1>Ajouter une tâche</h1>
    <form action="{{ url('/tasks') }}" method="post">
        @csrf
        <label>Titre :</label>
        <input type="text" name="title" required>
        <label>Description :</label>
        <textarea name="description"></textarea>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
