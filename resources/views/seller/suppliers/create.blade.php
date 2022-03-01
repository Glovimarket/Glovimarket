@extends('templateDatos')

@section('titulo', 'Creacion de Productos')

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
							<form action="{{route('admin.suppliers.store')}}" method="post">
								@csrf
								
							<ul>
								<small>Nombre de la Empresa</small>
								<li><input name="name" type="text" ></li>
							</ul>
							<ul>
								<small>Nombre de Contacto</small>
								<li><input name="name_supplier" type="text" ></li>
							</ul>
							<ul>
								<small>Telefono de Contacto</small>
								<li><input name="telephone" type="number" ></li>
							</ul>
							<ul>
								<small>Correo de Contacto</small>
								<li><input name="email" type="email" ></li>
							</ul>
              <ul>
								<small>Producto del proveedor</small>
								<li>
                  <select name="products_id">
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </li>
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