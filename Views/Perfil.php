<?php
    session_start();

    $logar = $_SESSION['logar'] ?? false;

    if($logar){
        require_once __DIR__ . "./includes/Cabecalhos/menucliente.php";
    
    } else {
        require_once __DIR__ . "./includes/Cabecalhos/menu.php";
    }

?>