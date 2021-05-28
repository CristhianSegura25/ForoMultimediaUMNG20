<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href ="stylemostra.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" >
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
        <title>Mostrar Base de Datos</title>
    </head>
    
    <body>
        <div class="container">
            <div class="barra-superior">
                <div class="texto-menu">
                    <h2> Menu </h2> 
                </div>

                <div class="botones-bs">
                <a class="boton p-2" href="foro.php"> Foro </a>
                <a class="boton" href="home.php"> Home </a>
                <a class="boton" href="login.php">Login</a>
                </div>
            </div>
            <div class="tablita">
            <?php
                require_once "conexionadb.php";
                $sql=$conn->query("SELECT * FROM Lista_Preguntas");
                if(mysqli_num_rows($sql)>0){ 
                    ?>
                    <table>
                        <thead>
                            <th>Seccion</th>
                            <th>Titulo</th>
                            <th>Pregunta</th>
                            <th>Autor</th>
                            <th>Respuesta</th>
                        </thead>
                        <tbody>
                            <?php while ($row=mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $row["tipo"]?></td>
                                    <td><?php echo $row["titulo"]?></td>
                                    <td><?php echo $row["pregunta"]?></td>
                                    <td><?php echo $row["autor"]?></td>
                                    <td><?php echo $row["respuesta"]?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php }
            ?> 
            </div>
            <div class="footer">
             PREGUNTAS DE LA BASE DE DATOS 
            </div>
        </div>
    </body>
</html>
