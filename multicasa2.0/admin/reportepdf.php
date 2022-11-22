<!DOCTYPE html>
<html>
<!-- php para llenar el datatable  -->
<?php 
	/*$conexion=mysqli_connect('localhost','root','','multicasa');

	$sql = "SELECT encabezado, direccion, costo_inmueble, recamaras, baños, estacionamientos, ciudad, estado, area_terreno, estatus FROM inmueble";

	$result = mysqli_query($conexion, $sql);
	echo '<script type="text/javascript">';
    echo 'alert("';
    echo $result;
    echo '")';
    echo '</script>';*/
	
	include("../class/class_inmueble_dal.php");//importar clase
	$obj = new inmueble_dal();
	

	$query = "SELECT * FROM inmueble;";
	$obj->set_sql($query);
    $obj->db_conn->set_charset("utf8");
    $resultado = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn));
    //$row = mysqli_fetch_assoc($resultado)

?>
<!-- fin del php para llenar el datatable  -->
<head>
	<title>Reporte General</title>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilosAltaInmueble.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/buttons.dataTables.min.css"> 

</head>
<body>
	<div class="container">
		<div class="contenedor">
			<header class="header">
				<div class="logo-empresa">
					<img class="logotipo" src="../images/logo.png" style="width: 48%">
					<img class="tel" src="../images/tel.png" style="width: 18.3%">
				</div>
				<div class="menuHorizontal">
					<ul class="topnav">
						<li class="derecha"><a href="inicio_privado.php">Inicio</a></li>
						<li class="derecha"><a href="#">La Compañia</a></li>
						<li class="derecha"><a href="#">Servicios</a></li>
						<li class="derecha"><a href="#">Requisitos</a></li>
						<li class=" izquierda"><a href="inicio_privado.php"><img class="incono-verde"src="../images/icono_verde.png" >Admin.</a></li>
						<li class=" izquierda"><a href="#"><img class="incono-verde"src="../images/icono_verde.png" >Buscar</a></li>
						<li class=" izquierda"><a href="inicio_privado.php"><img class="incono-verde"src="../images/icono_verde.png" >Inicio</a></li>
					</ul>
				</div>
			</header>
			<div class="contenido">
				<div class="row">
					<div class="table-responsive col-sm-12">
						<table id="mitabla" class="table table-bordered" cellpadding="0" width="100%">
							<thead>
								<tr>
									<th>Encabezado</th>
									<th>Direccion</th>
									<th>Costo </th>
									<th>Recamaras</th>
									<th>Baños</th>
									<th>Estacionamientos </th>
									<th>Ciudad</th>
									<th>Estado</th>
									<th>Area del Terreno </th>
									<th>Estatus</th>
								</tr>
							</thead>
							<tbody>
								<?php 

								while ($mostrar = mysqli_fetch_assoc($resultado)) 
								{
								?>
									<tr>
										<td><?php echo $mostrar['encabezado'] ?></td>
										<td><?php echo $mostrar['direccion'] ?></td>
										<td><?php echo $mostrar['costo_inmueble'] ?></td>
										<td><?php echo $mostrar['recamaras'] ?></td>
										<td><?php echo $mostrar['banos'] ?></td>
										<td><?php echo $mostrar['estacionamientos'] ?></td>
										<td><?php echo $mostrar['ciudad'] ?></td>
										<td><?php echo $mostrar['estado'] ?></td>
										<td><?php echo $mostrar['area_terreno'] ?></td>
										<td><?php echo $mostrar['estatus'] ?></td>
									</tr>
									<?php 
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="logo-empresa">
					<img class="logo" src="../images/logotipo.png">
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
							<a href="">Politicas De Privacidad</a>				
						</div>
					</ul>
				</div>
			</footer>
		</div>
	</div>
	<!-- --------------------------Scripts ------------------------------ -->
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/bootstrap.min.css.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="../bootstrap/js/dataTables.bootstrap.js"></script>

	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.flash.min.js"></script>
	<script src="js/jszip.min.js"></script>
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<script src="js/buttons.html5.min.js"></script>
	<script src="js/buttons.print.min.js"></script>
		<script>
		$(document).ready(function() 
		{
		    $('#mitabla').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		           'print'
		        ]
		    });
		});
	</script>
</body>
</html>