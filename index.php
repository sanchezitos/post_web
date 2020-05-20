<?php
 error_reporting (0);
session_start();

if (($_SESSION['usuario']) != '' && ($_SESSION['contrasena']) != '') {
    header("Location:usuario.php");
    
} else  
    if(($_SESSION['pass_autor'])!='' &&  ($_SESSION['usuario']) !=''){
    header("Location:autor.php");
}else{
    ?>

    <html>
        <head>
            <link href="css/bootstrap.css" rel="stylesheet">
            <meta charset="UTF-8">
            <title></title>

        </head>
        <body>
            <div >
                <div>
                    <h1>hola que hacen</h1> 
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
                        <h1>Acceder</h1>

                        <form action="login.php" method="post" >
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usu" placeholder="Usuario" required="" autofocus="" onkeypress="return validarEspacio(event)" >
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" name="pas" placeholder="Contraseña" required="" onkeypress="return validarEspacio(event)">
                            </div>
                            <div id="error">

                            </div>
                            <button type="button" id="envia" class="btn btn-default">Entrar</button>
                            <button type="button" id="registrarse" class="btn btn-default" onclick="return registro(event)">Registrarse</button>

                        </form>

                    </div>
                    asdfsad


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
?>
