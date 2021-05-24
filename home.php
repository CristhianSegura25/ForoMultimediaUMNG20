<!DOCTYPE html>
<html lang="es">

<head>
    <title> Home Foro </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href ="stylehom.css"/>
    <link rel="stylesheet" href ="transition.css"/> 
</head>
<body>

    <div class="row">
    <div class="row Container col-12 col-md-12 justify-content-around">
        <div class="Zona_Animacion col-10 col-md-2">
            <button class="Boton_Animacion" onclick="window.location='SeccionAnimacion.html'" title="Ir a la Sección de Animacion 2D y 3D"><img id="img_1" onmouseover="setNewImage_1()" onmouseout="setOldImage_1()" class="logoicono img-fluid" src="images/Ilustraciones/Logo_Animacion.png" alt="logoanimacion"/></button>
        </div>

        <div class="Zona_Guiones col-10 col-md-2">
            <button class="Boton_Guiones" onclick="window.location='seccioncortosguiones.html'" title="Ir a la Sección de Guiones y Cortometrajes"><img id="img_2" onmouseover="setNewImage_2()" onmouseout="setOldImage_2()" class="logoicono img-fluid" src="images/Ilustraciones/Logo_Guiones.png" alt="logocortosguiones"/></button>
        </div>

        <div class="Zona_Modelado col-10 col-md-2">
            <button class="Boton_Modelado" onclick="window.location='SeccionModelado.html'" title="Ir a la Sección de Modelado 3D"><img id="img_3" onmouseover="setNewImage_3()" onmouseout="setOldImage_3()" class="logoicono img-fluid" src="images/Ilustraciones/Logo_Modelado.png" alt="logomodelado"/></button>
        </div>
        
        <div class="Zona_Programacion col-10 col-md-2">
            <button class="Boton_Programacion" onclick="window.location='seccionprogramacion.html'" title="Ir a la Sección de Programación"><img id="img_4" onmouseover="setNewImage_4()" onmouseout="setOldImage_4()" class="logoicono img-fluid" src="images/Ilustraciones/Logo_Programacion.png" alt="logoprogramacion"/></button>
        </div>

        <div class="Zona_Render col-10 col-md-2">
            <button class="Boton_Render" onclick="window.location='seccion_render.html'" title="Ir a la Sección de Render"><img id="img_5" onmouseover="setNewImage_5()" onmouseout="setOldImage_5()" class="logoicono img-fluid" src="images/Ilustraciones/Logo_Render.png" alt="logorender"/></button>
        </div>
    </div>

    



    <footer>
            <div class="Inicio">
                <a href="#"><img class="logoinicio"src="images/Ilustraciones/Logo_20.png" alt="logoinicio"></a>
                <div class="modalcontainer">
                    <div class="modal modal-close">
                        <p class="close">X</p>
                        <div class="headeriniciom">
                            <img src="images/logousuario.png"alt="logousuario">
                            <p class="textousuario"><?php
                            
                             ?>
                            </p>
                        </div>
                        <div class="barraiconos1">
                            <ul>
                                <li class="iconoanimacion">
                                    <img src="images/Ilustraciones/Logo_Animacion.png" alt="iconoanimacion">
                                    <a class="textoanimacion" href="SeccionAnimacion.html" >Animacion 2D/3D</a>
                                </li>
                                 <li class="iconocortos">
                                    <img src="images/Ilustraciones/Logo_Guiones.png" alt="iconocortosguiones">
                                    <a class="textocortos"href="seccioncortosguiones.html" >Cortos/Guiones</a>
                                </li>
                                 <li class="iconomodelado">
                                    <img src="images/Ilustraciones/Logo_Modelado.png" alt="iconomodelado">
                                    <a class="textomodelado"href="SeccionModelado.html" >Modelado 3D</a>
                                </li>
                                 <li class="iconoprogramacion">
                                    <img src="images/Ilustraciones/Logo_Programacion.png" alt="iconoprogramacion">
                                    <a class="textoprogramacion" href="seccionprogramacion.html" >Programacion</a>
                                </li>
                                 <li class="iconorender">
                                    <img src="images/Ilustraciones/Logo_Render.png" alt="iconorender">
                                    <a class="textorender"href="seccion_render.html" >Render</a>
                                </li>
                            </ul>
                        </div>
                        <div class="barraiconos2">
                            <img src="images/iconoforo.png" href="#" alt="iconoforo">
                            <a class="textoforo" href="foro.php" >Foro</a>
                        </div>
                        <div class="footercerrar">
                            <img src="images/cerrar.png" alt="cerrarsesion">
                            <a class="textocerrar" href="login.php">Cerrar Sesion</a>
                        </div>
<!--                         <a><img src="images/logo20años2.png" height="400px" alt="logo20años"></a> -->
                    </div>
                </div>
            </div>

            <div class="Acerca1">
                <a href="#" class="cta2"> Acerca de Nosotros </a>
                <div class="modal-container2">
                    <div class="modal2 modal-close2">
                        <div class="barra-superior">
                            <p> Explorador de Archivos </p>
                            <a href="#"><img class="close2" src="images/boton cerrar.png" alt="cerrar"></a>
                        </div>
                        <div class="contenido-carreranosotros">
                            <div class="zonadiseñador">
                                <div class="zonaimageni">
                                    <img class="diseñadorlogoi"src="images/cristhian.jpg"alt="foto">
                                </div>
                                <div class="zonatextod">
                                    <h2>Cristian Segura</h2>
                                    <h3>Soy estudiante de Séptimo Semestre de Ingeniería en Multimedia. Me gusta la creación de motion graphics y la animación en general.</h3>
                                </div>
                            </div>
                            <div class="zonadiseñador1">
                                <div class="zonatextoi">
                                    <h2>Juan Fajardo</h2>
                                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum repellendus sunt perspiciatis tenetur laudantium dolorum, possimus ut iusto nemo sapiente. Rem, saepe dolore aspernatur reiciendis possimus omnis rerum doloremque nesciunt!</h3>
                                </div>
                                <div class="zonaimagend">
                                    <img class="diseñadorlogod"src="images/juan.jpg"alt="foto">
                                </div>
                            </div>
                            <div class="zonadiseñador">
                                <div class="zonaimageni">
                                    <img class="diseñadorlogoi"src="images/jessica.jpg"alt="foto">
                                </div>
                                <div class="zonatextod">
                                    <h2>Jessica Arias</h2>
                                    <h3>Soy una estudiante de Séptimo Semestre de Ingeniería en Multimedia. Dentro de mis intereses estan la edicion y la ilustracion.  </h3>
                                </div>
                            </div>
                            <div class="zonadiseñador1">
                                <div class="zonatextoi">
                                    <h2>Brayan Faura</h2>
                                    <h3>Estudiante de 7mo semestre de Ingenieria multimedia apasionado por el mundo del entretenimiento.</h3>
                                </div>
                                <div class="zonaimagend">
                                    <img class="diseñadorlogod"src="images/brayan.jpg"alt="foto">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="Acerca">
                <a href="#" class="cta"> Acerca de la Carrera </a>
                <div class="modal-container1">
                    <div class="modal1 modal-close1">
                        <div class="barra-superior">
                            <p> Explorador de Archivos </p>
                            <a href="#"><img class="close1" src="images/boton cerrar.png" alt="cerrar"></a>
                        </div>
                        <div class="contenido-carrera">
                            <div class="zona-logo">
                                <img src="https://s3.gifyu.com/images/Login-20-anos-nuevo-720-2.gif" alt="umng">
                            </div>

                            <div class="espaciador">
                                <div class="line"></div>
                            </div>
                            
                            <div class="contexto-carrera">
                                <div class="titulo">
                                    <h1> Ingenieria en Multimedia. </h1>
                                </div>

                                <div class="nuestro-proposito">
                                    <h2> Nuestro Proposito. </h2>
                                    <p> Formar profesionales íntegros en ingeniería, con capacidad para solucionar problemas de la sociedad, mediante el uso de instrumentos, herramientas, técnicas, tecnologías y métodos propios de la ingeniería en multimedia, acorde con los contextos económico, social y político, en los ámbitos regional, nacional e internacional. </p>
                                </div>

                                <div class="perfil-de-aspirante">
                                    <h2> Perfil de Aspirante. </h2>
                                    <p> Debe tener pensamiento lógico y crítico, y fuerte inclinación por la tecnología, con habilidad para las matemáticas, la física, la informática, la comunicación y la expresión gráfica. Además, debe tener capacidad de análisis, aprendizaje autónomo, creatividad, responsabilidad, compromiso y liderazgo, que le permitan asumir nuevos retos en su formación profesional. </p>
                                </div>

                                <div class="perfil-de-egresado">
                                    <h2> Perfil de Egresado. </h2>
                                    <p> El ingeniero en multimedia de la Universidad Militar Nueva Ganada está en capacidad de utilizar los estándares de ingeniería computacionales y de multimedia, para desarrollar productos innovadores en términos de diseño, interactividad, uso, realismo e inteligencia, como cualidades de la calidad de la experiencia para el usuario final. Además, cuenta con la idoneidad para analizar, evaluar e investigar situaciones reales de su campo profesional, de manera crítica y reflexiva, y con compromiso social y ético, con el fin de establecer oportunidades de avance tecnológico y científico en la ingeniería en multimedia, así como con habilidades administrativas y gerenciales, que le posibilitan su integración en el entorno laboral y la creación de empresa. </p>
                                </div>    
                                
                                <div class="sobre-los-20">
                                    <h2> Sobre los 20 años </h2>
                                    <p> La carrera de Ingeniería en Multimedia cumple 20 años de ser instaurada en la Universidad Militar Nueva Granada </p>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div id="hora" class="Zona_Horaria">
                <script>
                    var hoy=new Date();
                    var hora=hoy.getHours()+':'+hoy.getMinutes()+':'+hoy.getSeconds();
                    document.getElementById("hora").innerHTML = hora;
                </script>
            </div>
    </footer>
    </div>

    <script src="homexd.js"></script>
    <script src="home2.js"></script>
    <script src="main.js"></script>  
</body>
</html>