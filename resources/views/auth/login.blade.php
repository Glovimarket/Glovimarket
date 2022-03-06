<!DOCTYPE html>
<html lang="e">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
 
 <title>Iniciar Sesion</title>
</head>
	
<body id="Login">
    
     <style>
    form .campo label.valido {
  font-size: .6rem;
  top: .5rem;
}

form .campo input:focus {

  outline: none;
}
  
}

     </style>
 
    <main class="formulario-login contenedor">
        <div class="contenedor-login">

           <div class="back ">
                    <a href="/">
			<ion-icon name="close-outline"></ion-icon>
            </a>
            </div>

         
		</div>
    

        <form method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="logoP">
             <img src="/img/undraw_female_avatar_w3jk.svg" alt="">
        </div>
           <div class="logo">
             <img src="/img/female_avatar_w3jk.svg" alt="">
        </div>
            <legend>Inicia sesión</legend>
	
	    
            <div class="campo">
             
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label>Email</label>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              
            </div>

            <div class="campo">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label>Contraseña</label>
            <span>Mostrar</span>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
         </div>

        

            <!-- <div class="campo">
                <input type="password" id="password">
                <label>Contraseña</label>
                <span>Mostrar</span>
            </div> -->
            
             <!-- <div class="submit">
                <input type="submit" value="Ingresar" >
            </div> -->
           
            <!-- </div> -->

           

                        
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="submit">
                             <input type="submit" value="Ingresar" >
                            </div>
                                
                      
                                <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button> -->
                                <div class="acciones">
                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Olvidaste tu Contraseña?') }}
                                    </a>
                                @endif -->
                               
                                    <a class="btn btn-link" style="text-decoration:none;
                                    " href="{{ route('register') }}">
                                        {{ __('¿No tienes una cuenta?  Creala') }}
                                    </a>
                                    </div>
                            </div>
                        </div>

                        <script src="/js/script.js"></script>

            <!-- <div class="acciones">
                <div class="recuerdame">
                    <input type="checkbox">
                    <label>Recuérdame</label>
                </div>

                <div class="ayuda">
                    <a href="#">¿Necesitas ayuda?</a>
                </div>
            </div> --> 
            <!--acciones-->
             <!-- <div class="submit">
                <input type="submit" value="Ingresar" >
            </div>
            <div class="acciones2">
                <div class="registro">
                    <a href="/signup">¿No tienes una cuenta?  Creala</a>
                </div>
            </div> -->
            <!--acciones
           
        </form>
    </div>
    </main>

</body>
</html>