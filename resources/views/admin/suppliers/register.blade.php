@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la registro de usuarios</h1>
    <a href="{{route('user.index')}}">lista de usuario</a>
    {!! FORM::open(['route' => 'users.register', 'autocomplete' => 'off']) !!}
        {!! FORM::label('name', 'Primer Nombre')}
@endsection