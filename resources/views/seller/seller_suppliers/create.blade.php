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
							<ul>
								<small>Nombre de la Empresa</small>
								<li><input type="text"></li>
							</ul>
							<ul>
								<small>Nombre del encargado</small>
								<li><input type="text"></li>
							</ul>
							<ul>
								<small>Telefono de contacto</small>
								<li><input type="text"></li>
							</ul>
							<ul>
								<small>Email de contacto</small>
								<li><input type="text"></li>
							</ul>
						</div>
					</div>
				</section>

			
				<div class="container-mi-perfil-img">
				<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
			</div>
					
			</main>
		</section>
	</div>
	@endsection