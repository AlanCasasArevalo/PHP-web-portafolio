@extends('layout')
@section('title', 'Editar')
@section('content')
    <h1>Editar un nuevo proyecto</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('projects.update', $project)}}">
        {{-- La directiva de @method('PATCH') Nos permite poder usar un metodo PATCH debido a que en html no permite realizar metodos patch put o delete de forma simple
         OJO  es necesario que si ya hay una directiva se ponga esta segunda directiva al lado
          --}}

        {{-- Esta directicva es necesaria para poder decirle a Laravel que la fuente es confiable  --}}
        @csrf @method('PATCH')
        <label for="">
            Titulo del proyecto<br>
            <input type="text" name="title" value="{{ old('title', $project->title)}}">
        </label>
        <br>
        <label for="">
            URL del proyecto<br>
            <input type="text" name="url" value="{{ old('url', $project->url) }}">
        </label>
        <br>
        <label for="">
            Description del proyecto<br>
            <textarea name="description">{{ old('description', $project->description) }}</textarea>
        </label>
        <br>
        <button>Actualizar</button>
    </form>
@endsection
