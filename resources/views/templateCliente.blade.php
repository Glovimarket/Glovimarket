<!DOCTYPE html>
<html lang="en">
<!----------- Header--------------------->
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
  @yield('header')
	<title>@yield('titulo')</title>
</head>
<body>
<!----------- Navbar--------------------->
<header>
    <div class="menu-lateral">
      <a href="#" class="icono-menuL">
        <ion-icon name="menu"></ion-icon>
      </a>
    </div>

    <a href="index" class="logoH">Glovimarket</a>
    <nav class="navbar">
      <a href="">Inicio</a>
      <a href="">Productos</a>
      <a href="">Destacados</a>

    </nav>
    <div class="iconosH">

      <div class="search">
        <input type="text" placeholder="Escribe para buscar!" class="bar-search">
        <a href="/productos" class="bar-button ">
          <ion-icon name="search-outline"></ion-icon>
        </a>
 
      </div>
      <div class="carrito">
      <a href="{{route('login')}}">
        <ion-icon name="person-outline"></ion-icon>
      </a>

         <div class="contenidoC hide ">
           <div class="sidebar-nav-link" style="background:#F25270;
           padding:1rem;
           display:flex;
           flex-wrap:no-wrap
           justify-content: space-around;
           border-radius:13px;
           color:white;
        ">

           <div>
         <a class="bar-button ">
          <ion-icon name="person-outline"></ion-icon>
        </a>
        </div>
     
          {{--

      
        <!-- if(Auth::check()){
          <h1>SOMEE</h1>

     

            <h2 style="color:white">Hola {{ Auth::user()->name }}!</p>
          }
        } -->
           
    
            <!-- @if(auth()->user()->is_admin == 1){
            "Administrador"
      
            @endif -->
        <!-- } -->
        --}}
              <div>
        <a class="bar-button ">
          <ion-icon name="log-outline"></ion-icon>
        </a>
        </div>
         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      
                                    </div> 
        </div> 
        </div>
      

      <a href="/favoritos">
        <ion-icon name="heart-outline"></ion-icon>
      </a>
  
      <div class="carrito">
        <div>
        <a href="">
          <ion-icon name="cart-outline"></ion-icon>
        </a>
        <a id='quantitycart' href="">
        {{ Cart::getTotalQuantity()}}
        </a>  
        </div>
      
     
      </div>
    </div>
</header>
<!----------- inicio main content --------------------->
	
@yield('main')

<!----------- Footer--------------------->
<footer class="footer">
        <div class="contenedor">
          <div class="Nosotros caja">
            <h2>Glovimarket</h2> 
            <ul>
            <li><a href="https://github.com/Glovimarket">Quienes somos?</a></li>
           
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
            <a href="https://github.com/Glovimarket"> <span>GitHub</span></a>
             </li>
             </ul>
          </div>
          <div class="usuario caja">
            <h2>Mi perfil</h2>
            <ul>
            <li> <a href="{{ route('login') }}">Mi cuenta</a></li>
             <li>  <a href="/">Carrito</a></li>
             </ul>
          </div>
        </div>
      </footer>


		<script src="/js/script.js"></script>
    	
@yield('script')
		</body>

</html>