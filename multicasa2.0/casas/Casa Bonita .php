<!DOCTYPE html>
<html>
<head>
    <title>Alta de Inmueble</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilosAltaInmueble.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-grid.css"> 
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
        <div class="row">

        <div class="col-md-7">
          <a href="casa/ $encabezado .php">
            <img class="img-fluid rounded mb-3 mb-md-0" src=" $rutaexterior " alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3> $encabezado </h3>
          <h5>Descricpión</h5>
          <p> $descripcion </p>
          <h5>Dirección</h5>
          <p> $direccion</p>
          <h5>Costo</h5>
          <p> $costo </p>
          <h5>Número de Recamaras</h5>
          <p> $recamaras </p>
          <h5>Número de Baños</h5>
          <p> $baños </p>
          <h5>Número de Estacionamientos</h5>
          <p> $estacionamientos </p>
          <h5>Ciudad</h5>
          <p> $ciudad </p>
          <h5>Estado</h5>
          <p> $estado </p>
          <h5>Código Postal</h5>
          <p>$ codigoPostal </p>
          <h5>Área del terreno (m2)</h5>
          <p> $area </p>
          <h5>Email de vendedor</h5>
          <p> $email </p>
          <h5>Vista Interior</h5>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src=" $rutainterior1 " alt="">
          </a>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src=" $rutainterior2 " alt="">
          </a>
          <div id="map" class="map">
            <script type="text/javascript">
              mymap = MapMaker();
              mymap.createOSMap(<?=$longitud ?>,<?= $latitud ?>, 17);
              mymap.addMarker(1, <?= $longitud ?>, <?= $latitud ?>);
            </script>
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
<script src="../js/mapa.js"></script>
</html>