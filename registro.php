<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href ="styleregistr.css"/>
    <title>Registrate</title>
  </head>

  <body>
    <div class="cosasuperior">
        <p>20</p>
        <P>AÑOS</P>
        <P>MULTIMEDIA</P>
    </div>
     <div>
      <img class="logo20login" src=images/logorojo.png alt="logo20años">
     </div>
      <div class="container-datos">
        <p class="titulito"><b>INGRESE LOS SIGUIENTES DATOS PARA REGISTRARSE:</b></p>
        <form action="login.php" class="zonaformulario" method="POST">
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
            <button class="botoningreso" onclick="window.location.href='login.php'">INGRESAR</button>
        </div>
      </div>
  </body>
</html>