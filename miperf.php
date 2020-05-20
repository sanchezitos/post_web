<?php

session_start();
$usuario = $_SESSION['usuario'];
include 'conecta.php';
$bd = conectar();
$sql = "select * from usuario where usuario='$usuario'";
$res = mysql_query($sql);
if ($res) {
    $row = mysql_fetch_array($res);
    echo '<div class="panel-footer">
            <h2>' . $row["nom_usu"] . " " . $row["ape_usu"] . '</h2>
            <h4>Correo </h4><span>' . $row["correo"] . '</span>   
            <hr>
            <h4>Miembro desde </h4><span>' . $row["fec_ing"] . '</span>   
            <hr>
            <h4>Nombre de usuario </h4><span>' . $row["usuario"] . '</span>   
            <hr>
           </div>';
}