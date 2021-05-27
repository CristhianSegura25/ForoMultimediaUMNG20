<?php
require_once "conexionadb.php";
$sql=$conn->query("SELECT * FROM Lista_Preguntas WHERE tipo='Cortos' order by id desc limit 1");
if(mysqli_num_rows($sql)>0){ 
	while ($row=mysqli_fetch_array($sql)) { ?>
		<P>Nombre: <?php echo $row["autor"] ?></P>
		<p>Fecha y hora de publicacion: <?php echo $row["timestamp"] ?></p>
		<a href="#" class="ctaforo4"> <?php echo $row["titulo"]?> </a>
                        <div class="modalcontainerforo4">
                            <div class="modalforo4 modalcloseforo4">
                            	<div class="barra-superior">
									<p> <a><?php echo $row["tipo"]?></a> </p>
									<a href="#"><img class="closeforo4" src="images/boton cerrar.png" alt="cerrar"></a>
								</div>
								<div class="contenidomodal">
									<div class="titulomodal">
										<a><?php echo $row["titulo"]?></a>
									</div>
									<div class="preguntamodal">
										<a style="color: white;">LA PREGUNTA:</a><br>
										<a><?php echo $row["pregunta"]?></a>
									</div>
									<div class="respuestamodal">
										<a style="color: white;">LA RESPUESTA:</a><br>
										<a><?php echo $row["respuesta"]?></a>
									</div>
								</div>
								<div class="parteinferior">
									<form action="#" method="POST">
										<label for="">Escribe aqui la respuesta al post:</label><br>
                            			<input type="post" name="respuesta" required><br>
			                            <input type="submit" name="Respondercortos" value="Responder">
			                            <?php require_once 'grespuestacortos.php'?>
			                        </form>
								</div>
								</div>
                            </div>
                        </div>
		
 <?php } 
}?>