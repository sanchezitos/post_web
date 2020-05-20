<?php
session_start();
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];
if ($usuario == "" && $contrasena == "") {
    header("Location: index.php");
} else {
    include 'conecta.php';
    $bd = conectar();
    $sql = "Select * from usuario where usuario='$usuario'";
    $res =  mysql_query($sql,$bd);
    $row = mysql_fetch_array($res);
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <div class="registro" id="act_perf">
        <body>
            <h1>Editar perfil</h1>
            <form method="post" action="edt_usu.php">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="" autofocus="" onkeypress="return validarLetras(event),validarEspacio(event)" value="<?php echo $row['nom_usu'] ?>" >
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" required="" autofocus="" onkeypress="return validarNumero(event),validarEspacio"value="<?php echo $row['ape_usu'] ?>" >
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="correo" required="" autofocus="" onkeypress="" value="<?php echo $row['correo'] ?>">
                </div>
                <button type="button" id="edtperf" class="btn btn-default">Actualizar datos</button>
                 </form>
            <div id="erredtper">
                
            </div>
                <hr class="hr">
                <h2>Cambio de contraseña</h2>
                <form action="edtpas_usu.php" method="post">
                <div class="form-group">
                    <label>Contraseña actual</label>
                    <input type="password" class="form-control" id="contrasenaact" name="contrasenaact" placeholder="Contraseña actual" required="" onkeypress="return validarEspacio(event)">
                </div>
                    <div id="coninc"></div>
                <div class="form-group">
                    <label>Contraseña nueva</label>
                    <input type="password" class="form-control" id="contrasenanew" name="contrasenanew" placeholder="Contraseña nueva" required="" onkeypress="return validarEspacio(event)">
                </div>
                    <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input type="password" class="form-control" id="contrasenaconf" name="contrasenaconf" placeholder="Vuelva a escribir su nueva contraseña" required="" onkeypress="return validarEspacio(event)">
                </div>
                    <div  id="erredtcon"></div>
                    <button type="button" id="edtpas_usu" class="btn btn-default">Cambiar</button>
                </form>
                
            
    </div>
</body>
</html>
<script src="js/operaciones.js"></script>
<?php
}
?>
