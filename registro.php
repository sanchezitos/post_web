<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <div class="registro">
        <body>

            <h1>Registrate</h1>
            <form method="post" action="ana_usu.php">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="" autofocus="" onkeypress="return validarEspacio(event)" >
                </div>
                <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required="" autofocus="" onkeypress="return validarEspacio(event)" >
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo" required="" autofocus="" onkeypress="return validarEmail(correo:correo)" >
                </div>
                <hr class="hr">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="" autofocus="" onkeypress="return validarEspacio(event)" >
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required="" onkeypress="return validarEspacio(event)">
                </div>
                <div class="form-group">
                    <label>Verificar contraseña</label>
                    <input type="password" class="form-control" id="contrasenaver" name="contrasenaver" placeholder="Vuelva a escribir su contraseña" required="" onkeypress="return validarEspacio(event)">
                </div>
                <div id="reg">
                    
                </div>
                <button type="button" id="registrar" class="btn btn-default">Registrar</button>
                <button type="button" id="volver" class="btn btn-default" onClick="location.href = 'index.php'">Volver</button>

            </form>
    </div>
</body>
<script src="js/operaciones.js"></script>
</html>
