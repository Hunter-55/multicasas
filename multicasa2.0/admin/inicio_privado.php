<!DOCTYPE html>
<html>
<head>
	<title>Inicio Privado</title>
	<meta chars="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/icon-down-open.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	<div class="contenedor">
		<header class="header">
			<div class="logo-empresa">
				<img class="logotipo" src="../images/logo.png" style="width: 48%">
				<!--<img class="tel" src="../images/tel.png" style="width: 18.3%">-->
			</div>

			<div class="headerm">
				<input type="checkbox" id="btn-menu">
				<label for="btn-menu" class="icon-down-openmenu"></label>

				<nav class="menu">
					<ul>
						<li><a href="../admin/inicio_privado.php">Inicio</a></li>
						<li><a href="../casas/casas.php">La compañia</a></li>
						<li class="submenu"><a>Acciones<span class="icon-down-openarrow"></span></a>
							<ul>
								<li><a href="../alta_inmueble.php">Altas</a></li>
								<li><a href="../modificar_inmueble.php">Modificaciones</a></li>
								<li><a href="../modificar_inmueble.php">Bajas</a></li>
							</ul>
						</li>
						<li class="submenu"><a>Reportes<span class="icon-down-openarrow"></span></a>
							<ul>
								<li><a href="reportepdf.php">General</a></li>
								<li><a href="dashboard.php">Dashboard</a></li>
							</ul>
						</li>
						<li id="btn-admin"><a href="../inicio_publico.php">Cerrar</a></li> 
					</ul> 
				</nav> 
			</div>
			

		</header>

		<main class="contenido">
			<div class="slider">
				<div class="w3-content w3-section" >
					<img class="mySlides" src="../images/casa_1.png" style="width: 100%">
					<img class="mySlides" src="../images/casa_2.jpg" style="width: 100%">
					<img class="mySlides" src="../images/casa_3.jpg" style="width: 100%">
				</div>
			</div>
			<img class="colash" src="../images/colash_min_casas.png">

			<h1 style="right: 27px; position: relative">BIENVENIDO</h1>
			<h5>¡A nuestro sitio WEB MultiCasa!</h5>

			<p>
				Hello. In this tutorial i will show you how to create an elegant WordPress PSD theme. You can use this web template also for consulting agency templates, services websites, marketing website templates, business website templates, finance website templates. The design is very clean and can be modified very easy into a great template.


				<br><br><br>

				Hello. In this tutorial i will show you how to create an elegant WordPress PSD theme. You can use this web 
				template also for consulting agency templates, services websites, marketing website templates, business 
				website templates, finance website templates. The design is very clean and can be modified very easy into 
				a great template..
				<br><br>

				Hello. In this tutorial i will show you how to create an elegant WordPress PSD theme. You can use this web 
				template also for consulting agency templates, services websites, marketing website templates, business 
				website templates, finance website templates. The design is very clean and can be modified very easy into 
				a great template..

				<br><br>
				Hello. In this tutorial i will show you how to create an elegant WordPress PSD theme. You can use this web 
				template also for consulting agency templates, services websites, marketing website templates, business 
				website templates, finance website templates. The design is very clean and can be modified very easy into 
				a great template..

			</p>
			<div class="embed-responsive embed-responsive-16by9">
    		
  			</div>
		</main>

		<aside class="sidebar-1">
			<div class="menuVertical">
				<ul>
					<li><a href="#">COMPRA</a></li>
					<li><a href="#">CONSTRUIR</a></li>
					<li><a href="#">VENTA</a></li>
					<li><a href="#">MUDANZAS</a></li>
					<li><a href="#">SEGUROS</a></li>
					<li><a href="#">CONTACTOS</a></li>
				</ul>
			</div>
		</aside>

		<aside class="sidebar-2">
			<?php 
				include ('aside-2.php');
			?>			
		</aside>


	</div>

</body>
</html>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/carrucel.js"></script>
<script src="js/jsAdmin.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>