@extends('templateDatos')

@section('titulo', 'Creacion de Categorias')

@section('main')
	

		<div class="mi-perfil-div">
		<section class="main-content">
			<main>
			
				<div class="container-mi-perfil-img">
				<img src="" alt="" srcset="">
				<button>Subir imagen</button>
				</div>
			
				<section class=" dashboard-cards-single tittle-main-space">
					<div class="tittle-main animate fadeInDown one ">
						<div class="container-mi-perfil">
							<p>Detalles Personales</p>
							<form action="{{route('admin.categories.store')}}" method="post">
								@csrf
								
							<ul>
								<small>Nombre de la Categoria</small>
								<li><input name="name" type="text" ></li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
						</div>
					</div>
				</section>

			
				
					
			</main>
		</section>
	</div>
	@endsection