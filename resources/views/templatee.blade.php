<!DOCTYPE html>
<html lang="en">
<!----------- Header--------------------->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"rel="stylesheet"/>
	<link rel="stylesheet" href="/styleClient/style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
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
        <div class="contenidoC hide">
          <table id="lista-carrito">
            
            <tbody>
              <tr>
                <td>
                  
           <img src="/img/product/Front/0dce948c039d816eb55501ea0b481ff42e0f5340.png" alt="" >
                </td>
                <td>Gafas Bottle moma</td>
              </tr>
            </tbody>
          </table>
           <span>$755.000</span>
          <a href="carrito" class="btn-vaciar">Pagar</a>
        <img src="/" alt="" srcset="">
      
               
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