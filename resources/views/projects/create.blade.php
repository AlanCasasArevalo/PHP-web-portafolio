@extends('layout')
@section('title', 'Crear')
@section('content')
    <h1>Crear un nuevo proyecto</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('projects.store')}}">
{{-- Esta directicva es necesaria para poder decirle a Laravel que la fuente es confiable  --}}
        @csrf
        <label for="">
            Titulo del proyecto<br>
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        <br>
        <label for="">
            URL del proyecto<br>
            <input type="text" name="url" value="{{ old('url') }}">
        </label>
        <br>
        <label for="">
            Description del proyecto<br>
            <textarea name="description">{{old('description')}}</textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection
