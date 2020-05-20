$(document).ready(function () {
    $("#envia").click(function () {
        var usuario = $("#usuario").val();
        var contrasena = $("#contrasena").val();
        if (usuario != "" && contrasena != "") {
            $.ajax({
                url: 'login.php',
                method: 'post',
                data: {usu: usuario, pas: contrasena},
                success: function (msg) {
                    if (msg == '1') {
                        $("#error").html("<div class='alert alert-danger' role='alert'>Datos incorrectos</div>");
                    } else {
                        window.location = msg;
                    }
                }
            });
        } else {
            $("#error").html("<div class='alert alert-danger' role='alert'>Campos vacios, llenar datos</div>");
        }
    });

    $("#edtperf").click(function () {
        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var correo = $("#correo").val();
        if (nombre != "" && apellido != "" && correo != "") {
              if (!expr.test(correo)) {
                $("#reg").html("<div class='alert alert-warning' role='alert'>Error: La dirección de correo " + correo + " es incorrecta.</div>")
            }else{
            $.ajax({
                url: 'edt_usu.php',
                method: 'post',
                data: {nombre: nombre, apellido: apellido, correo: correo},
                success: function (msg) {
                    if (msg == '1') {
                        $("#act_perf").html("<div class='alert alert-danger' role='alert'>No se puedieron actualizar los datos</div>");
                    } else {
                        $("#act_perf").html("<div class='alert alert-success' role='alert'><span>Datos actualizados</span> correctamente!!</div>");
                    }
                }
            });
        }
        } else {
            $("#erredtper").html("<div class='alert alert-danger' role='alert'>Campos vacios, por favor llenar datos</div>");
        }
    });

    $("#edtpas_usu").click(function () {
        var contrasenaact = $("#contrasenaact").val();
        var contrasenanew = $("#contrasenanew").val();
        var contrasenaconf = $("#contrasenaconf").val();
        var con = contrasenanew.length;
        if (contrasenaact != "" && contrasenanew != "" && contrasenaconf != "") {
            if (contrasenanew != contrasenaconf) {
                $("#erredtcon").html("<div class='alert alert-warning' role='alert'><span>Las contraseñas no coinciden</span> Verifique su nueva contraseña</div>");
            } else {

                if (con < 7) {
                    $("#erredtcon").html("<div class='alert alert-warning' role='alert'><span>Su contraseña debe tener como minimo 7 caracteres</div>");
                } else{
                    $.ajax({
                        url: 'edtpas_usu.php',
                        method: 'post',
                        data: {contrasenaact: contrasenaact, contrasenanew: contrasenanew, contrasenaconf: contrasenaconf},
                        success: function (msg) {
                            if (msg == '1') {
                                $("#erredtcon").html("<div class='alert alert-danger' role='alert'><n>Su contraseña actual no coincide con la indicada</n></div>");
                            } else {
                                $("#act_perf").html("<div class='alert alert-success' role='alert'><span>Contraseña actualizada</span>!!</div>");
                            }
                        }
                    });
                }
            }
        } else {
            $("#erredtcon").html("<div class='alert alert-danger' role='alert'>Campos vacios, por favor llenar datos</div>");
        }
    });


    $("#registrar").click(function () {

        expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var correo = $("#correo").val();
        var usuario = $("#usuario").val();
        var contrasena = $("#contrasena").val();
        var con = contrasena.length;
        var contrasenaver = $("#contrasenaver").val();

        if (nombre != "" && apellido != "" && correo != "" && usuario != "" && contrasena != "" && contrasenaver != "") {
            if (!expr.test(correo)) {
                $("#reg").html("<div class='alert alert-warning' role='alert'>Error: La dirección de correo " + correo + " es incorrecta.</div>")
            } else {
                if (contrasena != contrasenaver) {
                    $("#reg").html("<div class='alert alert-warning' role='alert'><span>Las contraseñas no coinciden</span> Verifique su nueva contraseña</div>");
                } else {
                    if (con < 7) {
                        $("#reg").html("<div class='alert alert-warning' role='alert'><span>Su contraseña debe tener como minimo 7 caracteres</div>");
                    } else {
                        $.ajax({
                            url: 'ana_usu.php',
                            method: 'post',
                            data: {nombre: nombre, apellido: apellido, correo: correo, usuario: usuario, contrasena: contrasena},
                            success: function (msg) {
                                if (msg == '1') {
                                    $("#reg").html("<div class='alert alert-danger' role='alert'><n>El nombre de usuario ya esta en uso, escoge otro</n></div>");
                                } else {
                                    $(".registro").html("<div class='alert alert-success' role='alert'>Usuario registrado exitosamente!!</div>Vuelve a la página de incio e inicia tu sesión");
                                }
                            }
                        });
                    }
                }
            }
        } else {
            $("#reg").html("<div class='alert alert-danger' role='alert'>Campos vacios, Es necesario llenar los datos para el registro</div>");
        }
    });
});
