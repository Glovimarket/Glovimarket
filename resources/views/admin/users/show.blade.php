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
							<form action="{{route('admin.users.update', $user)}}" method="post">
								@csrf
								@method('put')

								
							<ul>
								<small>Nombre</small>
								<li><input name="first_name" type="text" value="{{$user->name}}"></li>
							</ul>
							<ul >
								<small>Id</small>
								<li><input name="id" type="text" value="{{$user->id}}"></li>
							</ul>
							<ul >
								<small>Rol</small>
							
								<li>
									<input name="is_admin" type="text" value="@if(auth()->user()->is_admin == 1)Administrador @endif">
									</li>
							</ul>
							<!-- <ul>
								<small>Segundo nombre</small>
								<li><input name="second_name" type="text" value="{{$user->second_name}}"></li>
							</ul>
							<ul>
								<small>Primer Apellido</small>
								<li><input name="last_name" type="text" value="{{$user->last_name}}"></li>
							</ul>
							<ul>
								<small>Segundo Apellido</small>
								<li><input name="second_surname" type="text" value="{{$user->second_surname}}"></li>
							</ul>
							<ul>
								<small>Telefono </small>
								<li><input name="telephone" type="tel" value="{{$user->telephone}}"></li>
							</ul>
							<ul>
								<small>Direccion</small>
								<li><input name="direction" type="tel" value="{{$user->direction}}"></li>
							</ul> -->
						
							<ul >
								<small>password</small>
								<li><input name="password" type="password" value="{{$user->password}}"></li>
							</ul>

							<ul>
								<small>Email</small>
								<li><input name="email" type="email" value="{{$user->email}}"></li>
							</ul>
							<div class="container-mi-perfil-img">
								<button type="submit"class="mi-perfil-guardar-cambios">Guardar cambios</button>
							</div>
							</form>
							<form action="{{route('admin.users.destroy', $user)}}" method="post">
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