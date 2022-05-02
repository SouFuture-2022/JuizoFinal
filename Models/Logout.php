<?php
    session_start();   
    unset(
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioNiveisAcessoId'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha']
    );   
    $_SESSION['logindeslogado'] = "<center><font color='red'> Você Saiu </center></font>";
    //redirecionar o usuario para a página de login
    header("Location: ../Login.php");
