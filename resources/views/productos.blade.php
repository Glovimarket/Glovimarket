<!----------- import template --------------------->
@extends('cliente/templateCL')
<!----------- set settings template --------------------->
@section('titulo','Busqueda productos')

<!----------- inicio main content --------------------->


  <section id="cards">


	<div class="busqueda-principal-indicador">
		<div>

			<h1 class="busqueda-principal-t">Busqueda para "Marcos"</h1>
		</div>
	<div>
		<p>
			<a href="/index">Inicio ></a>
			Busqueda para "Marco"
		</p>
	</div>
</div>
	<section class="busqueda-principal">

		<section class="barra-filtros">
	<h2>Filtros</h2>
	<br>
	<div class="barra-filtros-container">
		<h3>Precio</h3>
		<form>
			<label for="range1">Minimo</label>
			<input id="range1" name="range1" type="range" min="0" max="10" value="1">
			<label for="range1">Maximo</label>
			<input id="range1" name="range1" type="range" min="0" max="10" value="5">
		</form>
		

	</div>
	<div class="box">
		<h3>Genero</h3>
		<from name="Tipo" id="select-menu">
			<input type="checkbox" >MASCULINO</input>
			<br>
			<input type="checkbox" >FEMENINO</input>
		
		
		</from>
		</div>


		
<br>
	<div class="box">
		<h3>Categorias</h3>
		<select name="Tipo" id="select-menu">
			<option value="0">Selecciona</option>
			<option value="1">GAFAS DE SOL</option>
			<option value="2">GAFAS FEMENINAS</option>
			<option value="3">MARCOS UNISEX</option>
			<option value="3">ESTUCHES</option>
		</select>
	</div>
</section>

	<main class="gridH">  


  
	  <article class="card">
		 <div class="card_img">
		  <a href="BOTTLE MOMA"> <img src="/img/product/Front/0dce948c039d816eb55501ea0b481ff42e0f5340.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
			<!-- <a href="#" class="card_icon"><ion-icon name="heart"></ion-icon></a> -->
		 
				 <a href="#" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>





	  <article class="card">
		 <div class="card_img">
		  <a href=""> <img src="/img/product/Front/02f8e23cb990a7106161f2e014e42b058098b795.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
				 <a href="" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>

	  

  


	  <article class="card">
		 <div class="card_img">
		  <a href=""> <img src="/img/product/Front/3f355c73cfa326463f9868bca2321c93ab927d0f.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
				 <a href="" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>





	 

	  <article class="card">
		 <div class="card_img">
		  <a href=""> <img src="/img/product/Front/868635b6c1fb500f004530ee5c200e4d608fa3a1.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
				 <a href="" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>

	  
	  <article class="card">
		 <div class="card_img">
		  <a href=""> <img src="/img/product/Front/9c94134fca628b5c19a342bc7cb58beb4fd3b0a0.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
				 <a href="" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>
	  
	  
	  
	  <article class="card">
		 <div class="card_img">
		  <a href=""> <img src="/img/product/Front/a3d9d976830bd65ff461fb766502e28b0a140838.png" alt="" ></a>
		 </div>
		 <div class="card_name">
			<p>Glovimarket</p>
		 </div>
		 <div class="card_precio">
				 <a href="" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
			<div>
			  <span class="card_precioB">$999.999</span>
			  <span class="card_precioA">$750.000</span>
			</div>
			<a href="" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
		 </div>
	  </article>

	

	  </section>

	</section>

