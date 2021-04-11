<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8" />
    <title>FORO 20 AÑOS MULTIMEDIA</title>
    <link rel="stylesheet"  href="stylelogi.css" />
</head>
<body>
    <div >
    	<img class="logo20login" src=images/logorojo.png alt="logo20años">
    </div>
    <div class="IngresoDatos">
    	<form  action="validar.php" method="POST">
    		<p><input type="text" name="nombreingreso" placeholder="Usuario/Correo"></p><br>
    		<p><input type="password" name="passwordingreso" placeholder="Contraseña"></p>
    		<div class="botoneslogin">
    			<p><input type="reset" value="GOOGLE"></p><br>
    			<p><input type="submit" value="INGRESAR"></p>
    		</div>
    	</form>

        <div class="registro">
            <button class="botonregistro" onclick="window.location.href='registro.php'">REGISTRARSE</button>
        </div>
	</div>
</body>
</html>