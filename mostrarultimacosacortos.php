<?php
require_once "conexionadb.php";

$sql=$conn->query("SELECT * FROM Lista_Preguntas WHERE tipo='Cortos' order by id asc limit 1");
if(mysqli_num_rows($sql)>0){ 
	while ($row=mysqli_fetch_array($sql)) { ?>
		<div class="barra-superior">
			<p> <a><?php echo $row["tipo"]?></a> </p>
			<a href="#"><img class="closeforo4" src="images/boton cerrar.png" alt="cerrar"></a>
		</div>
		<div class="contenidomodal">
			<div class="titulomodal">
				<a><?php echo $row["titulo"]?></a>
			</div>
			<div class="preguntamodal">
				<a><?php echo $row["pregunta"]?></a>
			</div>
		</div>
 <?php } 

}?>