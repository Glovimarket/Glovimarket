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
							<form action="{{route('admin.products.store')}}" method="post">
								@csrf
								
							<ul>
								<small>Nombre del Producto</small>
								<li><input name="name" type="text" ></li>
							</ul>
							<ul>
								<small>Cantidad Existentes</small>
								<li><input name="amount" type="text" ></li>
							</ul>
							<ul>
								<small>Valor del Producto</small>
								<li><input name="value" type="text" ></li>
							</ul>
              <ul>
								<small>Categoria del Producto</small>
								<li>
                  <select name="categories_id">
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </li>
							</ul>
							<ul>
								<small>Descripcion del Producto</small>
								<li><input name="description" type="text" ></li>
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