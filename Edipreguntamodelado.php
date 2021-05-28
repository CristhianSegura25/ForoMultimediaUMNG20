<?php
require_once "conexionadb.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['Editarmodelado']=="Editar"){

	$sql=("UPDATE `Lista_Preguntas` SET `pregunta` = '$acpregunta' WHERE tipo='Modelado' order by id desc limit 1");

		if($conn->query($sql)===false){
			die($conn->error);
		}
	echo "<script> window.location='foro.php'; </script>";
}
?>
