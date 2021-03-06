<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelado 3D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href ="stylemodelado2.css"/>
    <link rel="stylesheet" href ="transition.css"/>

</head>
<body>

    <div class="transition transition-2 is-active">
        <center>
            <img class="logo_modelado" src="images/Ilustraciones/Logo_Modelado.png"/>
            <div class="loader"></div>
        </center>
    </div>

    
    <div class="Botones_inferiores col-8 col-sm-4 ms-auto">
        <div class="d-flex justify-content-around">
            <div class="logoi1">
                <button class="Boton_Info" title="Ver información de la Sección"><img class="logoinfo img-fluid"src="images/iconoinfo2.png"alt="iconoinfo"><br><br>Información de <br>la Sección</button>
                <div class="modalcontainermodelado1">
                    <div class="modalmodelado1 modal-closemodelado1">
                        <div class="headerventana">
                            <button class="closemodelado1"><img class="cerrarmodal img-fluid"src="images/cerrarmodal.png"alt="cerrarmodal"></button>
                        </div>
                        <div class="ventana">
                            <br><p>La Sección de Modelado tiene como objetivo mostrar todos aquellos trabajos que estudiantes de la carrera han realizado para la materia
                            <br><br>El Modelado 3D es una técnica utilizada para crear formas en tercera dimensión a través de programas, entre los más conocidos están Blender y Autodesk Maya. De cierta forma, el modelado 3D se asemeja al trabajo que desarrolla un escultor cuando está construyendo una obra.
                            <br><br>Hoy en día, este conocimiento es altamente utilizado en la industria de televisión, la arquitectura y diseño de interiores, el arte digital y especialmente el mundo del entretenimiento</p> 
                            <br><br><img class="img-fluid" src="images/Ejemplo_Modelado.jpeg" alt="ejemplo_modelado" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="Foro">
                <button class="Boton_Foro" onclick="window.location='foro.php'" title="Ir al Foro"><img id="foro" onmouseover="setNewImage_foro()" onmouseout="setOldImage_foro()" class="Foro img-fluid" src="images/Ilustraciones/Logo_Foro.png" alt="foromultimedia"/><br>Foro</button>
            </div>
            
            <div class="img_20_Años_a">
                <button class="Boton_20" onclick="window.location='home.php'" title="Ir al Inicio"><img id="logo_20" onmouseover="setNewImage_logo_20()" onmouseout="setOldImage_logo_20()"  class="img_20_Años img-fluid" src="images/Ilustraciones/Logo_20.png" alt="logo20años" /></button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="Botones_laterales col-2 col-md-1">
                <div class="Seccion_Animacion">
                    <button class="Boton_animacion " onclick="window.location='SeccionAnimacion.html'"title="Ir a la Sección de Animacion 2D y 3D"><img class="img-fluid" src="images/Iconos_botones/Boton_animacion.png"/></button>
                </div>
                <div class="Seccion_Guiones">
                    <button class="Boton_guiones" onclick="window.location='seccioncortosguiones.html'"title="Ir a la Sección de Guiones y Cortometrajes"><img class="img-fluid" src="images/Iconos_botones/Boton_guiones.png"/></button>
                </div>

                <div class="Seccion_Modelado">
                    <button class="Boton_modelado" onclick="window.location='SeccionModelado.html'"title="Ir a la Sección de Modelado 3D"><img class="img-fluid" src="images/Iconos_botones/Boton_modelado.png"/></button>
                </div>

                <div class="Seccion_Programacion">
                    <button class="Boton_programacion" onclick="window.location='seccionprogramacion.html'"title="Ir a la Sección de Programacion"><img class="img-fluid" src="images/Iconos_botones/Boton_programacion.png"/></button>
                </div>

                <div class="Seccion_Render">
                    <button class="Boton_render" onclick="window.location='seccion_render.html'"title="Ir a la Sección de Render"><img class="img-fluid" src="images/Iconos_botones/Boton_render.png"/></button>
                </div>
        </div>


            <div class="row justify-content-around col-10 col-md-11">  
                <div class="Imagen_1 col-8 col-md-5 ">
                    <div class="d-flex" >
                            <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img1" onmouseover="setNewImage_1()" onmouseout="setOldImage_1()" class="img-fluid col-8 col-md-8" src="images/Modelos/Primer_Modelo.png"/>
                        <div class="pared_derecha_1_2 col-1 col-md-1">
                            <button title="Ver el nombre del Modelo" id = "showhide" class="Boton_info"></button>
                        </div>
                        <div id="info_modelo" class="info_modelo col-6 col-sm-5">
                            <p>Casa de Un Show mas</p>
                        </div>
                    </div>
                    <div class="pared_abajo_1_2 col-8 col-md-8">
                        <button title="Ver la información del Modelo" id = "showhide_2" class="Boton_info_2"></button>
                    </div>
                    <div id="info_modelo_2" class="info_modelo_2 col-8 col-md-8">
                        <p>Autor: Cristhian David Segura Contreras<br>Este es un escenario que se creó para el Proyecto Final de Modelo 3D</p>
                    </div>
                </div>
                <div class="Imagen_2 col-8 col-md-5">
                    <div class="d-flex ">
                        <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img2" onmouseover="setNewImage_2()" onmouseout="setOldImage_2()" class="img-fluid col-8 col-md-8" src="images/Modelos/Segundo_Modelo.png"/>
                        <div class="pared_derecha_1_2 col-1 col-md-1">
                            <button title="Ver el nombre del Modelo" id = "showhide_3" class="Boton_info"></button>
                        </div>
                        <div id="info_modelo_3" class="info_modelo_3 col-6 col-sm-5">
                            <p>Bar</p>
                        </div>
                    </div>
                    <div class="pared_abajo_1_2 col-8 col-md-8">
                        <button title="Ver la información del Modelo" id = "showhide_4" class="Boton_info_2"></button>
                    </div>
                    <div id="info_modelo_4" class="info_modelo_4 col-8 col-md-8">
                        <p>Autor: Karen Lorena Saavedra Vega <br>Este es un escenario el cual se creó para la clase de Modelado 3D</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-around col-10 col-md-11">  
            <div class="Imagen_3 col-10 col-md-5">
                <div class="d-flex ">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img3" onmouseover="setNewImage_3()" onmouseout="setOldImage_3()" class="img-fluid col-8 col-md-8" src="images/Modelos/Tercer_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-md-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_5" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_5" class="info_modelo col-6 col-sm-5">
                        <p>Casa de Tales de Sonic:The Hedgehog</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-md-8">
                    <button title="Ver la información del Modelo" id = "showhide_6" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_6" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: Karen Lorena Saavedra Vega <br>Este es un escenario el cual se creó para el Proyecto Final de Modelo 3D</p>
                </div>
            </div>
            <div class="Imagen_4 col-10 col-md-5">
                <div class="d-flex ">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img4" onmouseover="setNewImage_4()" onmouseout="setOldImage_4()" class="img-fluid col-8 col-md-8" src="images/Modelos/Cuarto_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-sm-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_7" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_7" class="info_modelo col-6 col-sm-5">
                        <p>Hillside House</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-sm-8">
                    <button title="Ver la información del Modelo" id = "showhide_8" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_8" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: Gunivas<br>Este escenario está inspirado en un concepto de un mundo fantástico<br> Obtenido de Sketchfab</p>
                </div>
            </div>
        </div>




        <div class="row justify-content-around col-10 col-md-11">  
            <div class="Imagen_3 col-10 col-md-5">
                <div class="d-flex ">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img5" onmouseover="setNewImage_5()" onmouseout="setOldImage_5()" class="img-fluid col-8 col-md-8" src="images/Modelos/Quinto_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-sm-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_9" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_9" class="info_modelo col-6 col-sm-5">
                        <p>Flower Pool</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-sm-8">
                    <button title="Ver la información del Modelo" id = "showhide_10" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_10" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: Raneman<br>Este escenario presenta un pozo de agua sagradado escondido en el bosque<br> Obtenido de Sketchfab</p>
                </div>
            </div>
            <div class="Imagen_4 col-10 col-md-5">
                <div class="d-flex">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img6" onmouseover="setNewImage_6()" onmouseout="setOldImage_6()" class="img-fluid col-8 col-md-8" src="images/Modelos/Sexto_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-md-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_11" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_11" class="info_modelo col-6 col-sm-5">
                        <p>Locomotora Lowpoly</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-sm-8">
                    <button title="Ver la información del Modelo" id = "showhide_12" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_12" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: NIKCORE<br>Este modelo es de una locomotora<br> Obtenido de Sketchfab</p>
                </div>
            </div>
        </div>
            

        <div class="row justify-content-around col-10 col-md-11">  
            <div class="Imagen_3 col-10 col-md-5">
                <div class="d-flex">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img7" onmouseover="setNewImage_7()" onmouseout="setOldImage_7()" class="img-fluid col-8 col-md-8" src="images/Modelos/Septimo_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-md-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_13" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_13" class="info_modelo col-6 col-sm-5">
                        <p>Muñeco de Felpa de un cerdito</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-md-8">
                    <button title="Ver la información del Modelo" id = "showhide_14" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_14" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: MightyPinecone<br>Este modelo es de un pequeño cerdo relleno de felpa. Dale una caricia :D<br> Obtenido de Sketchfab</p>
                </div>
            </div>
            <div class="Imagen_4 col-10 col-md-5">
                <div class="d-flex ">
                    <img title="Manten el cursor encima para ver el modelo en una vista de 360º" id="img8" onmouseover="setNewImage_8()" onmouseout="setOldImage_8()" class="img-fluid col-8 col-md-8" src="images/Modelos/Octavo_Modelo.png"/>
                    <div class="pared_derecha_1 col-1 col-md-1">
                        <button title="Ver el nombre del Modelo" id = "showhide_15" class="Boton_info"></button>
                    </div>
                    <div id="info_modelo_15" class="info_modelo col-6 col-sm-5">
                        <p>Volvo PV4</p>
                    </div>
                </div>
                <div class="pared_abajo_1 col-8 col-sm-8">
                    <button title="Ver la información del Modelo" id = "showhide_16" class="Boton_info_2"></button>
                </div>
                <div id="info_modelo_16" class="info_modelo_4 col-8 col-md-8">
                    <p>Autor: robinmikart<br>Este modelo es un remaje en lowpoyly de un automovil que había creado hace más de un año<br> Obtenido de Sketchfab</p>
                </div>
            </div>
        </div>



	<script src="modelado.js"></script>
    <script src="main.js"></script>  
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  

</body>
</html>
