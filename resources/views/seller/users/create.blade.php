@extends('templateDatos')

@section('titulo', 'Creacion de usuarios')

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
							<form action="{{route('admin.users.store')}}" method="post">
								@csrf
								
							<ul>
								<small>Primer Nombre</small>
								<li><input name="first_name" type="text" ></li>
							</ul>
							<ul>
								<small>Segundo Nombre</small>
								<li><input name="second_name" type="text" ></li>
							</ul>
							<ul>
								<small>Primer Apellido</small>
								<li><input name="last_name" type="text" ></li>
							</ul>
							<ul>
								<small>Segundo Apellido</small>
								<li><input name="second_surname" type="text" ></li>
							</ul>
							<ul>
								<small>Telefono de Contacto</small>
								<li><input name="telephone" type="number" ></li>
							</ul>
							<ul>
								<small>Direccion</small>
								<li><input name="direction" type="text" ></li>
							</ul>
							<ul>
								<small>Correo de Contacto</small>
								<li><input name="email" type="email" ></li>
							</ul>
							<ul>
								<small>Crea una contraseña</small>
								<li><input name="password" type="password" ></li>
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