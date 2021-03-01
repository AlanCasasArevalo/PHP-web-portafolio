@extends('layout')
@section('title', 'PORTFOLIO')
@section('content')
    <h1>PORTFOLIO</h1>
    <ul>
        @forelse($portfolio as $item)
            <li>{{$item['title']}}</li>
        @empty
            <li>No hay projectos a mostrar</li>
        @endforelse

    </ul>
@endsection
