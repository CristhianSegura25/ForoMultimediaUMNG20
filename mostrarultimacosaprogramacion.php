<?php
require_once "conexionadb.php";

$sql=$conn->query("SELECT * FROM Lista_Preguntas WHERE tipo='Programacion' order by id desc limit 1");
if(mysqli_num_rows($sql)>0){ 
	while ($row=mysqli_fetch_array($sql)) { ?>
		<P>Nombre: <?php echo $row["autor"] ?></P>
		<p>Fecha y hora de publicacion: <?php echo $row["timestamp"] ?></p>
		<a href="#" class="ctaforo1"> <?php echo $row["titulo"]?> </a>
                        <div class="modalcontainerforo1">
                            <div class="modalforo1 modalcloseforo1">
                            	<div class="barra-superior">
									<p> <a><?php echo $row["tipo"]?></a> </p>
									<a href="#"><img class="closeforo1" src="images/boton cerrar.png" alt="cerrar"></a>
								</div>
								<div class="contenidomodal">
									<div class="titulomodal">
										<a><?php echo $row["titulo"]?></a>
									</div>
									<div class="preguntamodal">
										<a><?php echo $row["pregunta"]?></a>
									</div>
								</div>                          
                            </div>
                        </div>
		
 <?php } 

}?>