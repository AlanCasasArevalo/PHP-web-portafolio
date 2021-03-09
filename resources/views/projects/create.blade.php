@extends('layout')
@section('title', 'Crear')
@section('content')
    <h1>Crear un nuevo proyecto</h1>
    <form method="POST" action="{{route('projects.store')}}">
{{-- Esta directicva es necesaria para poder decirle a Laravel que la fuente es confiable  --}}
        @csrf
        <label for="">
            Titulo del proyecto<br>
            <input type="text" name="title">
        </label>
        <br>
        <label for="">
            URL del proyecto<br>
            <input type="text" name="url">
        </label>
        <br>
        <label for="">
            Description del proyecto<br>
            <textarea name="description"></textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection
