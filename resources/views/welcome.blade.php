
@extends('templateCliente')

@section('main')
<style>
  .footer{
    position: relative;
  }
</style>
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
      <article class="card ">
        <div class="card_img">
         <a href="{{route('admin.products.show', $product->id)}}"> <img src="{{$product->url}}" alt="" ></a>
        </div>
       

    
        <div class="card_name">
          <p>{{$product->name}}</p>
        </div>
 
        <div class="card_precio">
              <a href="{{route('register')}}" class="card_icon"><ion-icon name="heart-outline"></ion-icon></a>
          <div>
            <span class="card_precioA">${{$product->price}}.000</span>
          </div>
          <a href="{{route('register')}}" class="card_icon"><ion-icon name="cart-outline"></ion-icon></a>
        </div>
        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->url }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <div> <button class="btn-vaciar" style="
                                      color: inherit;
                                      border: none;
                                      padding: .8rem;
                                      font: inherit;
                                      cursor: pointer;
                                      outline: inherit;" >
                                      <ion-icon name="cart-outline"></ion-icon>Añadir al carrito</button></div>
                        <!-- <button class="px-4 py-2 text-white bg-blue-800 rounded" >Add To Cart</button> -->
                    </form>
      </article>
													@endforeach

      </section>

@endsection
@section('script')
     <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="scripts/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
      var scene = document.getElementById('scene')
      var parallaxInstance = new Parallax(scene)
    </script>
    @endsection
  </body>
</html>
