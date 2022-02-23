<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="/style/style.css" />
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">


	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">

	<link rel="manifest" href="/site.webmanifest">
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
	<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
	<script src="/js/MainSweetAlert.js"></script>
	<title>@yield('titulo')</title>
	<style>
		.active{
			background-color: white;
		}

		.active-text{
			color:#F25270;
		}
	</style>
</head>
  <body id="inicio">
    
   
     <header>
    <div class="menu-lateral">
      <a href="#" class="icono-menuL">
        <ion-icon name="menu"></ion-icon>
      </a>
    </div>

    <a href="index.html" class="logoH">Glovimarket</a>
    <nav class="navbar">
      <a href="">Inicio</a>
      <a href="">Productos</a>
      <a href="">Destacados</a>
    </nav>
    <div class="iconosH">
      <div class="search">
        <input type="text" placeholder="Escribe para buscar!" class="bar-search">
        <a href="#" class="bar-button ">
          <ion-icon name="search-outline"></ion-icon>
        </a>
      </div>
      <a href="{{route('register')}}">
        <ion-icon name="person-outline"></ion-icon>
      </a>
      <!-- <a href="" ><ion-icon name="person-circle-outline"></ion-icon></a> -->

      <a href="{{route('register')}}">
        <ion-icon name="heart-outline"></ion-icon>
      </a>
      <!-- <a href="" ><ion-icon name="heart-circle-outline"></ion-icon></a> -->
      <!-- <a href="" ><ion-icon name="cart-outline"></ion-icon></a> -->

      <!-- </div> -->
      <div class="carrito">
        <a href="">
          <ion-icon name="cart-outline"></ion-icon>
        </a>
        <div class="contenidoC hide">
          <table id="lista-carrito">
            
            <tbody>
              <tr>
                <td>
                  
           <img src="media/product/Front/0dce948c039d816eb55501ea0b481ff42e0f5340.png" alt="" >
                </td>
                <td>Gafas Bottle moma</td>
              </tr>
            </tbody>
          </table>
           <span>$755.000</span>
          <a href="Carrito-completo.html" class="btn-vaciar">Pagar</a>
        <img src="" alt="" srcset="">
      
               
        </div>
      </div>
    </div>
  </header>


<div class="homeH">
	
    <section class="parall">
		
      <div class="container-inicio">
	<div class="contenidoH">
				<h2>Salud para tus <span>ojos</span></h2>
				<p>la vida es fascinante ante la vision correcta, momentos mas claros, el mundo de forma diferente y tan solo hay que mirarla a traves de las gafas correctas.</p>
				<a href="{{route('register')}}"class="buttonH">Descubre mas!</a>    
			</div>     
		<div id="scene">
			
          <div class="capa">
            <img src="media/Home//linedown.png" />
          </div>
          <div class="capa" data-depth="0.7">
            <img src="media/Home/Red-top.png" />
          </div>

          <div class="capa Yellow" data-depth="0.2">
            <img src="media/Home/Yellow.png" />
          </div>
          <div class="capa" data-depth="0.4">
            <img src="media/Home/red-doow.png" />
          </div>
          <div class="capa">
            <img src="media/Home/Girl.png" />
          </div>
          <div class="capa" data-depth="0.9">
            <img src="media/Home/redmit.png" />
    		
			</div>   
			
		
        </div>
			
      </div>

    </section>
	</div>
	</section>

<section id="cards">

 
    <h1 class="tituloH">Productos Destacados</h1>
    <main class="gridH">  


   
    @foreach ($products as $product)
      <article class="card">
        <div class="card_img">
         <a href="{{route('products.show', $product->id)}}"> <img src="media/product/Front/a3d9d976830bd65ff461fb766502e28b0a140838.png" alt="" ></a>
        </div>
        <div class="card_name">
          <p>{{$product->name}}</p>
        </div>
        <div class="card_precio">
              <a href="{{route('register')}}" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
          <div>
            <span class="card_precioA">${{$product->value}}.000</span>
          </div>
          <a href="{{route('register')}}" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
        </div>
      </article>
													@endforeach

      </section>



    <!-- Footer -->
      <footer class="footer">
        <div class="contenedor">
          <div class="Nosotros caja">
            <h2>Glovimarket</h2> 
            <ul>
            <li><a href="Quienes-somos.html">Quienes somos?</a></li>
           
            <li><a href="FAQ.html">FAQ</a></li>
            
            </ul>
          </div>
          <div class="redes caja">
            <h2>Siguenos!</h2>
            <ul>
              <li><a href="" ><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="Home.html">Facebook</a></li>
                <li><a href="" ><ion-icon name="logo-instagram"></ion-icon></a>
                  <a href="Home.html">Instagram</a></li>
                  <li><a href="" ><ion-icon name="logo-github"></ion-icon></a>
                    <a href="Home.html">GitHub</a></li>
             </ul>
          </div>
          <div class="usuario caja">
            <h2>Mi perfil</h2>
            <ul>
           <li> <a href="">Mi cuenta</a></li>
             <li>  <a href="">Carrito</a></li>
             <li>  <a href="">Ayuda</a></li>
             </ul>
          </div>
        </div>
      </footer>

    </main>
     <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>

    <script src="scripts/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
      var scene = document.getElementById('scene')
      var parallaxInstance = new Parallax(scene)
    </script>
  </body>
</html>
