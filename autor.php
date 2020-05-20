<?php
session_start();
include 'conecta.php';
$bd = conectar();
$query = "SELECT * FROM publicacion";
$res = mysql_query($query);
$codigo = $_SESSION['codigo'];
$usuario = $_SESSION['usuario'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$autor = $_SESSION['pass_autor'];
$aut = $_SESSION['autor'];
if ($aut == "") {
    header("Location: index.php");
}
?>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <div>
                <h1>hola que hacen</h1> 
                <div id="logout">
                    <a class="btn btn-default" href='cerrar.php'>Cerrar sesión</a>
                </div>
            </div>
            <div class="container">
                <header>
                    <ul class="nav nav-pills">
                        <li role="presentation" class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Inicio</a></li>
                        <li role="presentation"><a href="#">Programas</a></li>
                        <li role="presentation"><a href="#">Juegos</a></li>
                        <li role="presentation"><a href="#">Peliculas</a></li>
                    </ul>
                </header>
            </div>
        </div>
        <div class="body">
            <br>

            <div class="contenedor" id="contenedor">
                <div class="izquierdo" id="izquierdo">
                    <h1><?php echo $nombre . " " . $apellido; ?></h1><b><span class="letra_azul">(Usted esta en su perfil</span><br><span class="letra_azul"> de autor)</span></b>
                </div>
                <div class="opciones" id="opciones">
                    <div class="list-group">
                        <button type="button" class="list-group-item" onclick="return miperf(event)">Mi perfil</button>
                        <button type="button" class="list-group-item" onclick="return edtperf(event)">Editar perfil</button>
                        <button type="button" class="list-group-item" onclick="return eliperf(event)">Eliminar cuenta</button>
                        <button type="button" class="list-group-item" onclick="return agrpub(event)">Agregar publicación</button>
                        <button type="button" class="list-group-item">Editar publicación</button>
                        <button type="button" class="list-group-item">Mostar mis publicaciones</button>
                        <button type="button" class="list-group-item">Reportar usuarios</button>
                    </div>
                </div>
                <div  class="derecho" id="derecho">
                    <?php
                    while ($row = mysql_fetch_array($res)) {
                        echo '<h1 class="letra_azul"><a >' . $row['titulo'] . '</a></h1>'.
                             '<span>Fecha de publicación: </span><b><i><span class="letra_azul">'.$row['fec_pub'].'</span></i></b> || <span>Publicado por: </span><b><i><span class="letra_azul">'.$usuario.'</span></i></b> || <span>Categoria: </span><b><i><span class="letra_azul">'.$row['categoria'].'</span></i></b><br><br>'.
                             '<img class="img" src="uploads/'.$row['idpublicacion'].'.jpg"><br><br>
                              <h4 class="letra_azul">Descripción</h4>
                              <div class="desc">
                              <p class="letra_negra">'.$row['descripcion'].'</p>
                              </div><br>
                              <div id="ver"><input type="button" class="btn btn-default" value="Continuar"></div>
                              <hr>
                                
                             '                                ;
                    }
                    ?>

                </div>
            </div>
        </div>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/cod.js"></script>
    <script src="js/operaciones.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/modules/exporting.js"></script>


</html>