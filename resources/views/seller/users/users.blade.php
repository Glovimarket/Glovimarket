@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la lista de usuarios</h1>
    <a href="{{route('user.create')}}">Crear nuevo usuario</a>
    <ul>
      @foreach ($users as $user)
          <li>
            <a href="{{route('user.show', $user->id)}}">
            {{$user->first_name}}
            </a>
          </li>
      @endforeach
    </ul>
@endsection