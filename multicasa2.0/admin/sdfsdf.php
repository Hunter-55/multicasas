<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
  <meta  charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/icon-down-open.css">
</head>
<body>
  <div class="contenedor" >

    <header class="header">
      <div class="headerm">
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu" class="icon-down-openmenu"></label>

        <nav class="menu">
          <ul>
            <li><a href="">Inicio</a></li>
            <li><a href="">La compañia</a></li>
            <li class="submenu"><a>Acciones<span class="icon-down-openarrow"></span></a>
              <ul>
                <li><a href="">Altas</a></li>
                <li><a href="">Modificaciones</a></li>
                <li><a href="">Bajas</a></li>
              </ul>
            </li>
            <li class="submenu"><a>Reportes<span class="icon-down-openarrow"></span></a>
              <ul>
                <li><a href="">General</a></li>
                <li><a href="">Dashboard</a></li>
              </ul>
            </li>
            <li id="btn-admin"><a href="">Admin</a></li> 
          </ul> 
        </nav> 
    </div>
    </header>

    <main class="contenido" style="background-color: white">
      contenido
    </main>
    <aside class="asidebar-1" style="background-color: blue">
      asidebar 1
    </aside>
    <aside class="asidebar-1" style="background-color: pink">
      asidebar2
    </aside>
    <footer class="footer" style="background-color: red">
      footer
    </footer>


  </div>
</body>
</html>

<script src="js/jsAdmin.js"></script>