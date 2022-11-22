<?php

	include("class/class_inmueble_dal.php");//importar clase
	$obj = new inmueble_dal();

	$query = "SELECT * FROM inmueble";//query a la tabla
	//$mysqli->set_charset("utf8");
	$obj->set_sql($query);
    $obj->db_conn->set_charset("utf8");
    $resultado = mysqli_query($obj->db_conn,$obj->db_query) or die(mysqli_error($obj->db_conn));

	if (!$resultado){
		die("Error");
	}else{
		while($data = mysqli_fetch_assoc($resultado)){

			//se hace un arreglo de datos ya que a sí trabaja un datable
			$data['modificar'] = "<td><a class='btn btn-default' href='modificar.php?id_inmueble=".$data['id_inmueble']."'>Modificar</a></td>";
			$data['eliminar'] = "<td><a id='eliminar' onclick='return alerta();' class='btn btn-default' href='class/test_eliminarInmueble.php?id_inmueble=".$data['id_inmueble']."'>Eliminar</a></td>";
			unset($data['id_inmueble']);
			//$utfEncodedArray = array_map("utf8_encode", $data);
			//$arreglo["data"][] = array_map("utf8_encode", $data); //se guardan los datos en mi arreglo de datos
			$arreglo["data"][] = $data;
			//print_r($utfEncodedArray);
		}
		echo json_encode($arreglo);// se convierte a json los datos del arreglo y lo imprime con echo
		
	}

	//mysqli_free_result($resultado);//cerrar BD
	//mysqli_close($conexion);//cierra conexión
	