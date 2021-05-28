<?php
require_once "conexionadb.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['Editarprogramacion']=="Editar"){
	if(!empty(trim($_POST["Edicion"]))){
		$acpregunta=$_POST['Edicion'];

	$sql=("UPDATE `Lista_Preguntas` SET `pregunta` = '$acpregunta' WHERE tipo='Programacion' order by id desc limit 1");

		if($conn->query($sql)===false){
			die($conn->error);
		}
	echo "<script> window.location='foro.php'; </script>";
}
}
?>