<?php
//required_once('recaptcha');
$usuario=$_POST['usuario'];
$pass= $_POST['clave'];
$privkey="6LeX13oUAAAAAN5HPNpWwuv9oRysDSoVvYxSw-LM";
//$verify=recaptcha_check($privkey, $SERVER['REMOTE_ADDR'], $_POST['recaptcha_check']);

$conexion=mysqli_connect("localhost","root", "", "multicasa");
$consulta="SELECT * from administradores where usuario='$usuario' and clave='$pass'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
  header("location:admin/inicio_privado.php");
}
else {
	echo '<script type="text/javascript">';
	echo "alert('Los campos no coinciden')";
    echo '</script>';	
    header('refresh:0; login.php');
  
  return false;

/*if ($verify ->is_valid)
{
}
else{
  echo"por favor verifique que no es un robot";
}*/


}
mysqli_free_result($resultado);
mysqli_close($conexion);
