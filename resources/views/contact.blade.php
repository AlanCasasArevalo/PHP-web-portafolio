@extends('layout')
@section('title', 'CONTACT')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px4" method="POST" action="{{route('message.store')}}">
                    @csrf
                    <h1 class="display-4"> {{__('Contact')}} </h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input
                            class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                            id="name"
                            type="text"
                            placeholder="Nombre..."
                            name="name"
                            value="{{ old('name') }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                    <strong>
                    {{$message}}
                    </strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input
                            class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                            id="email"
                            type="email"
                            placeholder="email@email.com."
                            name="email"
                            value="{{ old('email') }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>
                    {{$message}}
                    </strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input
                            class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                            id="subject"
                            type="text"
                            placeholder="Asunto..."
                            name="subject"
                            value="{{ old('subject') }}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                    <strong>
                    {{$message}}
                    </strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content"></label>
                        <textarea
                            class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                            name="content"
                            placeholder="Pon aqui tu mensaje......"
                            id="content"
                            cols="30"
                            rows="10"
                            value="{{old('content')}}"></textarea>
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                    <strong>
                    {{$message}}
                    </strong>
                </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
                </form>
            </div>
        </div>
    </div>

@endsection
