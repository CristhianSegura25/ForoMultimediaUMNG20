
<?php
require_once "conexionadb.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	$sql=("DELETE FROM `Lista_Preguntas` WHERE tipo='Animacion' order by id desc limit 1");
	if($conn->query($sql)===false){
		die($conn->error);
	}
}
?>
