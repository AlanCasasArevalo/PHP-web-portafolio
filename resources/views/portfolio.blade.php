@extends('layout')
@section('title', 'PORTFOLIO')
@section('content')
    <h1>PORTFOLIO</h1>
    <ul>
        <!--        --><?php //foreach ($portfolio as $portfolioItem) {
        //                echo "<li>" . $portfolioItem['title'] . "</li>";
        //            } ?>
        {{--        <?php foreach ($portfolio as $portfolioItem): ?>--}}
        {{--                <li>{{$portfolioItem['title']}}</li>--}}
        {{--        <?php endforeach ?>--}}

{{--
        Comprueba que existe la variable $portfolio
        @isset($portfolio)

            Comprueba que la variable $portfolio tiene elementos
            @if($portfolio)
                Si tiene elementos los recorre agregandolos a la lista
                @foreach($portfolio as $item)
                    <li>{{$item['title']}}</li>
                @endforeach
            si la variable $portfolio no tiene elementos agregamos un elemento para dar feedback
            @else
                <li>No hay projectos a mostrar</li>
            @endif
        @endisset
   --}}
{{--        @isset($portfolio)--}}
{{--            @if($portfolio)--}}
{{--                @foreach($portfolio as $item)--}}
{{--                    <li>{{$item['title']}}</li>--}}
{{--                @endforeach--}}
{{--            @else--}}
{{--                <li>No hay projectos a mostrar</li>--}}
{{--            @endif--}}
{{--        @endisset--}}

        @forelse($portfolio as $item)
            <li>{{$item['title']}}</li>
        @empty
            <li>No hay projectos a mostrar</li>
        @endforelse

    </ul>
@endsection
