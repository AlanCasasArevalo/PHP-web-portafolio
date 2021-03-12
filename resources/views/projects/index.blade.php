@extends('layout')
@section('title', 'PORTFOLIO')
@section('content')
    <h1>PORTFOLIO</h1>
    @auth
        <a href="{{ route('projects.create') }}"> Crear nuevo proyecto </a>
    @endauth
    <ul>
        @forelse($projects as $item)
            <li>
                <a href="{{route('projects.show', $item)}}">
                    {{$item->title}}
                </a>
            </li>
        @empty
            <li>No hay projectos a mostrar</li>
        @endforelse
        {{--   Para realizar paginacion desde la parte web     --}}
        {{$projects->links()}}
    </ul>
@endsection
