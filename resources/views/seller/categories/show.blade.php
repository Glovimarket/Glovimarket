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
			
				<section class=" dashboard-cards-single tittle-main-space">
					<div class="tittle-main animate fadeInDown one ">
						<div class="container-mi-perfil">
							<p>Detalles Personales</p>
							<form action="{{route('admin.categories.update', $category)}}" method="post">
								@csrf
								@method('put')

								
							<ul>
								<small>Nombre de la Categorias</small>
								<li><input name="name" type="text" value="{{$category->name}}"></li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
							<form action="{{route('admin.categories.destroy', $category)}}" method="post">
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