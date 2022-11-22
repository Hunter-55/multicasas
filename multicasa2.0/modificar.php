<?php
	include("class/class_inmueble_dal.php");//importar clase
	$obj = new inmueble_dal();
	
	$id_inmueble = $_GET['id_inmueble'];

	$query = "SELECT * FROM inmueble WHERE id_inmueble = '$id_inmueble';";
	$obj->set_sql($query);
    $obj->db_conn->set_charset("utf8");
    $resultado = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn));
    $row = mysqli_fetch_assoc($resultado)

	/*if($row['estatus'] == 1){
	    $est = "ACTIVO";
    }
	else{
	    $est = "INACTIVO";
    }
	if($row['carrera'] == '828'){
	    $crr = "828-Ingeniero en Sistemas Computacionales";
	}
	else if($row['carrera'] == '689'){
		$crr = "689-Licenciado de Sistemas Computacionales Administrativos";
	}
	else if($row['carrera'] == '851'){
		$crr = "851-Ingeniero Automotriz";
	}
	else if($row['carrera'] == '827'){
		$crr = "827-Ingeniero en Electronica y Comunicaciones";
	}
	else if($row['carrera'] == '820'){
		$crr = "820-Ingeniero Industrial y de Sistemas";
	}
	else if($row['carrera'] == '754'){
		$crr = "754-Ingeniero en Tecnologias de la Informacion y Comunicaciones";
	}
	else if($row['carrera'] == '686'){
		$crr = "686-Ingeniero Industrial(Antiguo)";
	}
	else if($row['carrera'] == '670'){
		$crr = "670-Ingeniero En Sistemas Computacionales(Antiguo)";
	}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Inmueble</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilosAltaInmueble.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css"> 
</head>
<body>
	<div class="container">
	<div class="contenedor">
		<div class="signup-form contenido">
    		<h1>Modificar Datos de un Inmueble</h1>
    		<br>
			<form action="class/test_actualizarInmueble.php" method="post">
				<h5>Datos Generales del Inmueble</h5>
          <div class="form-group">
            <label for="id_inmueble">id Inmueble</label>
            <input type="text" class="form-control" id="id_inmu" name="id_inmu" value="<?php echo $id_inmueble; ?>" disabled>
          </div>
  				<div class="form-group">
    				<label for="encabezado">Encabezado</label>
    				<input type="text" class="form-control" id="encabezado" name="encabezado" placeholder="Escriba el encabezado para la publicación del Inmueble" value="<?php echo $row['encabezado']; ?>">
    				<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  				</div>
  				<div class="form-group">
    				<label for="descripcion">Descripción</label>
    				<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Escriba la descripción del Inmueble"><?php echo $row['descripcion']; ?></textarea>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-6">
    					<label for="direccion">Dirección</label>
    					<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Escriba la dirección del Inmueble" value="<?php echo $row['direccion']; ?>" disabled>
  					</div>
  					<div class="form-group col-6 col-md-2">
    					<label for="codigoPostal">Código Postal</label>
    					<input type="text" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="C.P." value="<?php echo $row['codigo_postal']; ?>" disabled>
  					</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-4">
      					<label for="estado">Estado</label>
      					<select id="estado" name="estado" class="form-control" disabled>
        				<option value="<?php echo $row['estado']; ?>" selected><?php echo $row['estado']; ?></option>
        				<option>...</option>
      					</select>
    				</div>
    				<div class="form-group col-6 col-md-4">
      					<label for="ciudad">Ciudad</label>
      					<select id="ciudad" name="ciudad" class="form-control" disabled>
        				<option value="<?php echo $row['ciudad']; ?>" selected><?php echo $row['ciudad']; ?></option>
        				<option>...</option>
      					</select>
    				</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-5 col-md-2">
    					<label for="costo">Costo</label>
    					<input type="text" class="form-control" id="costo" name="costo" placeholder="Escriba el costo" value="<?php echo $row['costo_inmueble']; ?>"></input>
    					<small id="ayudaCosto" class="form-text text-muted">Costo en MXN.</small>
    				</div>
    			</div>
  				<div class="form-row">
  					<div class="form-group col-4 col-md-3">
      					<label for="recamaras">No. de Recamaras</label>
      					<input type="text" id="recamaras" name="recamaras" class="form-control" placeholder="# de recamaras" value="<?php echo $row['recamaras']; ?>" disabled>
      					</input>
    				</div>
    				<div class="form-group col-4 col-md-3">
      					<label for="baños">No. de Baños</label>
      					<input type="text" id="baños" name="baños" class="form-control" placeholder="# de baños" value="<?php echo $row['banos']; ?>" disabled>
      					</input>
    				</div>
    				<div class="form-group col-4 col-md-3">
      					<label for="estacionamientos">No. de Estacionamientos</label>
      					<input type="text" id="estacionamientos" name="estacionamientos" class="form-control" placeholder="# de estacionamientos" value="<?php echo $row['estacionamientos']; ?>" disabled>
      					</input>
    				</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-6 col-md-3">
    					<label for="area">Área del terreno</label>
    					<input type="text" class="form-control" id="area" name="area" placeholder="Escriba el área" value="<?php echo $row['area_terreno']; ?>" disabled></input>
    					<small id="ayudaArea" class="form-text text-muted">Area en m2.</small>
    				</div>
    			</div>
    			<div class="form-row">
  					<div class="form-group col-8 col-md-4">
    					<label for="email">Email de vendedor</label>
    					<input type="email" class="form-control" id="email" name="email" placeholder="Escriba el email del vendedor" value="<?php echo $row['email']; ?>"></input>
    				</div>
    			</div>
    			<div class="form-group">
    				<h5>Datos de Ubicación</h5>
    			</div>
    			<div class="form-row">
  					<div class="form-group col-6 col-md-3">
    					<label for="latitud">Latitud</label>
    					<input type="latitud" class="form-control" id="latitud" name="latitud" placeholder="Escriba la latitud" value="<?php echo $row['latitud']; ?>" disabled></input>
    					<small id="ayudaUbicacion" class="form-text text-muted">Ingrese Latitud y Longitud en grados decimales.</small>
    				</div>
    				<div class="form-group col-6 col-md-3">
    					<label for="longitud">Longitud</label>
    					<input type="longitud" class="form-control" id="longitud" name="longitud" placeholder="Escriba la longitud" value="<?php echo $row['longitud']; ?>" disabled></input>
    				</div>
    			</div>
    			<div class="form-group">
    				<h5>Fotografías del Inmueble</h5>
    				<small id="ayudaFotografias" class="form-text text-muted">Suba 3 archivos de imagen con formato JPG, JPEG o PNG, uno para cada vista del inmueble.</small>
    			</div>
    			<div class="form-group">
    				<label for="exterior">Vista Exterior</label>
    				<input type="file" class="form-control-file" id="exterior" name="exterior" disabled>
    				<br>
    				<label for="interior1">Vista Interior 1</label>
    				<input type="file" class="form-control-file" id="interior1" name="interior1" disabled>
    				<br>
    				<label for="interior2">Vista Interior 2</label>
    				<input type="file" class="form-control-file" id="interior2" name="interior2" disabled>
    			</div>
          <div class="form-group col-6 col-md-4">
              <label for="estado">Estatus</label>
              <select id="estatus" name="estatus" class="form-control">
              <option value="<?php echo $row['estatus']; ?>" selected><?php echo $row['estatus']; ?></option>
              <option value="<?php if ($row['estatus'] == "En Venta") {
                  echo "Vendida";
                }
                else{
                    echo "En Venta";
                  } ?>">
                  <?php if ($row['estatus'] == "En Venta") {
                    echo "Vendida";
                  }
                  else{
                    echo "En Venta";
                  } ?>
              </option>
              </select>
          </div>
  				<button type="submit" class="btn btn-primary">Actualizar Datos</button>
			</form>
		</div>
	</div>
	</div>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/alta_inmueble.js"></script>
</html>