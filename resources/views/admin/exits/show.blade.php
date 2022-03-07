<!----------- Import template --------------------->
@extends('templateDatos')


<!----------- Settings template --------------------->
@section('titulo','Mi Perfil')
@section('imagenDatos','')


<!----------- Tabla --------------------->

@section('main')
	

		<div class="mi-perfil-div">
		<section class="main-content">
			<main>
			
				<div class="container-mi-perfil-img">
				<img src="/img/other/image-victor.jpg" alt="" srcset="">
				<button>Cambiar imagen</button>
				</div>
			
				<section class=" dashboard-cards-single tittle-main-space">
					<div class="tittle-main animate fadeInDown one ">
						<div class="container-mi-perfil">
							<p>Detalles Personales</p>
							<form action="{{route('admin.exits.update', $exit)}}" method="post">
								@csrf
								@method('put')

								
								<ul>
									<small>Nombre del Cliente</small>
									<li>
										<select name="users_id">
											@foreach ($users as $usuario)
											<option required value="{{$usuario->id}}">{{$usuario->name}}</option>
											@endforeach
										</select>
				  					</li>
								</ul>
								<ul>
									<small>Producto Comprado</small>
									<li>
										<select name="products_id">
											@foreach ($products as $product)
											<option required value="{{$product->id}}">{{$product->name}}</option>
											@endforeach
										</select>
				  					</li>
								</ul>
							<ul>
								<small>Cantidad del Producto</small>
								<li><input name="amount_products" type="text" value="{{$exit->amount_products}}"></li>
							</ul>
							<ul>
								<small>Valor del Producto</small>
								<li><input name="value" type="text" value="{{$exit->value}}"></li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
							<form action="{{route('admin.exits.destroy', $exit)}}" method="post">
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