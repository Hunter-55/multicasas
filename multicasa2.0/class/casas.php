<?php
include("../class/class_inmueble_dal.php");
$datos = $_POST['datos'];
$precio_minimo = $_POST['precio_minimo'];
$precio_maximo = $_POST['precio_maximo'];
$recamaras = $_POST['recamaras'];
$baños = $_POST['banos'];
//echo $baños;

$inmueble = new inmueble_dal();
$arr_inmuebles = $inmueble->get_datos_inmueble($datos,$precio_minimo,$precio_maximo,$recamaras,$baños);
//print_r($arr_inmuebles);
if(!$arr_inmuebles == null){

  $res = count($arr_inmuebles);
  //echo $res;
}
else {
  echo '<script type="text/javascript">';
    echo 'alert("No se encontraron resultados")';
    echo '</script>';
    header('refresh:0; ../inicio_publico.php');
}
/*echo '<!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project One</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
          <a class="btn btn-primary" href="#">View Project</a>
        </div>
      </div>'*/
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Resultados de Busqueda</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilosAltaInmueble.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css"> 
</head>
<body>
  
    <div class="container">


      <h1 class="my-4">Resultados</h1>

      <?php 
      for ($i=0; $i<$res;$i++){
        echo '<!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="../casas/';
        echo $arr_inmuebles[$i]->getEncabezado();
        echo '.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="';
        echo $arr_inmuebles[$i]->getExterior();
        echo '" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>';
        echo $arr_inmuebles[$i]->getEncabezado(); 
        echo '</h3>
          <p>';
        echo $arr_inmuebles[$i]->getDescripcion(); 
        echo '</p>
          <a class="btn btn-primary" href="../casas/';
        echo $arr_inmuebles[$i]->getEncabezado();
        echo '.php">Ver Casa</a>
        </div>
      </div>
      <br>';
      }
      ?>
      

      <hr>


    </div>
 
</body>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../js/alta_inmueble.js"></script>
</html>