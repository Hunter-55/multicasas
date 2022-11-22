<!DOCTYPE html>
<html>
<head>
	<title>Inicio Publico</title>
	<meta chars="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">

</head>
<body>
	<div class="contenedor">
		<header class="header">
			<div class="logo-empresa">
				<img class="logotipo" src="images/logo.png" style="width: 48%">
				<img class="tel" src="images/tel.png" style="width: 18.3%">
				
				</div>
				<div class="menuHorizontal">
					<ul class="topnav">
						<li class="derecha"><a href="inicio_publico.php">Inicio</a></li>
						<li class="derecha"><a href="casas/casas.php">La Compañia</a></li>
						<li class="derecha"><a href="#">Servicios</a></li>
						<li class="derecha"><a href="contacto.php">Contacto</a></li>
						<li class=" izquierda"><a href="login.php"><img class="incono-verde"src="images/icono_verde.png" >Admin.</a></li>
						<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Buscar</a></li>
						<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Inicio</a></li>
					</ul>
				</div>
		</header>

		<main class="contenido">
			<div class="slider">
				<div class="w3-content w3-section" >
					<img class="mySlides" src="images/casa_1.png" style="width: 100%">
					<img class="mySlides" src="images/casa_2.jpg" style="width: 100%">
					<img class="mySlides" src="images/casa_3.jpg" style="width: 100%">
				</div>
			</div>
			<img class="colash" src="images/colash_min_casas.png">

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
			<center>
			<video width="500" controls>
			  <source src="images/video.mp4" type="video/mp4">
			</video>
			</center>
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

		<footer class="footer">
			<div class="logo-footer">
				<img class="logo" src="images/logotipo.png">
			</div>
			<div class="menuFooter">
				<ul class="topnav">
					<li class="derecha"><a href="#">Inicio</a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Compra </a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Construir </a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Venta </a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Mudanzas </a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Seguros </a></li>
					<h5 class="fotterh5">:</h5>
					<li class="derecha"><a href="#"> Contactos </a></li>
					<div class="copyright">
						<p>Bienes Raíces Multicasa © 2019</p>
						<a href="politicas.php">Politicas De Privacidad</a>				
					</div>
				</ul>
			</div>
		</footer>

		</div>

	</body>
	</html>
	
<script src="js/carrucel.js"></script>
