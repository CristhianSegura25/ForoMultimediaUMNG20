<!DOCTYPE HTML>
<html>
<body>


<?php 
$servername="localhost";
$username="root";
$password="root";
$db="Usuariostrabajo";
	// $mydb="trabajito";
	// $conn="";

	$conexion = new mysqli($servername,$username,$password);
	if($conexion->connect_error){
		die("Conexion Fallida:".$conn->connect_error);

	}
	 //Si la base de datos no existe, la crea
     $sql = "CREATE DATABASE IF NOT EXISTS Usuariostrabajo";
     if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
     }
    //se conecta pero ahora usando la base de datos tambien
    $conexion=mysqli_connect($servername,$username,$password,$db);
    if($conexion===false){
    	die("Conexión fallida: " . mysqli_connect_error());
    }

    //crea la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS Lista_Usuarios(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        usuario VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL,
        contrasena VARCHAR(255) NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
    }
	?>
	


</body>
</html>