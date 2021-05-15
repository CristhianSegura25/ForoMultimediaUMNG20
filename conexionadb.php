
<?php 
$servername="pgdb1.runhosting.com";
$username="3631994_dbforo20";
$password="3631994_dbforo20";
//$db="3631994_dbforo20";

//$db="usuariostrabajo";
	// $mydb="trabajito";
	// $conn="";

	$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("Conexion Fallida:".$conn->connect_error);
	}
    else{
        echo "Connected successfully";
    }
	 //Si la base de datos no existe, la crea
    /* $sql = "CREATE DATABASE IF NOT EXISTS usuariostrabajo";
     if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
     }
    //se conecta pero ahora usando la base de datos tambien
    $conexion=mysqli_connect($servername,$username,$password,$db);
    if($conexion===false){
    	die("Conexión fallida: " . mysqli_connect_error());
    }*/
/*
    //crea la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS Lista_Usuarios(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        usuario VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL,
        contrasena VARCHAR(255) NOT NULL,
        tipo VARCHAR(255) NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
    }*/
	?>
