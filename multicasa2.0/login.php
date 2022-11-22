<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
  <title> Login Multicasa Bienes Raices</title>
  <meta name="viewport" content="width, user-scalable=no, initial-scale=1,maxinum-scale=1">
  <link rel="stylesheet" href="css/estilo_login.css">
   
</head>
<body>
 <form action="verifica_usuario.php" method="post" onsubmit="return valida_captcha();">

  <h2>Login administrador Multicasa</h2>
  <input type="text" id="iusuario" placeholder="&#128272; Usuario" name="usuario" maxlength="50" required>
  <input type="password" id="iclave" placeholder="&#128272; Contraseña" name="clave" maxlength="8" required>
  <div class="g-recaptcha" id="cap" data-sitekey="6LeX13oUAAAAAN5HPNpWwuv9oRysDSoVvYxSw-LM" >  
  </div>
  <input type="submit" value="Ingresar">
</form>
</body>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/validar_login.js"></script> 
</html>