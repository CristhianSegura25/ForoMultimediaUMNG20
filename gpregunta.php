<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["tipo"])) &&!empty(trim($_POST["titulo"])) && !empty(trim($_POST["pregunta"]))){
		$tipo=$_POST['tipo'];
		$titulo=$_POST['titulo'];
		$pregunta=$_POST['pregunta'];

		// $pincript=password_hash($contrasena,PASSWORD_DEFAULT);

		$sql="INSERT INTO Lista_Preguntas(tipo,titulo,pregunta) VALUES ('$tipo','$titulo','$pregunta')";
		if($conn->query($sql)===false){
			die($conn->error);
		}
	}
}

?>