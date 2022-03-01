@extends('template')

@section('title', 'Ingresos')

@section('content')
    <h1>Bienvenido a la creacion de Productos</h1>
    <a href="{{route('admin.incomes.index')}}">lista de productos</a>
    <form action="{{route('admin.incomes.store')}}" method="post">

      @csrf
      <label for="">Id del Proveedor</label>
      <input type="text" name="users_id" placeholder="Ingresa el nombre del proveedor" id=""><br><br>
      <label for="">Id del Producto</label>
      <input type="text" name="products_id" placeholder="Ingresa el id del producto" id=""><br><br>
      <label for="">Cantidad del Producto</label>
      <input type="text" name="amount_products" placeholder="Ingresa la cantidad del producto" id=""><br><br>
      <label for="">Valor del Ingreso</label>
      <input type="text" name="value" placeholder="Ingresa el costo del ingreso" id=""><br><br>
      <label for="">Fecha del Ingreso</label>
      <input type="text" name="date" placeholder="Ingresa la fecha del ingreso" id=""><br><br>
      <input type="submit" value="Registrar" id=""><br><br>
    </form>
@endsection