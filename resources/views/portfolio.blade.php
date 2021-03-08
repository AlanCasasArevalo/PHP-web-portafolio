@extends('layout')
@section('title', 'PORTFOLIO')
@section('content')
    <h1>PORTFOLIO</h1>
    <ul>
        @forelse($projects as $item)
            {{--  Formato de fecha usado por carbon
            Solo año
            <li>{{$item->title}} <br> <small>{{$item->description}}</small> <br> {{$item->created_at-> format('Y')}} </li>
            Solo mes
            <li>{{$item->title}} <br> <small>{{$item->description}}</small> <br> {{$item->created_at-> format('m')}} </li>
            Fomato personal
            <li>{{$item->title}} <br> <small>{{$item->description}}</small> <br> {{$item->created_at-> format('d-m-Y')}} </li>
            Con horario para humanos
            <li>{{$item->title}} <br> <small>{{$item->description}}</small> <br> {{$item->created_at->diffForHumans()}} </li>
            --}}
            <li>{{$item->title}} </li>
        @empty
            <li>No hay projectos a mostrar</li>
        @endforelse
        {{--   Para realizar paginacion desde la parte web     --}}
        {{$projects->links()}}
    </ul>
@endsection
