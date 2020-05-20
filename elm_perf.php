<?php
session_start();
$usuario = $_SESSION['usuario'];
include 'conecta.php';
$bd = conectar();
$sql = "Delete from usuario where usuario='$usuario'";
$res = mysql_query($sql,$bd);
if($res){
    session_destroy();
    header("Location:index.php"); 
}else{
    echo 'No funciona'.$usuario;
}