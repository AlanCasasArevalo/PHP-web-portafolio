@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('content')
    <h1>{{$project->title}}</h1>
    <a href="{{route('projects.edit', $project)}}">Editar el proyecto</a>
    <form method="POST" action="{{route('projects.destroy', $project)}}">
        @csrf @method('DELETE')
    <button>Eliminar</button>
    </form>
    <p>{{$project->description}}</p>
@endsection
