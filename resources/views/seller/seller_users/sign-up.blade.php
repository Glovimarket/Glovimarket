@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la registro de usuarios</h1>
    <a href="{{route('user.index')}}">lista de usuario</a>
    <form action="" method="post">
        <input placeholder="Ingresa tu primer nombre" type="text"><br><br>
        <input placeholder="Ingresa tu segundo nombre" type="text"><br><br>
        <input placeholder="Ingresa tu primer apellido" type="text"><br><br>
        <input placeholder="Ingresa tu segundo apellido" type="text"><br><br>
        <input placeholder="Ingresa un numero de contacto" type="number"><br><br>
        <input placeholder="Ingresa tu direccion de domicilio" type="text"><br><br>
        <input placeholder="Ingresa un correo electronico" type="email"><br><br>
        <input placeholder="Crea una contraseña" type="password"><br><br>
        <input type="submit" value="Registrarse">
    </form>
@endsection