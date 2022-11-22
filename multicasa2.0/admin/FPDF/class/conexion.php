<?php
     //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$enlace = mysqli_connect("localhost","root","","multicasa") or die("Error de conexion");
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>