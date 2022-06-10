<?php
    session_start();

    $logar = $_SESSION['logar'] ?? false;

    if($logar){
        require_once __DIR__ . "./includes/Cabecalhos/menucliente.php";
    
    } else {
        require_once __DIR__ . "./includes/Cabecalhos/menu.php";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Não há ofertas disponivéis no momento</h2></center>
</body>
</html>