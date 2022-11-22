<?php
include("class_inmueble_dal.php");

$encabezado = $_POST["encabezado"];
$descripcion = $_POST["descripcion"];
$direccion = $_POST["direccion"];
$codigoPostal = $_POST["codigoPostal"];
$estado = $_POST["estado"];
$ciudad = $_POST["ciudad"];
$costo = $_POST["costo"];
$recamaras = $_POST["recamaras"];
$baños = $_POST["baños"];
$estacionamientos = $_POST["estacionamientos"];
$area = $_POST["area"];
$email = $_POST["email"];
$latitud = $_POST["latitud"];
$longitud = $_POST["longitud"];
//Rutas  donde se guardaran las imagenes
$target_dir = "../uploads/";
$imagen=$_FILES["exterior"]["tmp_name"];
echo $imagen;
$target_file = $target_dir . basename($_FILES["exterior"]["name"]);
$tipoarchivoexterior = strtolower(pathinfo($_FILES["exterior"]["name"],PATHINFO_EXTENSION));
$tipoarchivointerior1 = strtolower(pathinfo($_FILES["interior1"]["name"],PATHINFO_EXTENSION));
$tipoarchivointerior2 = strtolower(pathinfo($_FILES["interior2"]["name"],PATHINFO_EXTENSION));
$rutaexterior = $target_dir . $encabezado . "_1." . $tipoarchivoexterior; 
$rutainterior1 = $target_dir . $encabezado . "_2." . $tipoarchivointerior1;
$rutainterior2 = $target_dir . $encabezado . "_3." . $tipoarchivointerior2; 

$uploadOk = 1;
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["exterior"]["tmp_name"]);
    $check2 = getimagesize($_FILES["interior1"]["tmp_name"]);
    $check3 = getimagesize($_FILES["interior2"]["tmp_name"]);
    if($check !== false && $check2 !== false && $check3 !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($rutaexterior) == true || file_exists($rutainterior1) == true || file_exists($rutainterior2) == true) {
    echo '<script type="text/javascript">';
    echo 'alert("Un archivo de imagen ya existe")';
    echo '</script>';
    $uploadOk = 0;
}
// Allow certain file formats
if($tipoarchivoexterior != "jpg" && $tipoarchivoexterior != "png" && $tipoarchivoexterior != "jpeg" ) {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
elseif($tipoarchivointerior1 != "jpg" && $tipoarchivointerior1 != "png" && $tipoarchivointerior1 != "jpeg") {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo 1 de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
elseif($tipoarchivointerior2 != "jpg" && $tipoarchivointerior2 != "png" && $tipoarchivointerior2 != "jpeg") {
    echo '<script type="text/javascript">';
    echo 'alert("El archivo 2 de imagen del interior no debe pesar mas de 5MB")';
    echo '</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["exterior"]["tmp_name"], $rutaexterior)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["interior1"]["tmp_name"], $rutainterior1)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["interior2"]["tmp_name"], $rutainterior2)) {
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
//Creacion de objetos para el insert
$estatus = "En Venta";
$obj = new inmueble($encabezado,$descripcion,$direccion,$costo,$recamaras,$baños,$estacionamientos,$estatus,$ciudad,$estado,$codigoPostal,$area,$email,$latitud,$longitud,$rutaexterior,$rutainterior1,$rutainterior2);
$obj2 = new inmueble_dal(); 
$resultado = $obj2->insertar($obj);
if($resultado == 1){
    $myfile = fopen("../casas/$encabezado.php", "w") or die("Unable to open file!");
    $txt = '<!DOCTYPE html>
<html>
<head>
    <title>Alta de Inmueble</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/casa.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css"> 
    <link rel="stylesheet" href="../leaflet/leaflet.css"/>
</head>
<body>
    <div class="container">
    <div class="cont">
        <header class="header">
            <div class="logo-empresa">
                <img class="logotipo" src="../images/logo.png">
                <img class="tel" src="../images/tel.png" >
                <!--<h1>&nbsp;&nbsp;BIENES RAICES MULTICASA</h1>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TU MEJOR OPCIÓN EN AGENCIA DE BIENES RAICES</h5>-->
            </div>
            <div class="menuHorizontal">
                <ul class="topnav">
                    <li class="derecha"><a href="../inicio_publico.php">Inicio</a></li>
                    <li class="derecha"><a href="#">La Compañia</a></li>
                    <li class="derecha"><a href="#">Servicios</a></li>
                    <li class="derecha"><a href="#">Requisitos</a></li>
                    <li class=" izquierda"><a href="#"><img class="incono-verde"src="../images/icono_verde.png" >Admin.</a></li>
                    <li class=" izquierda"><a href="#"><img class="incono-verde"src="../images/icono_verde.png" >Buscar</a></li>
                    <li class=" izquierda"><a href="#"><img class="incono-verde"src="../images/icono_verde.png" >Inicio</a></li>
                </ul>
            </div>
        </header>
        <div class="row">

        <div>
          <a href="casa/';
    $txt.=$encabezado;
    $txt.='.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="';
    $txt.=$rutaexterior;
    $txt.='" alt="">
          </a>
        </div>
        <div>
          <h3>';
    $txt.= $encabezado;
    $txt.='</h3>
          <h5>Descricpión</h5>
          <p>';
    $txt.=$descripcion;
    $txt.='</p>
          <h5>Dirección</h5>
          <p>';
    $txt.=$direccion;
    $txt.='</p>
          <h5>Costo</h5>
          <p>';
    $txt.=$costo;
    $txt.='</p>
          <h5>Número de Recamaras</h5>
          <p>';
    $txt.=$recamaras;
    $txt.='</p>
          <h5>Número de Baños</h5>
          <p>';
    $txt.=$baños;
    $txt.='</p>
          <h5>Número de Estacionamientos</h5>
          <p>';
    $txt.=$estacionamientos;
    $txt.='</p>
          <h5>Ciudad</h5>
          <p>';
    $txt.=$ciudad;
    $txt.='</p>
          <h5>Estado</h5>
          <p>';
    $txt.=$estado;
    $txt.='</p>
          <h5>Código Postal</h5>
          <p>';
    $txt.=$codigoPostal;
    $txt.='</p>
          <h5>Área del terreno (m2)</h5>
          <p>';
    $txt.=$area;
    $txt.='</p>
          <h5>Email de vendedor</h5>
          <p>';
    $txt.=$email;
    $txt.='</p>
          <h5>Vista Interior</h5>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="';
    $txt.=$rutainterior1;
    $txt.='" alt="">
          </a>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="';
    $txt.=$rutainterior2;
    $txt.='" alt="">
          </a>
          <br>
          <h5>Ubicación</h5>
        <div id="mapid" class="mapid">
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
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../js/alta_inmueble.js"></script>
<script src="../leaflet/leaflet.js"></script>
<script type="text/javascript">
              var mymap = L.map("mapid").setView([';
    $txt.=$latitud;
    $txt.=', ';
    $txt.=$longitud;
    $txt.='], 13);
              var marker = L.marker([';
    $txt.=$latitud;
    $txt.=', ';
    $txt.=$longitud;
    $txt.=']).addTo(mymap);
            L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicnViZW43NzAiLCJhIjoiY2szeWVyemoyMWprcDN0bXJiYzg3ZmFmOSJ9.eKgxDGg_IGpP0N_6QlaQHA", {
    attribution: "Map data &copy; <a href=`https://www.openstreetmap.org/`>OpenStreetMap</a> contributors, <a href=`https://creativecommons.org/licenses/by-sa/2.0/`>CC-BY-SA</a>, Imagery © <a href=`https://www.mapbox.com/`>Mapbox</a>",
    maxZoom: 18,
    id: "mapbox/streets-v11",
    accessToken: "your.mapbox.access.token"
}).addTo(mymap);
</script>
</html>';
    fwrite($myfile, $txt);
    fclose($myfile);
    echo '<script type="text/javascript">';
    echo 'alert("Inmueble Registrado!")';
    echo '</script>';
    header('refresh:0; ../admin/inicio_privado.php');
}
else{
    echo '<script type="text/javascript">';
    echo 'alert("Ocurrio un error al registrar el Inmueble")';
    echo '</script>';
    header('refresh:0; ../admin/inicio_privado.php');
}
?>