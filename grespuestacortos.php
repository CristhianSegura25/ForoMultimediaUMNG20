<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"&& $_POST['Respondercortos']=="Responder"){
	if(empty(trim($_POST["respuesta"]))){
		$respuesta=$_POST['respuesta'];


		// $pincript=password_hash($contrasena,PASSWORD_DEFAULT);

		$sql="UPDATE `Lista_Preguntas` SET `respuesta` = '$respuesta' WHERE tipo='Cortos' order by id desc limit 1";
		if($conn->query($sql)===false){
			die($conn->error);
		}
	}
}
?>