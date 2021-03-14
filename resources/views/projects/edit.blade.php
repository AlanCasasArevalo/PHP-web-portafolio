@extends('layout')
@section('title', 'Editar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials.validation-errors')
                <form method="POST" action="{{route('projects.update', $project)}}">
                    @method('PATCH')
                <h1 class="display-4">Editar proyecto</h1>
                    <br>
                    @include('projects._form',['buttonText' => 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection
