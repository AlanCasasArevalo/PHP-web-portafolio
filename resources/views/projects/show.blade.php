@extends('layout')
@section('title', 'Portafolio | ' . $project->title)
@section('content')
    <h1>{{$project->title}}</h1>
    <a href="{{route('projects.edit', $project)}}">Editar el proyecto</a>
    <p>{{$project->description}}</p>
@endsection
