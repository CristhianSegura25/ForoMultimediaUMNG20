<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
		$respuesta=$_POST['respuesta'];


		// $pincript=password_hash($contrasena,PASSWORD_DEFAULT);

		$sql="UPDATE `Lista_Preguntas` SET `respuesta` = '$respuesta' WHERE tipo='Animacion' order by id desc limit 1";
		if($conn->query($sql)===false){
			die($conn->error);
	}
}
?>