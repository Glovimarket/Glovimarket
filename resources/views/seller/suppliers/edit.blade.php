@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la Edicion de usuarios</h1>
    <a href="{{route('user.index')}}">lista de usuario</a>
    <form action="{{route('user.update', $id)}}" method="post">

        @csrf

      <label for="">Primer Nombre</label>
      <input type="text" name="first_name" placeholder="Ingresa tu primer nombre" value="{{$id->first_name}}"><br><br>
      <label for="">Segundo Nombre</label>
      <input type="text" name="second_name" placeholder="Ingresa tu segundo nombre" value="{{$id->second_name}}"><br><br>
      <label for="">Primer Apellido</label>
      <input type="text" name="last_name" placeholder="Ingresa tu primer apellido" value="{{$id->last_name}}"><br><br>
      <label for="">Segundo Apellido</label>
      <input type="text" name="second_surname" placeholder="Ingresa tu segundo apellido" value="{{$id->second_surname}}"><br><br>
      <label for="">Telefono</label>
      <input type="number" name="telephone" placeholder="Ingresa tu numero telefonico" value="{{$id->telephone}}"><br><br>
      <label for="">Direccion</label>
      <input type="text" name="direction" placeholder="Ingresa tu direccion domiciliaria" value="{{$id->direction}}"><br><br>
      <label for="">Email</label>
      <input type="email" name="email" placeholder="Ingresa tu correo electronico" value="{{$id->email}}"><br><br>
      <input type="submit" value="Guardar Cambios"><br><br>
    </form>
@endsection