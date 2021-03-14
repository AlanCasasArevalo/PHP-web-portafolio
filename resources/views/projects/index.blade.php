@extends('layout')
@section('title', 'Project')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">@lang('Projects')</h1>
            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}"> Crear nuevo proyecto </a>
            @endauth
        </div>
        <p class="lead text-secondary">
            Perspiciatis at consequatur quos ut est. Sequi est rerum vel soluta. Corrupti esse non id animi minima
            ullam. Dicta animi omnis molestiae.
        </p>
        <ul class="list-group">
            @forelse($projects as $item)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a
                        class="d-flex justify-content-between text-secondary align-items-center"
                        href="{{route('projects.show', $item)}}">
                        <span class="font-weight-bold">{{$item->title}}</span>
                        <span class="text-black-50">{{$item->created_at->format('d/m/Y')}}</span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay projectos a mostrar</li>
            @endforelse
            {{--   Para realizar paginacion desde la parte web     --}}
            {{$projects->links()}}
        </ul>
    </div>

@endsection
