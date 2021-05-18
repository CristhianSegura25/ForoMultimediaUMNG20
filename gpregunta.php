<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["tipo"])) && !empty(trim($_POST["pregunta"]))){
		$tipo=$_POST['seccion'];
		$pregunta=$_POST['pregunta'];

		// $pincript=password_hash($contrasena,PASSWORD_DEFAULT);

		$sql="INSERT INTO Lista_Preguntas(tipo,pregunta) VALUES ('$tipo','$pregunta')";
		if($conn->query($sql)===false){
			die($conn->error);
		}
	}
}

?>