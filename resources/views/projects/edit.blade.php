@extends('layout')
@section('title', 'Editar')
@section('content')
    <h1>Editar un nuevo proyecto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{route('projects.update', $project)}}">
        @method('PATCH')
        @include('projects._form',['buttonText' => 'Actualizar'])
    </form>
@endsection
