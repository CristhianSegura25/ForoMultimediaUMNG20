<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty(trim($_POST["tipo"])) &&!empty(trim($_POST["titulo"])) && !empty(trim($_POST["pregunta"]))&& !empty(trim($_POST["autor"]))){
		$tipo=$_POST['tipo'];
		$titulo=$_POST['titulo'];
		$pregunta=$_POST['pregunta'];
		$autor=$_POST['autor'];

		$sql="INSERT INTO Lista_Preguntas(tipo,titulo,pregunta,autor) VALUES ('$tipo','$titulo','$pregunta','$autor')";
		if($conn->query($sql)===false){			
			die($conn->error);
		}
		$sql="UPDATE `Lista_Preguntas` SET `respuesta` = 'Aun no se ha respondio esta pregunta' WHERE id order by id desc limit 1";
		if($conn->query($sql)===false){			
			die($conn->error);
		}
	}
}

?>