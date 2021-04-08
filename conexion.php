<!DOCTYPE HTML>
<html>
<body>


<?php 
$servername="localhost";
	$username="root";
	$password="root";
	$mydb="taller";
	// $conn="";

	$conn = new mysqli($servername,$username,$password,$mydb);

	if($conn->connect_error){
		die("Conexion Fallida:".$conn->connect_error);

	}
	else{
		echo "se conecto exitosamente";
	}
	?>
	


</body>
</html>