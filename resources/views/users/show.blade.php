@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la pagina del usuario {{$user->first_name}}</h1>
    <a href="{{route('user.create')}}">Crear nuevo usuario</a>
    <a href="{{route('user.index')}}">lista de usuario</a>
    <table>
        <tr>
            <td>Tipo de dato</td>
            <td>Dato</td>
        </tr>
        <tr>
            <td><strong>Primer Nombre</strong></td>
            <td>{{$user->first_name}}</td>
        </tr>
        <tr>
            <td><strong>Segundo Nombre</strong></td>
            <td>{{$user->second_name}}</td>
        </tr>
        <tr>
            <td><strong>Primer Apellido</strong></td>
            <td>{{$user->last_name}}</td>
        </tr>
        <tr>
            <td><strong>Segundo Apellido</strong></td>
            <td>{{$user->second_surname}}</td>
        </tr>
        <tr>
            <td><strong>Telefono</strong></td>
            <td>{{$user->telephone}}</td>
        </tr>
        <tr>
            <td><strong>Direccion</strong></td>
            <td>{{$user->direction}}</td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <td><strong>Acciones</strong></td>
            <td><a href="{{route('user.edit', $user)}}">Editar Usuario</a></td>
        </tr>
    </table>
@endsection