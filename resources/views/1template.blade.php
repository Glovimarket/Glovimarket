<!DOCTYPE html>
<html lang="en">

<!----------- Header--------------------->
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
	<script src="/js/MainSweetAlert.js"></script><var></var>
	@include('sweetalert::alert')
	@yield('css')
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

<!----------- Body--------------------->

<body class="animate fadeIn one">



<!----------- inicio Menu lateral--------------------->


<input type="checkbox" id="nav-toggle">	
<div class="sidebar ">
		<div class="sidebar-titulo">
			<a href=" dashboard "><h2>Glovimarket</h2> </div></a>
	<div class="sidebar-menu">
			<ul>
				<li>
					<a href="{{route('products.index')}}" class="{{request()->routeIs('products.*') ? 'active' : ''}}">
						<ion-icon name="pricetag-outline"> </ion-icon> <span class="{{request()->routeIs('products.*') ? 'active-text' : ''}}">Productos</span> </a>
				</li>
				<li>
					<a href="{{route('categories.index')}}" class="sidebar-nav-link">
						<ion-icon name="heart-outline"> </ion-icon> <span class="sidebar-nav-link-text">Categorias</span> </a>
				</li>
				<li>
					<a href="{{route('exits.index')}}" class="sidebar-nav-link">
						<ion-icon name="card-outline"> </ion-icon> <span class="sidebar-nav-link-text">Facturas</span> </a>
				</li>
				<li>
					<a href="{{route('user.index')}}" class="sidebar-nav-link">
						<ion-icon name="person-add-outline"> </ion-icon> <span class="sidebar-nav-link-text">Usuarios</span> </a>
				</li>


				<li>
					<a href=" mi-perfil " class="sidebar-nav-link">
						<ion-icon name="person-outline"> </ion-icon> <span class="sidebar-nav-link-text">Mi Perfil</span> </a>
				</li>
				<li>
					<a href="{{route('suppliers.index')}}" class="sidebar-nav-link">
						<ion-icon name="person-outline"> </ion-icon> <span class="sidebar-nav-link-text">Proveedores</span> </a>
				</li>			
				<li>
					<a href="#" class="sidebar-nav-link">
						<ion-icon name="log-out-outline"> </ion-icon> <span class="sidebar-nav-link-text">Salir</span> </a>
				</li>
		</div>
		</ul>
	</div>

<!----------- inicio main content --------------------->
	

	<div class="sidebar-main-content">
		<nav class="sidebar-main-content-header">
			<div class="sidebar-main-content-header-busqueda">
				<div>
					<label for="nav-toggle">
						<ion-icon name="menu-outline"> </ion-icon>
					</label>
			</div>
				<div class="sidebar-main-content-header-search">
					<ion-icon name="search-outline"> </ion-icon>
					<input type="text" placeholder="Busca algo!"> </div>
			</div>
			<div class="sidebar-main-content-header-user"> <img src="" alt="" srcset="">
	
				<div class="sidebar-main-content-header-user-smalltext"> <small>Administrador</small> </div>
			</div>
		</nav>
		
		<section class="main-content">
			<main>
				<section class=" dashboard-cards-single tittle-main-space">
					<div class="tittle-main animate fadeInDown one ">
						<div> <img src="/img/other/co-work.svg" alt="" srcset=""> </div>
						<div>
							<h1>Administracion De @yield('titulo')</h1>
							<p>Panel de control </p>
						</div>
						<div class="dashboard-cards-single">
							<div>
								<h2>@yield('valor')</h2> <span>@yield('titulo')</span> </div>
							<div>
								<ion-icon name="@yield('icon')-outline"> </ion-icon>
							</div>
						</div>
					</div>
				</section>







<section class="table-main">
					<div class="table-main-grid animate fadeIn three">
						<div class="recent-flex-proyectos">
							<div class="recent-flex-proyectos-card">
								<div class="recent-flex-proyectos-card-header">
									<h2>@yield('titulo')</h2>


@yield('main')

@yield('js')

</body>

</html>