<?php
session_start();

$alertcart = $_GET['alertcart'];

if(isset($alertcart)) {
    $_SESSION['retorno_msg'] = '
	<div class="alert alert-danger" role="alert">
		É Necessário estar Logado para Finalizar sua Compra!
	</div>
    ';
    header("Location: ../Carrinho.php");
}