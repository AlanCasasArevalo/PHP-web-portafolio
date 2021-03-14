@extends('layout')
@section('title', 'HOME')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo de aplicaciones web/mobile</h1>
                <p class="lead text-secondary">Et enim quos harum non. Illo eaque magnam. Recusandae omnis dicta possimus aperiam. Ratione veniam excepturi nemo distinctio quos.</p>
                <a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" src="/img/code_typing.svg" alt="Desarrollo">
            </div>
        </div>
    </div>
@endsection
