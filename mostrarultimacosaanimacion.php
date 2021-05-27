<?php
require_once "conexionadb.php";

$sql=$conn->query("SELECT * FROM Lista_Preguntas WHERE tipo='Animacion' order by id desc limit 1");
if(mysqli_num_rows($sql)>0){ 
	while ($row=mysqli_fetch_array($sql)) { ?>
		<P>Nombre: <?php echo $row["autor"] ?></P>
		<p>Fecha y hora de publicacion: <?php echo $row["timestamp"] ?></p>
					<a href="#" class="ctaforo"> <?php echo $row["titulo"] ?> </a>
                        <div class="modalcontainerforo">
                            <div class="modalforo modalcloseforo">
                            	<div class="barra-superior">
									<p> <a><?php echo $row["tipo"]?></a> </p>
									<a href="#"><img class="closeforo" src="images/boton cerrar.png" alt="cerrar"></a>
								</div>
								<div class="contenidomodal">
									<div class="titulomodal">
										<a><?php echo $row["titulo"]?></a>
									</div>
									<div class="preguntamodal">
										<a><?php echo $row["pregunta"]?></a>
									</div>
								</div>
								<div class="parteinferior">
									<form action="#" method="POST">
										<label for="">Escribe aqui la respuesta al post:</label><br>
                            			<input type="post" name="respuesta" required><br>
			                            <input type="submit"  value="Responder">
			                            <?php require_once 'grespuestaanimacion.php'?>
			                        </form>
								</div>
                                
                            </div>
                        </div>
		
 <?php } 

}?>