@extends('layout')
@section('title', 'CONTACT')
@section('content')
    <h1>CONTACT</h1>
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input type="text" placeholder="Nombre..." name="name" value="baboon"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}

        <input type="email" placeholder="email@email.com" name="email" value="alan@gmail.com"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}

        <input type="text" placeholder="Asunto..." name="subject" value="The Doors of Perception"><br>
        <textarea name="content" placeholder="Pon aqui tu mensaje......" id="" cols="30" rows="10">Modi veritatis autem qui ullam qui quia et. Sunt exercitationem delectus. Dignissimos et non reprehenderit.</textarea><br>
        <button>Enviar</button>
    </form>
@endsection
