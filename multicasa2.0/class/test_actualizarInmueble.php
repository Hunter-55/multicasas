<?php
	
	include("class_inmueble_dal.php");//importar clase

	$encabezado = $_POST['encabezado'];
	$descripcion = $_POST['descripcion'];
	$costo = $_POST['costo'];
	$email = $_POST['email'];
	$id_inmu = $_POST['id_inmu'];
	$estatus = $_POST['estatus'];

	$obj = new inmueble_dal();
	$resultado = $obj->actualizar($id_inmu,$encabezado,$descripcion,$costo,$email,$estatus);

	if($resultado){
		header('location: ../modificar_inmueble.php');
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error: No se pudo actualizar el registro.")';
                echo '</script>';
               header('location: consulta_especiales.php');
            }
?>