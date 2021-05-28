<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href ="styleregistr.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Registrate</title>
    </head>
<body>
  <header>
        <p>20</p><br><br>
        <p>AÑOS</p><br><br>
        <p>MULTIMEDIA</p>
  </header>

    <div>
    	<img class="logo20login" src=https://s3.gifyu.com/images/Login-20-anos-nuevo-720-2.gif alt="logo20años">
    </div>

      <div class="container-datos">
        <p class="titulito"><b>INGRESE LOS SIGUIENTES DATOS PARA REGISTRARSE:</b></p>
        <form action="#" class="zonaformulario" method="POST">
          <div class="datos-usuario">
            <input type="text" name="usuario" placeholder="Usuario"required>
          </div>
          <div class="datos-correo">
            <input type="email" name="correo"placeholder="Correo" required>
          </div> 
          <div class="datos-contraseña">
            <input type="password" name="contrasena"placeholder="Contraseña" required>
          </div>
          <div class="botoncitoenviar">
            <input class="enviar" type="submit" value="REGISTRARSE" ></input>
          </div>
          <?php require_once 'guardar.php'?>
        </form> 
         <div class="ingreso">
            <button class="botoningreso" id="botonregistroid" onclick="window.location.href='login.php'">INGRESAR</button>
        </div>

        <footer>
          <p>20</p><br><br>
          <p>AÑOS</p><br><br>
          <p>MULTIMEDIA</p><br><br><br><br>
        </footer>

      </div>


  </body>
</html>