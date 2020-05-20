<?php
include 'login.php';
$usuario = $_SESSION['usuario'];
function verificar() {
    if ($usuario == "") {
        return 0;
    }
    return 1;
    
}

?>