<!DOCTYPE html>
<html>
<head>
	<title>Modificar Inmueble</title>
	<link rel="stylesheet" type="text/css" href="css/estilosAltaInmueble.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/buttons.dataTables.min.css"> 
  <link rel="stylesheet" type="text/css" href="bootstrap/css/dataTables.bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="contenedor">
		<header class="header">
			<div class="logo-empresa">
				<img class="logotipo" src="images/logo.png">
				<img class="tel" src="images/tel.png" >
				<!--<h1>&nbsp;&nbsp;BIENES RAICES MULTICASA</h1>
					<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TU MEJOR OPCIÓN EN AGENCIA DE BIENES RAICES</h5>-->
			</div>
			<div class="menuHorizontal">
				<ul class="topnav">
					<li class="derecha"><a href="admin/inicio_privado.php">Inicio</a></li>
					<li class="derecha"><a href="#">La Compañia</a></li>
					<li class="derecha"><a href="#">Servicios</a></li>
					<li class="derecha"><a href="#">Requisitos</a></li>
					<li class=" izquierda"><a href="admin/inicio_privado.php"><img class="incono-verde"src="images/icono_verde.png" >Admin.</a></li>
					<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Buscar</a></li>
					<li class=" izquierda"><a href="admin/inicio_privado.php"><img class="incono-verde"src="images/icono_verde.png" >Inicio</a></li>
				</ul>
			</div>
		</header>
		<div class="contenido">
      <h1>Modificar un Inmueble</h1>
        <br>
      <div class = "row">
        <div id ="tabla" class= "col-sm-12 col-md-12 col-lg-12">
          <div class="table-responsive col-sm-12">
            <table id="inmuebles" class="table table-bordered" cellpadding="0" width="100%">
              <thead>
                <tr>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                  <th>Títlo de la Publicación</th>
                  <th>Estatus</th>
                  <th>Ciudad</th>
                  <th>Estado</th>
                  <th>Dirección</th>
                  <th>Código Postal</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
		<footer class="footer">
			<div class="logo-empresa">
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
	</div>
</body>
<script>
function alerta() {
  if(confirm("¿Estas seguro de eliminar el registro?")){
  	//window.location.href = "delete.php";
  	return true;
  }
  else{
  	return false;
  }
}	
</script>

<script src="js/jquery-1.12.3.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/poblardatatable.js"></script>
<script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="js/buttons.flash.min.js"></script>
<script type="text/javascript" src="js/jszip.min.js"></script>
<script type="text/javascript" src="js/pdfmake.min.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>

</html>