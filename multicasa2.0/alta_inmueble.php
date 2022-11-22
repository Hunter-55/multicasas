<?php 
    // Include the database config file 
    include("class/class_inmueble_dal.php");
    $obj = new inmueble_dal(); 
     
    // Fetch all the country data 
    $query = "SELECT * FROM entidad ORDER BY nom_ent ASC";
    $obj->set_sql($query);
    $obj->db_conn->set_charset("utf8");
    $result = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn)); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alta de Inmueble</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosAltaInmueble.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css"> 
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
					<li class="derecha"><a href="#">Inicio</a></li>
					<li class="derecha"><a href="#">La Compañia</a></li>
					<li class="derecha"><a href="#">Servicios</a></li>
					<li class="derecha"><a href="#">Requisitos</a></li>
					<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Admin.</a></li>
					<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Buscar</a></li>
					<li class=" izquierda"><a href="#"><img class="incono-verde"src="images/icono_verde.png" >Inicio</a></li>
				</ul>
			</div>
		</header>
		<div class="signup-form contenido">
    		<h1>Registro de Nuevo Inmueble</h1>
    		<br>
			<form onsubmit="return valida_inmueble();" action="class/test_altaInmueble.php" method="post" enctype="multipart/form-data">
				<h5>Datos Generales del Inmueble</h5>
  				<div class="form-group">
    				<label for="encabezado">Encabezado</label>
    				<input type="text" class="form-control" id="encabezado" name="encabezado" placeholder="Escriba el encabezado para la publicación del Inmueble">
    				<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  				</div>
  				<div class="form-group">
    				<label for="descripcion">Descripción</label>
    				<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Escriba la descripción del Inmueble"></textarea>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-6">
    					<label for="direccion">Dirección</label>
    					<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Escriba la dirección del Inmueble">
  					</div>
  					<div class="form-group col-6 col-md-2">
    					<label for="codigoPostal">Código Postal</label>
    					<input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="C.P." pattern="[0-9]{5}" title = "El Código Postal deben ser 5 números." maxlength="5" onkeypress="validar_cp(event);">
  					</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-4">
      					<label for="estado">Estado</label>
      					<select id="estado" name="estado" class="form-control">
        				<option selected>Seleccione...</option>
        				<?php 
    					if($result->num_rows > 0){ 
        					while($row = $result->fetch_assoc()){  
            					echo '<option value="'.$row['nom_ent'].'">'.$row['nom_ent'].'</option>'; 
        					} 
    					}else{ 
        					echo '<option value="">Estado no Disponible</option>'; 
    					} 
    					?>
      					</select>
    				</div>
    				<div class="form-group col-6 col-md-4">
      					<label for="ciudad">Ciudad</label>
      					<select id="ciudad" name="ciudad" class="form-control">
        				<option selected>Seleccione...</option>
        				<option>...</option>
      					</select>
    				</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-5 col-md-2">
    					<label for="costo">Costo</label>
    					<input type="text" class="form-control" id="costo" name="costo" placeholder="Escriba el costo" maxlength="10" onkeypress="validar_cp(event);"></input>
    					<small id="ayudaCosto" class="form-text text-muted">Costo en MXN.</small>
    				</div>
    			</div>
  				<div class="form-row">
  					<div class="form-group col-4 col-md-3">
      					<label for="recamaras">No. de Recamaras</label>
      					<input type="text" id="recamaras" name="recamaras" class="form-control" placeholder="# de recamaras" maxlength="3" onkeypress="validar_cp(event);">
      					</input>
    				</div>
    				<div class="form-group col-4 col-md-3">
      					<label for="baños">No. de Baños</label>
      					<input type="text" id="baños" name="baños" class="form-control" placeholder="# de baños" maxlength="3" onkeypress="validar_cp(event);">
      					</input>
    				</div>
    				<div class="form-group col-4 col-md-3">
      					<label for="estacionamientos">No. de Estacionamientos</label>
      					<input type="text" id="estacionamientos" name="estacionamientos" class="form-control" placeholder="# de estacionamientos" maxlength="3" onkeypress="validar_cp(event);">
      					</input>
    				</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-3">
    					<label for="area">Área del terreno</label>
    					<input type="text" class="form-control" id="area" name="area" placeholder="Escriba el área" maxlength="5" onkeypress="validar_cp(event);"></input>
    					<small id="ayudaArea" class="form-text text-muted">Area en m2.</small>
    				</div>
    			</div>
    			<div class="form-row">
  					<div class="form-group col-8 col-md-4">
    					<label for="email">Email de vendedor</label>
    					<input type="email" class="form-control" id="email" name="email" placeholder="Escriba el email del vendedor"></input>
    				</div>
    			</div>
    			<div class="form-group">
    				<h5>Datos de Ubicación</h5>
    			</div>
    			<div class="form-row">
  					<div class="form-group col-6 col-md-3">
    					<label for="latitud">Latitud</label>
    					<input type="latitud" class="form-control" id="latitud" name="latitud" placeholder="Escriba la latitud"></input>
    					<small id="ayudaUbicacion" class="form-text text-muted">Ingrese Latitud y Longitud en grados decimales.</small>
    				</div>
    				<div class="form-group col-6 col-md-3">
    					<label for="longitud">Longitud</label>
    					<input type="longitud" class="form-control" id="longitud" name="longitud" placeholder="Escriba la longitud"></input>
    				</div>
    			</div>
    			<div class="form-group">
    				<h5>Fotografías del Inmueble</h5>
    				<small id="ayudaFotografias" class="form-text text-muted">Suba 3 archivos de imagen con formato JPG, JPEG o PNG, uno para cada vista del inmueble.</small>
    			</div>
    			<div class="form-group">
    				<label for="exterior">Vista Exterior</label>
    				<input type="file" class="form-control-file" id="exterior" name="exterior">
    				<br>
    				<label for="interior1">Vista Interior 1</label>
    				<input type="file" class="form-control-file" id="interior1" name="interior1">
    				<br>
    				<label for="interior2">Vista Interior 2</label>
    				<input type="file" class="form-control-file" id="interior2" name="interior2">
    			</div>
  				<button type="submit" class="btn btn-primary" name="submit">Registrar Inmueble</button>
			</form>
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
<script src="js/jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/alta_inmueble.js"></script>
</html>