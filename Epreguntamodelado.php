<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"&& $_POST['Eliminarmodelado']=="Eliminar"){

	$sql=("DELETE FROM `Lista_Preguntas` WHERE tipo='Modelado' order by id desc limit 1");
	$resultado=mysqli_query($conn,$sql);
	$filas=mysqli_num_rows($resultado);
	if($filas){
		include("foro.php");
		}
	else{
		include("foro.php");
		}
	if($conn->query($sql)===false){
		die($conn->error);
	}
	
}
?>
