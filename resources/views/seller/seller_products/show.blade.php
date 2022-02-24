<!----------- Import template --------------------->
@extends('templateDatos')


<!----------- Settings template --------------------->
@section('titulo','Producto')
@section('imagenDatos','')
@section('header','Datos de Productos')
@section('css')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

<!----------- Tabla --------------------->

@section('main')
	

		<div class="mi-perfil-div">
		<section class="main-content">
			<main>
			
				<div class="container-mi-perfil-img">
				<img src="{{$file->url}}">
				<form action="{{route('product.update_file', $product)}}" class="" id="" method="POST">
					@csrf
					<input type="file" name="file" id="">
					<input type="submit" value="subir">
				</form>
				</div>
			
				<section class=" dashboard-cards-single tittle-main-space">
					<div class="tittle-main animate fadeInDown one ">
						<div class="container-mi-perfil">
							<p>Detalles Personales</p>
							<form action="" method="post">
								@csrf
								@method('put')
								
							<ul>
								<small>Nombre del Producto</small>
								<li><input name="name" type="text" value="{{$product->name}}"></li>
							</ul>
							<ul>
								<small>Cantidad Existentes</small>
								<li><input name="amount" type="text" value="{{$product->amount}}"></li>
							</ul>
							<ul>
								<small>Valor del Producto</small>
								<li><input name="value" type="text" value="{{$product->value}}"></li>
							</ul>
							<ul>
								<small>Descripcion del Producto</small>
								<li><input name="description" type="text" value="{{$product->description}}"></li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
							<form action="{{route('products.destroy', $product)}}" method="post">
								@csrf
								@method('delete')
								<button type="submit"class="mi-perfil-guardar-cambios">Eliminar Usuario</button>
							</form>
						</div>
					</div>
				</section>

			
				
					
			</main>
		</section>
	</div>
	@endsection