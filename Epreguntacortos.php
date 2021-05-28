<?php
require_once "conexionadb.php";
if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['Eliminarcortos']=="Eliminar"){

	$sql=("DELETE FROM `Lista_Preguntas` WHERE tipo='Cortos' order by id desc limit 1");

		if($conn->query($sql)===false){
			die($conn->error);
		}
	echo "<script> window.location='foro.php'; </script>";
}
?>
