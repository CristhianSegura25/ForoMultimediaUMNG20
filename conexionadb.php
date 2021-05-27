
<?php 
$servername = "pdb42.awardspace.net";
$username = "3631994_dbforo2021";
$password = "1234_dbforo2021";
$db = "3631994_dbforo2021";



	/*$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("Conexion Fallida:".$conn->connect_error);
	}
    else{
        echo "Connected successfully";
    }*/

	 //Si la base de datos no existe, la crea
    /* $sql = "CREATE DATABASE IF NOT EXISTS usuariostrabajo";
     if($conexion->query($sql) === false){
         die("Conexión fallida: " . mysqli_connect_error());
     }
*/
    //se conecta pero ahora usando la base de datos tambien
    $conn = mysqli_connect($servername,$username,$password,$db);
    if($conn===false){
    	die("Conexión fallida: " . mysqli_connect_error());
    }
    else{
        // echo "Connected successfully with database";
    }     
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


    if($conn->query($sql) == TRUE){
        echo "Table created";
    }
    else{
        echo "Error creating table" .$conn->error;
    }*/
    
    $sql = "CREATE TABLE IF NOT EXISTS Lista_Preguntas(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        tipo VARCHAR(255) NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        pregunta VARCHAR(1000) NOT NULL,
        autor VARCHAR(255) NOT NULL,
        respuesta VARCHAR(1000) NOT NULL,
        timestamp TIMESTAMP
    )";
     if($conn->query($sql) == TRUE){
        // echo "Table created";
    }
    else{
        // echo "Error creating table" .$conn->error;
    }

?>
