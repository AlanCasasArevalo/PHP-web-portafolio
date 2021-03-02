@extends('layout')
@section('title', 'CONTACT')
@section('content')
    <h1>CONTACT</h1>
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input type="text" placeholder="Nombre..." name="name" value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="email" placeholder="email@email.com" name="email" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="text" placeholder="Asunto..." name="subject" value="{{old('subject')}}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}

        <textarea name="content" placeholder="Pon aqui tu mensaje......" id="" cols="30" rows="10" value="{{old('content')}}"></textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}

        <button>Enviar</button>
    </form>
@endsection
