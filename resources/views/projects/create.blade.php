@extends('layout')
@section('title', 'Crear')
@section('content')
    <h1>Crear un nuevo proyecto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{route('projects.store')}}">
        @include('projects._form',['buttonText' => 'Guardar'])
    </form>
@endsection
