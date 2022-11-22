<?php
	include("class_inmueble_dal.php");
	
	$id_inmueble = $_GET['id_inmueble'];
//	$cve_mat = $_POST['cve_mat'];
//    $email = $_POST['email'];
//    $telefono = $_POST['telefono'];
//    $estatus = $_POST['estatus'];
//    $grado = $_POST['grado'];
//    $carrera = $_POST['carrera'];
//	$nombre = $_POST['nombre'];
	//$observaciones = $_POST['observaciones'];

	$obj = new inmueble_dal();
    $resultado = $obj->eliminar($id_inmueble);
	$resultado = mysqli_query($conexion,$sql);
	if($resultado){
        header('location: ../modificar_inmueble.php');
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error: No se pudo eliminar el registro.")';
                echo '</script>';
               header('location: ../modificar_inmueble.php');
            }

?>