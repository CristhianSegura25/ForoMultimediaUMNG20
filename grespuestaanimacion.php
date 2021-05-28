<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"&& $_POST['Responderanimacion']=="Responder"){
	if(!empty(trim($_POST["respuesta"]))){
		$respuesta=$_POST['respuesta'];

		$sql=("UPDATE `Lista_Preguntas` SET `respuesta` = '$respuesta' WHERE tipo='Animacion' order by id desc limit 1");
		if($conn->query($sql)===false){
			die($conn->error);
		}
	}
}
?>