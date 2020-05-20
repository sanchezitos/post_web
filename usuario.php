<?php
 error_reporting (0);
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
$autor =  $_SESSION['autor'];
if ($usuario == "" && $contrasena == "") {
    header("Location: index.php");
} else {
    if($autor!=""){
          header("Location: autor.php");
    }else{
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
                            <li role="presentation"><a href="#">Profile</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                            <li role="presentation"><a href="#">Messages</a></li>
                        </ul>
                    </header>
                </div>
            </div>
            <div class="body">
                <br>

                <div class="contenedor" id="contenedor">
                    <div class="izquierdo" id="izquierdo">
                        <h1>Bienvenido</h1><span> <?php echo $_SESSION['usuario']; ?></span>
                    </div>
                    <div class="opciones" id="opciones">
                        <div class="list-group">
                            <button type="button" class="list-group-item" onclick="return miperf(event)">Mi perfil</button>
                            <button type="button" class="list-group-item" onclick="return edtperf(event)">Editar perfil</button>
                            <button type="button" class="list-group-item" onclick="return eliperf(event)">Eliminar cuenta</button>
                            <button type="button" class="list-group-item">Contactar administrador</button>
                        </div>
                    </div>
                    <div  class="derecho" id="derecho">
                        
                    </div>
                </div>
            </div>
        </body>
        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/cod.js"></script>
        <script src="js/operaciones.js"></script>


    </html>
    <?php
    }
}
?>