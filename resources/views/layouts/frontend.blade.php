<!DOCTYPE html>
<html lang="en">
   <head>
      	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"rel="stylesheet"/>
	<link rel="stylesheet" href="/style/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Add to cart</title>
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body>
   <header>
    <div class="menu-lateral">
      <a href="#" class="icono-menuL">
        <ion-icon name="menu"></ion-icon>
      </a>
    </div>

    <a href="index" class="logoH">Glovimarket</a>
    <nav class="navbar">
      <a href="/">Inicio</a>
      <a href="/">Productos</a>
      <a href="/">Destacados</a>
    </nav>
    <div class="iconosH">
      <div class="search">
        <input type="text" placeholder="Escribe para buscar!" class="bar-search">
        <a href="/productos" class="bar-button ">
          <ion-icon name="search-outline"></ion-icon>
        </a>
      </div>
      <a href="Login">
        <ion-icon name="person-outline"></ion-icon>
      </a>
 

      <a href="Favoritos">
        <ion-icon name="heart-outline"></ion-icon>
      </a>
    
      <div class="carrito">
       
        <a href="">
          <ion-icon name="cart-outline"></ion-icon>
        </a>
        <p style="color:black">{{ Cart::getTotalQuantity()}}</p>
      </div>
    </div>
</header>
         <main class="my-8">
            @yield('content')
         </main>
      </div>
      <!----------- Footer--------------------->
<footer class="footer">
        <div class="contenedor">
          <div class="Nosotros caja">
            <h2>Glovimarket</h2> 
            <ul>
            <li><a href="Quienes-somos">Quienes somos?</a></li>
           
            <li><a href="FAQ">FAQ</a></li>
            
            </ul>
          </div>
          <div class="redes caja">
            <h2>Siguenos!</h2>
            <ul>
              <li>
              <div class="iconoF">
              <a href="" ><ion-icon name="logo-facebook"></ion-icon></a>
             </div>
             <a href="">
              <span>Facebook</span>
              </a>
              </li>
              <div class="iconoF">
            <li>  <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            <a href="">
              <span>Instagram</span>
              </a>
            </li>
             <li> <a href=""><ion-icon name="logo-github"></ion-icon></a>
            <a href=""> <span>GitHub</span></a>
             </li>
             </ul>
          </div>
          <div class="usuario caja">
            <h2>Mi perfil</h2>
            <ul>
            <li> <a href="/mi-perfilCL">Mi cuenta</a></li>
             <li>  <a href="/carrito">Carrito</a></li>
             </ul>
          </div>
        </div>
      </footer>


		<script src="/js/script.js"></script>
		</body>

</html>
   </body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
   <head>
      	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"rel="stylesheet"/>
	<link rel="stylesheet" href="/style/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Add to cart</title>
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   </head>
   <body>
      <div  class="bg-white ">
         <div>
            <div class="container px-6 py-3 mx-auto">
               <div class="flex items-center justify-between">
                  <div class="flex items-center justify-end w-full">
                     <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                     </button>
                  </div>
               </div>
               <nav  class="p-6 mt-4 text-white bg-pink-300 sm:flex sm:justify-center sm:items-center">
               <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                    <span class="font-semibold text-xl tracking-tight">Laravel 8 Shopping Cart</span>
                </div>
                  <div class="flex flex-col sm:flex-row">
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/">Home</a>
                     <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('products.list')}}">Shop</a>
                     <a href="{{ route('cart.list') }}" class="flex items-center">
                        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                           <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        {{ Cart::getTotalQuantity()}}
                     </a>
                  </div>
               </nav>
            </div>
         </header>
         <main class="my-8">
            @yield('content')
         </main>
      </div>
   </body>
</html> -->