<?php

session_start();
$codigo = $_SESSION['codigo'];
echo $codigo;
include 'conecta.php';
$bd = conectar();
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fec_pub = date('Y-m-d');
$idautor = $codigo;
$cad = "INSERT INTO publicacion (titulo,descripcion,fec_pub,idautor) VALUES('$titulo','$descripcion','$fec_pub','$idautor')";
$res = mysql_query($cad);
if ($res) {
   $nomtmp = $_FILES["arc"]["tmp_name"];
$nomarc = $_FILES["arc"]["name"];
$tamarc = $_FILES["arc"]["size"];
$errarc = $_FILES["arc"]["error"];

$id = mysql_insert_id();
//echo "<br>Nombre temporal: $nomtmp";
//echo "<br>Nombre real: $nomarc";
//echo "<br>Tamaño: $tamarc bytes";

if ($errarc == 0) {

    echo "<br>El archivo llegó correctamente!";
    move_uploaded_file($nomtmp, "uploads/" . $id . ".jpg");
    header("Location:autor.php");
//    echo "<br>Imagen cargada:";
   // echo "<br><img src='uploads/".$id.".jpg width='200' height='200'";
} else {
    echo "<br><h3>Error al cargar el archivo</h3>";
}
echo "<br><hr><a href='index.php'>Volver</a>";
} else {
    echo 'Esta mal';
 }

echo "<br><img src='uploads/".$id.".jpg width='200' height='200'";