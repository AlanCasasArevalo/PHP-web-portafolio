@extends('layout')
@section('title', 'CONTACT')
@section('content')
    <h1> {{__('Contact')}} </h1>
    <form method="POST" action="{{route('message.store')}}">
        @csrf
{{--        <input type="text" placeholder="Nombre..." name="name" value="{{old('name')}}"><br>--}}
        <input type="text" placeholder="Nombre..." name="name" value="Alan"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

{{--        <input type="email" placeholder="email@email.com" name="email" value="{{old('email')}}"><br>--}}
        <input type="email" placeholder="email@email.com" name="email" value="alancasasarevalo@gmail.com"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

{{--        <input type="text" placeholder="Asunto..." name="subject" value="{{old('subject')}}"><br>--}}
        <input type="text" placeholder="Asunto..." name="subject" value="Presupuesto"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

{{--        <textarea name="content" placeholder="Pon aqui tu mensaje......" id="" cols="30" rows="10" value="{{old('content')}}">Necestio un presupuesto para poder tener lo que sea </textarea><br>--}}
        <textarea name="content" placeholder="Pon aqui tu mensaje......" id="" cols="30" rows="10" value="{{old('content')}}">Necestio un presupuesto para poder tener lo que sea </textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>@lang('Send')</button>
    </form>
@endsection
