<?php
require_once "conexionadb.php";

$sql="SELECT * FROM Lista_Preguntas order by id asc limit 1";
while ($row=mysqli_fetch_array($sql)) { ?>
	<div class="seccionmodal">
		<a><?php echo $row["tipo"]?></a>
	</div>
	<div class="titulomodal">
		<a><?php echo $row["titulo"]?></a>
	</div>
	<div class="preguntamodal">
		<a><?php echo $row["pregunta"]?></a>
	</div>
<?php } ?>