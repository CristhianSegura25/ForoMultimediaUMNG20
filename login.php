<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8" />
    <title>FORO 20 AÑOS MULTIMEDIA</title>
    <link rel="stylesheet"  href="stylelog.css" />
</head>
<body>
    <header>
        <p>20</p><br><br>
        <p>AÑOS</p><br><br>
        <p>MULTIMEDIA</p>
</header>
    <div >
    	<img class="logo20login" src="https://s3.gifyu.com/images/Login-20-anos-nuevo-720-2.gif" alt="logo20años">
    </div>
    <div class="IngresoDatos">

    	<form  action="validar.php" method="POST">
    		<p><input type="text" name="nombreingreso" placeholder="Usuario/Correo"></p><br>
    		<p><input type="password" name="passwordingreso" placeholder="Contraseña"></p>
    		<div class="botoneslogin">
    			
    			<p><input type="submit" value="INGRESAR"></p>
    		</div>
    	</form>
        <form method="get" action="home.php">
            <button type="submit"><a>ENTRAR SIN REGISTRO<a></button>
        </form>
        <form method="get" action="registro.php">
            <button class="botonregistro">REGISTRARSE</button>
        </form>
        <footer>
        <p>20</p><br><br>
        <p>AÑOS</p><br><br>
        <p>MULTIMEDIA</p><br><br><br><br>
        </footer>
	</div>
</body>
</html>
