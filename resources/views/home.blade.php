@extends('layout')
@section('title', 'HOME')
@section('content')
    <h1>HOME</h1>
{{--    Esta directiva sirve para que solo se muestren usuario que estan logados --}}
    @auth
    {{ auth()->user() }}
    @endauth
@endsection
