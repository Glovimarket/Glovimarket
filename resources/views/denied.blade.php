<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Acceso denegado</title>
</head>


<body>
<style>
    body{
        background:#F25270;


        

    }
    .dashboard-cards-single{

       justify-content:center;
       align-items:center;



    }
    .dashboard-cards-single:last-child{
        flex-direction:column;
       justify-content:center;
        background:white;
        color:red;
        background:whie;
        margin: 6rem 10rem;
        padding:3rem;
        height:80vh;
    }

    @media (max-width: 768px) {
        .dashboard-cards-single:last-child{
        margin: 2rem 1rem;
        padding:3rem;
        height:80vh;
    }}
section{
    align-items:center;
    justify-content:center;
}
img{
    margin: 2rem;
    max-height:20rem;
}
ion-icon{
    margin-right:.8rem;
}
</style>
<div class="dashboard-cards-single denied">
    <div>
        
        <img src="https://static.wixstatic.com/media/2cd43b_46985859175c4d929a601e657014ad38~mv2.png/v1/fill/w_320,h_414,q_90/2cd43b_46985859175c4d929a601e657014ad38~mv2.png" alt="" srcset="">
    </div>
    <section>
    <h1 style="color:black">Acceso denegado</h1>
    <div>
    </div>
    <p>No tienes los permisos suficientes para acceder</p>
   
    <a href="/">
    <button class="btn-vaciar" style="
                                      color: white;
                                      border: none;
                                      padding: .8rem;
                                      font: inherit;
                                      cursor: pointer;
                                      outline: inherit;">
                                      <ion-icon name="home-outline" aria-label="home outline"></ion-icon>Volver al inicio</button>
                                      </a>
  
    </section>
</div>

</body>
</html>