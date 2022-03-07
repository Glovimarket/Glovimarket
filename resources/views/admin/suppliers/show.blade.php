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
							<p>Informacion Detallada</p>
							<form action="{{route('admin.suppliers.update', $supplier)}}" method="post">
								@csrf
								@method('put')

								
							<ul>
								<small>Nombre de la Empresa</small>
								<li><input name="name" type="text" value="{{$supplier->name}}"></li>
							</ul>
							<ul>
								<small>Nombre de Contacto</small>
								<li><input name="name_supplier" type="text" value="{{$supplier->name_supplier}}"></li>
							</ul>
							<ul>
								<small>Telefono </small>
								<li><input name="telephone" type="tel" value="{{$supplier->telephone}}"></li>
							</ul>
							<ul>
								<small>Email</small>
								<li><input name="email" type="email" value="{{$supplier->email}}"></li>
							</ul>
							<ul>
								<small>Nombre del Producto</small>
								<li>
									<select name="products_id">
										@foreach ($products as $product)
										<option required value="{{$product->id}}">{{$product->name}}</option>
										@endforeach
									</select>
								  </li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
							<form action="{{route('admin.suppliers.destroy', $supplier)}}" method="post">
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