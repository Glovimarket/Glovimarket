<!DOCTYPE html>
<html lang="es">
<head id="Login">
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
	<script type="module" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule="" src="https://unpkg.com/ionicons@5.1.2/dist/ionicons/ionicons.js"></script>
  <title>Registrarte</title>
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
    

           
        <div class="back ">
                            <a href="Login">
                    <ion-icon name="close-outline"></ion-icon>
                    </a>
                    </div>
          

   	
      <form method="POST" action="{{ route('register') }}">
                        @csrf
	
                <div class="logoP">
             <img src="/img/undraw_female_avatar_w3jk.svg" alt="">
        </div>
           <div class="logo">
             <img src="/img/female_avatar_w3jk.svg" alt="">
        </div>
            <legend>Registrate</legend>
	<div class="campo">

                 <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label>Nombre</label>
            </div>
	    <div class="campo">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                <label>Email</label>
            </div>
	    
            <div class="campo">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label>Contraseña</label>
           <span>Mostrar</span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
               
            </div>
            <div class="campo">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label>Confirmar Contraseña</label>
                <span>Mostrar</span>
            </div>
            

            </div><!--acciones-->
             <div class="submitR">
                <input type="submit" value="Ingresar" >


            </div>
            <div class="acciones2">
                <div class="registro">
                    <a href="{{ route('login') }}">¿Ya tienes una cuenta?  Inicia sesion</a>
                </div>
            </div><!--acciones-->
        </form>

        <script src="/js/script.js"></script>
</body>
</html>