<!DOCTYPE html>
<html lang="es">

<head>
    <title> Home Foro </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://allfont.es/allfont.css?fonts=ds-digital" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href ="stylehom.css"/>
    <link rel="stylesheet" href ="transition.css"/> 
</head>
<body>

    <div class="transition transition-4 is-active">
        <center>
            <img class="logo_20_animado" src="https://s3.gifyu.com/images/Login-20-anos-nuevo-720-2.gif"/>
            <div class="loader"></div>
        </center>
    </div>

    <div class="row Container justify-content-around">
    <!-- <div class="row  col-12 col-md-12 ">-->
        <div class="Zona_Animacion col-10 col-lg-2">               
            <button class="Boton_Animacion" onclick="window.location='SeccionAnimacion.html'" title="Ir a la Sección de Animacion 2D y 3D"><img id="img_1" class="logoicono img-fluid" src="https://s3.gifyu.com/images/Logo_Animacion_14_s.gif" alt="logoanimacion"/><br><br>Sección de Animación 2D y 3D</button>                           
        </div> 
        <div class="Zona_Guiones col-10 col-lg-2">               
            <button class="Boton_Guiones" onclick="window.location='seccioncortosguiones.html'" title="Ir a la Sección de Guiones y Cortometrajes"><img id="img_2" class="logoicono img-fluid" src="https://s3.gifyu.com/images/Logo_Guiones_18_s.gif" alt="logocortosguiones"/><br><br>Sección de Guiones y Cortometrajes</button>
        </div>
        <div class="Zona_Modelado col-10 col-lg-2">               
            <button class="Boton_Modelado" onclick="window.location='SeccionModelado.html'" title="Ir a la Sección de Modelado 3D"><img id="img_3" class="logoicono img-fluid" src="https://s3.gifyu.com/images/Logo_Modelado_16_s.gif" alt="logomodelado"/><br><br>Sección de Modelado 3D</button>
        </div>
        <div class="Zona_Programacion col-10 col-lg-2">               
            <button class="Boton_Programacion" onclick="window.location='seccionprogramacion.html'" title="Ir a la Sección de Programación"><img id="img_4" class="logoicono img-fluid" src="https://s3.gifyu.com/images/Logo_Programacion_18_s.gif" alt="logoprogramacion"/><br><br>Sección de Programación</button>
        </div>
        <div class="Zona_Render col-10 col-lg-2">               
            <button class="Boton_Render" onclick="window.location='seccion_render.html'" title="Ir a la Sección de Render"><img id="img_5" class="logoicono img-fluid" src="https://s3.gifyu.com/images/Logo_Render_19_s.gif" alt="logorender"/><br><br>Sección de Render</button>
        </div>

            
    <!-- </div>-->
    </div>




     <footer>
            <div class="Inicio">
                <button class="Boton_Inicio" href="#"><img class="logoinicio"src="images/Ilustraciones/Logo_20.png" alt="logoinicio"></button>
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
                                    <button class="textoanimacion" onclick="window.location='SeccionAnimacion.html'" >Animacion 2D/3D</button>
                                </li>
                                 <li class="iconocortos">
                                    <img src="images/Ilustraciones/Logo_Guiones.png" alt="iconocortosguiones">
                                    <button class="textocortos" onclick="window.location='seccioncortosguiones.html'" >Cortos/Guiones</button>
                                </li>
                                 <li class="iconomodelado">
                                    <img src="images/Ilustraciones/Logo_Modelado.png" alt="iconomodelado">
                                    <button class="textomodelado" onclick="window.location='SeccionModelado.html'" >Modelado 3D</button>
                                </li>
                                 <li class="iconoprogramacion">
                                    <img src="images/Ilustraciones/Logo_Programacion.png" alt="iconoprogramacion">
                                    <button class="textoprogramacion" onclick="window.location='seccionprogramacion.html'">Programacion</button>
                                </li>
                                 <li class="iconorender">
                                    <img src="images/Ilustraciones/Logo_Render.png" alt="iconorender">
                                    <button class="textorender" onclick="window.location='seccion_render.html'"  >Render</button>
                                </li>
                            </ul>
                        </div>
                        <div class="barraiconos2">
                            <img src="images/Ilustraciones/Logo_Foro.png" href="#" alt="iconoforo">
                            <button class="textoforo"  onclick="window.location='foro.php'"  >Foro</button>
                        </div>
                        <div class="footercerrar">
                            <img src="images/cerrar.png" alt="cerrarsesion">
                            <button class="textocerrar"  onclick="window.location='login.php'" >Cerrar Sesion</button>
                        </div>
<!--                         <a><img src="images/logo20años2.png" height="400px" alt="logo20años"></a> -->
                    </div>
                </div>
            </div>

            <div class="Acerca1">
                <button href="#" class="cta2"> Acerca de Nosotros </button>
                <div class="modal-container2">
                    <div class="modal2 modal-close2">
                        <div class="barra-superior">
                            <p> Explorador de Archivos </p>
                            <button class="Boton_cerrar_1" href="#"><img class="close2" src="images/boton cerrar.png" alt="cerrar"></button>
                        </div>
                        <div class="contenido-carreranosotros">
                            <div class="zonadiseñador">
                                <div class="zonaimageni">
                                    <img class="diseñadorlogoi"src="images/cristhian.jpg"alt="foto">
                                </div>
                                <div class="zonatextod">
                                    <h2>Cristian Segura</h2>
                                    <h3>Soy estudiante de Séptimo Semestre de Ingeniería en Multimedia. Me gusta la animación desde programas como After y Photoshop, además de la edición de videos y la computación gráfica.</h3>
                                </div>
                            </div>
                            <div class="zonadiseñador1">
                                <div class="zonatextoi">
                                    <h2>Juan Fajardo</h2>
                                    <h3>Soy estudiante de Séptimo Semestre de Ingeniería en Multimedia. Me atrae el ámbito del Modelado 3D y Animación, y quisiera especializarme en el desarrollo de videojuegos.</h3>
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
                                    <h3>Soy una estudiante de Séptimo Semestre de Ingeniería en Multimedia. Dentro de mis intereses están la edición y la ilustración.  </h3>
                                </div>
                            </div>
                            <div class="zonadiseñador1">
                                <div class="zonatextoi">
                                    <h2>Brayan Faura</h2>
                                    <h3>Soy estudiante de Séptimo Semestre de Ingenieria en Multimedia, apasionado por el mundo del entretenimiento.</h3>
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
                <button href="#" class="cta"> Acerca de la Carrera </button>
                <div class="modal-container1">
                    <div class="modal1 modal-close1">
                        <div class="barra-superior">
                            <br>
                            <p> Explorador de Archivos </p>
                            <button class="Boton_cerrar_2" href="#"><img class="close1" src="images/boton cerrar.png" alt="cerrar"></button>
                        </div>
                        <div class="row contenido-carrera col-12 col-lg-12">
                            <div class="zona-logo col-12 col-lg-5">
                                <img src="https://s3.gifyu.com/images/Login-20-anos-nuevo-720-2.gif" alt="umng">
                            </div>

                            <div class="espaciador col-1 col-lg-1">
                                <div class="line"></div>
                            </div>
                            
                            <div class="contexto-carrera col-6 col-lg-6">
                                <div class="titulo col-12 col-lg-12">
                                    <h1> Ingenieria en Multimedia. </h1>
                                </div>

                                <div class="nuestro-proposito col-12 col-lg-12">
                                    <h2> Nuestro Proposito. </h2>
                                    <p> Formar profesionales íntegros en ingeniería, con capacidad para solucionar problemas de la sociedad, mediante el uso de instrumentos, herramientas, técnicas, tecnologías y métodos propios de la ingeniería en multimedia, acorde con los contextos económico, social y político, en los ámbitos regional, nacional e internacional. </p>
                                </div>

                                <div class="perfil-de-aspirante col-12 col-lg-12">
                                    <h2> Perfil de Aspirante. </h2>
                                    <p> Debe tener pensamiento lógico y crítico, y fuerte inclinación por la tecnología, con habilidad para las matemáticas, la física, la informática, la comunicación y la expresión gráfica. Además, debe tener capacidad de análisis, aprendizaje autónomo, creatividad, responsabilidad, compromiso y liderazgo, que le permitan asumir nuevos retos en su formación profesional. </p>
                                </div>

                                <div class="perfil-de-egresado col-12 col-lg-12">
                                    <h2> Perfil de Egresado. </h2>
                                    <p> El ingeniero en multimedia de la Universidad Militar Nueva Ganada está en capacidad de utilizar los estándares de ingeniería computacionales y de multimedia, para desarrollar productos innovadores en términos de diseño, interactividad, uso, realismo e inteligencia, como cualidades de la calidad de la experiencia para el usuario final. Además, cuenta con la idoneidad para analizar, evaluar e investigar situaciones reales de su campo profesional, de manera crítica y reflexiva, y con compromiso social y ético, con el fin de establecer oportunidades de avance tecnológico y científico en la ingeniería en multimedia, así como con habilidades administrativas y gerenciales, que le posibilitan su integración en el entorno laboral y la creación de empresa. </p>
                                </div>    
                                
                                <div class="sobre-los-20 col-12 col-lg-12">
                                    <h2> Sobre los 20 años </h2>
                                    <p> La carrera de Ingeniería en Multimedia cumple 20 años de ser instaurada en la Universidad Militar Nueva Granada, y como un homenaje a este hecho, se crea esta página, donde tanto estudiantes como profesores de la facultad, e inclusive personas que no son ajenas a la carrera o a la Universidad, podrán explorar diversos de los campos con los que cuenta el programa.</p>
                                    
                                </div>    
                            </div>
                        </div> <!--aaaa-->
                    </div>
                </div>
                </div>
            </div>

            <div id="hora" class="Zona_Horaria">
                <div>
                    <h2 class="main_time" id="time"></h2>
                </div>
            </div>
    </footer>


    <script src="homexd.js"></script>
    <script src="home2.js"></script>
    <script src="main.js"></script>  
</body>
</html>