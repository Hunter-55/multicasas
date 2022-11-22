<!DOCTYPE html>
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
          <a href="casa/casa chida HD.php">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../uploads/casa chida HD_1.jpg" alt="">
          </a>
        </div>
        <div>
          <h3>casa chida HD</h3>
          <h5>Descricpión</h5>
          <p>vivienda comoda para pasar tu  resto de tu vida a lado de  tu familia</p>
          <h5>Dirección</h5>
          <p>ABEL BARRAGAN</p>
          <h5>Costo</h5>
          <p>250000</p>
          <h5>Número de Recamaras</h5>
          <p>5</p>
          <h5>Número de Baños</h5>
          <p>4</p>
          <h5>Número de Estacionamientos</h5>
          <p>3</p>
          <h5>Ciudad</h5>
          <p>Saltillo</p>
          <h5>Estado</h5>
          <p>Coahuila de Zaragoza</p>
          <h5>Código Postal</h5>
          <p>25120</p>
          <h5>Área del terreno (m2)</h5>
          <p>500</p>
          <h5>Email de vendedor</h5>
          <p>david.uac@outlook.com</p>
          <h5>Vista Interior</h5>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../uploads/casa chida HD_2.jpg" alt="">
          </a>
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="../uploads/casa chida HD_3.jpg" alt="">
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
              var mymap = L.map("mapid").setView([25.452334, -101.028642], 13);
              var marker = L.marker([25.452334, -101.028642]).addTo(mymap);
            L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicnViZW43NzAiLCJhIjoiY2szeWVyemoyMWprcDN0bXJiYzg3ZmFmOSJ9.eKgxDGg_IGpP0N_6QlaQHA", {
    attribution: "Map data &copy; <a href=`https://www.openstreetmap.org/`>OpenStreetMap</a> contributors, <a href=`https://creativecommons.org/licenses/by-sa/2.0/`>CC-BY-SA</a>, Imagery © <a href=`https://www.mapbox.com/`>Mapbox</a>",
    maxZoom: 18,
    id: "mapbox/streets-v11",
    accessToken: "your.mapbox.access.token"
}).addTo(mymap);
</script>
</html>