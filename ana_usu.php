<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fec_ing = date('Y-m-d');
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
include 'conecta.php';
$bd = conectar();
$sql = "Select * from usuario where usuario='$usuario'";
$res = mysql_query($sql,$bd);
$row = mysql_fetch_array($res);
$usuval = $row['usuario'];
if($row){
    echo '1';
}else{

    $reg ="INSERT INTO `usuario` (`idusuario`, `nom_usu`, `ape_usu`, `correo`, `fec_ing`, `usuario`, `contrasena`, `pass_autor`, `pass_admin`) VALUES (NULL, '$nombre', '$apellido', '$correo', '$fec_ing', '$usuario', '$contrasena', NULL, NULL);";
    $res1 = mysql_query($reg,$bd);
    if($res1){
        echo '0';
    }else{
        echo 'Algo esta mal :/';
        echo $nombre;
        echo $apellido;
        echo $correo;
        echo $usuario;
        echo $contrasena;
        
        mysql_error();
    }
}