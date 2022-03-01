
<!----------- import template --------------------->
@extends('template')
<!----------- set settings template --------------------->
@section('titulo','Bottle moma ')

<!----------- inicio main content --------------------->
	



  <div class="contenidoPro">
    <div class="div1"> 
      <img src="/img/product/VERD.jpeg" class="imagenP">
    </div>
    <div class="div2">
      <h1 class="tituloP">@yield('titulo')</h1>
      <ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star"></ion-icon><ion-icon name="star-half"></ion-icon>
        <p>Lentes de TR18 con el sello de Eastman🇺🇸, uno de los líderes mundiales en tecnología de copoliéster. Respetuoso con el medio ambiente y proporciona un equilibrio único entre claridad y resistencia
</p>
<p>Gafas de sol fabricadas en TR90 con el sello de EMS🇨🇭, considerado el mejor Nylon para monturas del mundo que proporciona más flexibilidad y resistencia</p>
        

        <span class="card_precioBP">$999.999</span>
        <span class="card_precioAP">$750.000</span>
        <div class="col-md-3 product_data " >

        <label for="Quantity">Cantidad</label>
        <div class="input-group text-center mb-3" style="widh:130px;">    
              <button class="input-group-text decrement-btn" onclick="decrement();">-</button>
              <input id=demoInput type=number value="1" min="1" name="quantity " class="form-control  qty-input text-center">
              <button class="input-group-text increment-btn" onclick="increment();">+</button>
        </div>
        </div>
      </h1>
    </div>
    <div class="div3">
      <a href="#" class="botonP">Agregar al carrito</a>
      <div class="botonPP">
       <a href="#">Favoritos</a>
       <div class="heartp">
      <a href=""class="heartp">
          <ion-icon name="heart-outline"></ion-icon>
        </a>
        </div>
        </div>
    </div>
  </div>

 

  </div>

<!-- Cards -->

    <h1 class="tituloPP">Productos Similares</h1>
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
         <a href=""> <img src="/img/product/Front/2a64c61506dd2e7ea75ede0c51d4edd5b8a37b33.png" alt="" ></a>
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
</main>


<script>
   function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }
</script>



