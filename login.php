<?php

session_start();
include 'conecta.php';
$bd = conectar();
$usuario = $_POST["usu"];
$contrasena = $_POST["pas"];

$sql = "Select * from usuario where usuario='$usuario'";
$res = mysql_query($sql, $bd) or die("Problemas al ejecutar la consulta...");
if ($row = mysql_fetch_array($res)) {
    if ($contrasena == $row['contrasena']) {
        $_SESSION["nombre"] = $row['nom_usu'];
        $_SESSION["apellido"] = $row['ape_usu'];
        $_SESSION["codigo"] = $row['idusuario'];
        $_SESSION["usuario"] = $row['usuario'];
        $_SESSION["contrasena"] = $row['contrasena'];
        $_SESSION["pass_autor"] = $row['pass_autor'];
        $_SESSION["pass_admin"] = $row['pass_admin'];
        echo 'usuario.php';
    } else {
        $sql2 = "Select * from usuario where usuario='$usuario'";
        $res2 = mysql_query($sql2, $bd) or die("Problemas al ejecutar la consulta...");
        if ($row2 = mysql_fetch_array($res2)) {
            if ($contrasena == $row2['pass_autor']) {
                $_SESSION["codigo"] = $row2['idusuario'];
                $_SESSION["nombre"] = $row2['nom_usu'];
                $_SESSION["apellido"] = $row2['ape_usu'];
                $_SESSION["codigo"] = $row2['idusuario'];
                $_SESSION["usuario"] = $row2['usuario'];
                $_SESSION["contrasena"] = $row2['contrasena'];
                $_SESSION["pass_autor"] = $row2['pass_autor'];
                $_SESSION["pass_admin"] = $row2['pass_admin'];
                $_SESSION["autor"] = "autor";
                echo 'autor.php';
            } else {
                 $sql3 = "Select * from usuario where usuario='$usuario'";
        $res3 = mysql_query($sql3, $bd) or die("Problemas al ejecutar la consulta...");
        if ($row3 = mysql_fetch_array($res3)) {
            if ($contrasena == $row3['pass_admin']) {
                $_SESSION["nombre"] = $row3['nom_usu'];
                $_SESSION["apellido"] = $row3['ape_usu'];
                $_SESSION["codigo"] = $row3['idusuario'];
                $_SESSION["usuario"] = $row3['contrasena'];
                $_SESSION["pass_autor"] = $row3['pass_autor'];
                $_SESSION["pass_admin"] = $row3['pass_admin'];
                echo 'admin.php';
            } else {
                echo '1';
            }
        } else {
            echo '1';
        }  
            }
        } else {
            echo '1';
        }
    }
} else {
    echo '1';
}


