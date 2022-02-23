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
							<form action="{{route('exits.update', $exit)}}" method="post">
								@csrf
								@method('put')

								
							<ul>
								<small>Nombre del Cliente</small>
								<li><input name="users_id" type="text" value="{{$exit->users_id}}"></li>
							</ul>
							<ul>
								<small>Producto Comprado</small>
								<li><input name="products_id" type="text" value="{{$exit->products_id}}"></li>
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
							<form action="{{route('exits.destroy', $exit)}}" method="post">
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