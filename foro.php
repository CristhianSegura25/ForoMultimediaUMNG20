<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href ="styleforo.css"/>
    <link rel="stylesheet" href ="transition.css"/>

    <script src="filtro.js"></script>
</head>
<body>

    <div class="transition transition-2 is-active">
        <center>
            <img class="logo_foro" src="images/Ilustraciones/Logo_Foro.png"/><br><br><br>
            <div class="loader"></div>
        </center>
    </div>

    <div class="row">

        <div class="botones_laterales col-1 col-sm-1">
            <div class="Seccion_Animacion">
                <button class="Boton_animacion" onclick="window.location='SeccionAnimacion.html'"><img class="img-fluid" src="images/Iconos_botones/Boton_animacion.png"/></button>
            </div>
            <div class="Seccion_Guiones">
                <button class="Boton_guiones" onclick="window.location='seccioncortosguiones.html'"><img class="img-fluid" src="images/Iconos_botones/Boton_guiones.png"/></button>
            </div>

            <div class="Seccion_Modelado">
                <button class="Boton_modelado" onclick="window.location='SeccionModelado.html'"><img class="img-fluid" src="images/Iconos_botones/Boton_modelado.png"/></button>
            </div>

            <div class="Seccion_Programacion">
                <button class="Boton_programacion" onclick="window.location='seccionprogramacion.html'"><img class="img-fluid" src="images/Iconos_botones/Boton_programacion.png"/></button>
            </div>

            <div class="Seccion_Render">
                <button class="Boton_render" onclick="window.location='seccion_render.html'"><img class="img-fluid" src="images/Iconos_botones/Boton_render.png"/></button>
            </div>
    </div>
      
      <div class="col-10 col-sm-10">
            
        <div class="botones_header">
            <div class="col-9 col-sm-9">

                <div class="field" id="searchform">
                    <input type="text" id="searchterm" placeholder="what are you searching for?" />
                    <button type="button" id="search">Find!</button>
                </div>
            </div>
            
                <div class="img_20_Años">
                    <button class="Boton_20" onclick="window.location='home.php'" ><img id="logo_20" onmouseover="setNewImage_logo_20()" onmouseout="setOldImage_logo_20()"  class="img_20_Años img-fluid" src="images/Ilustraciones/Logo_20.png" alt="logo20años" /></button>
                </div>
                <div class="Foro">
                    <button class="Boton_Foro" onclick="window.location='foro.html'" ><img id="foro" onmouseover="setNewImage_foro()" onmouseout="setOldImage_foro()" class="Foro img-fluid" src="images/Ilustraciones/Logo_Foro.png" alt="foromultimedia"/></button>
                </div>
            
        </div> 
            
     
        <div class="row">    
            <div class="col-12 col-sm-12">
              
                <div class="botones_secciones">
                    <a href="#" class="Category_List" category="all"> Todo </a>
                    <a href="#" class="Category_List" category="animacion"> Animacion 2D y 3D </a>
                    <a href="#" class="Category_List" category="cortos-guiones"> Cortos y Guiones </a>
                    <a href="#" class="Category_List" category="modelado"> Modelado </a>
                    <a href="#" class="Category_List" category="programacion"> Programacion </a>
                    <a href="#" class="Category_List" category="render"> Render </a>
                    <!-- <button type="button">Animacion 2D y 3D</button>
                    <button type="button">Cortos y guiones</button>
                    <button type="button">Programacion</button>
                    <button type="button">Render</button>
                    <button type="button">Modelado</button> -->
                </div>
            </div>
           
        </div> 
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="zona_escritura_post">
                    <div class="input_post">
                        <form action="#" method="POST">
                            <input type="radio" name="tipo" value="animacion">Animacion 2D y 3D
                            <input type="radio" name="tipo" value="cortos">Cortos y guiones 
                            <input type="radio" name="tipo" value="programacion">Programacion
                            <input type="radio" name="tipo" value="render">Render
                            <input type="radio" name="tipo" value="modelado">Modelado<br>
                            <label for="">Escribe aqui tu post:</label><br>
                            <input type="post" name="pregunta" required><br>
                            <input type="submit"  value="enviar">
                            <?php require_once 'gpregunta.php'?>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 ">
                <div class="ultimos_post">
                    <p>Ultimos post </p>

                </div>

            </div>
            <div class="col-12 col-sm-12">
                <div class="post" category="animacion_2d_3d">
                    <div>
                        <p>Animacion</p>
                    </div>
                    <div class="post_1">
                        <P>Nombre usuario: Rocha</P>
                        <p>fecha: 15/05/2021</p>
                        <a href="#" class="ctaforo"> TITULO: Dinamicas. </a>
                        <div class="modalcontainerforo">
                            <div class="modalforo modalcloseforo">
                                <div class="barra-superior">
                                <p> PLACEHOLDER1 </p>
                                <a href="#"><img class="closeforo" src="images/boton cerrar.png" alt="cerrar"></a>
                                </div>
                            </div>
                            <div class="contenidomodal">
                                <a>PLACEHOLDER2</a>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- <h2>TITULO: Dinamicas.</h2> -->

                    </div>
                </div>

                <div class="post" category="programacion">
                    <div>
                        <p>Programacion</p>
                    </div>
                    <div class="post_1">
                        <P>Nombre usuario: Gutierrez</P>
                        <p>fecha: 11/05/2021</p>
                        <a href="#"> TITULO: Fourier. </a>
                        <!-- <h2>TITULO: Fourier.</h2> -->

                    </div>
                </div>

                <div class="post" category="render">
                    <div>
                        <p>Render</p>
                    </div>
                    <div class="post_1">
                        <P>Nombre usuario: Karen</P>
                        <p>fecha: 14/05/2021</p>
                        <a href="#"> TITULO: Texturas. </a>
                        <!-- <h2>TITULO: Texturas.</h2> -->

                    </div>
                </div>

                <div class="post" category="modelado">
                    <div>
                        <p>Modelado</p>
                    </div>
                    <div class="post_1">
                        <P>Nombre usuario: Rocha</P>
                        <p>fecha: 09/05/2021</p>
                        <a href="#"> TITULO: Errores Geometricos. </a>
                        <!-- <h2>TITULO: Errores Geometricos.</h2> -->

                    </div>
                </div>

                <div class="post" category="cortos_guiones">
                    <div>
                        <p>Cortos y Guiones</p>
                    </div>
                    <div class="post_1">
                        <P>Nombre usuario: Skankhunt</P>
                        <p>fecha: 02/03/2021</p>
                        <a href="#"> TITULO: Manejo de Camaras. </a>
                        <!-- <h2>TITULO: Manejo de Camaras.</h2> -->

                    </div>
                </div>
            </div>


    </div>            
    
    <script src="main.js"></script>  
</body>
</html>