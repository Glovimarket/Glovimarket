@extends('layouts.plantilla')

@section('title', 'Users')

@section('content')
    <h1>Bienvenido a la creacion de Productos</h1>
    <a href="{{route('products.index')}}">lista de productos</a>
    <form action="{{route('products.store')}}" method="post">

      @csrf
      <label for="">Nombre del Producto</label>
      <input type="text" name="name" placeholder="Ingresa el nombre del producto" id=""><br><br>
      <label for="">Cantidades Existentes</label>
      <input type="text" name="amount" placeholder="Ingresa la cantidad de existencias" id=""><br><br>
      <label for="">Valor del Producto</label>
      <input type="text" name="value" placeholder="Ingresa el valor (sin los ceros del mil, ej: 1=1.000)" id=""><br><br>
      <label for="">Descripcion del Producto</label>
      <input type="text" name="description" placeholder="Escribe una descripcion clara" id=""><br><br>
      <input type="submit" value="Registrar" id=""><br><br>
    </form>
@endsection