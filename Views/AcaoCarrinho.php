<?php
session_start();

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

//Ações para o carrinho
if(isset($_GET['acao'])) {
	//Adicionar produto
	if($_GET['acao'] == 'add') {
		$id_produto = intval(base64_decode($_GET['produto']));
		if(!isset($_SESSION['carrinho'][$id_produto])) {
			$_SESSION['carrinho'][$id_produto] = 1;
		} else {
			$_SESSION['carrinho'][$id_produto] += 1;
		}
	}

	//Remover Produto
	if($_GET['acao'] == 'del') {
		$id_produto = intval(base64_decode($_GET['produto']));
		if(isset($_SESSION['carrinho'][$id_produto])) {
			unset($_SESSION['carrinho'][$id_produto]);
		}
	}

	//Atualizar Produto
	if($_GET['acao'] == 'up') {
		if(is_array($_POST['produto'])) {
			foreach($_POST['produto'] as $id_produto => $qtd) {
				$id_produto = intval($id_produto);
				$qtd = intval($qtd);
				if(!empty($qtd) || $qtd <> 0) {
					$_SESSION['carrinho'][$id_produto] = $qtd;
				} else {
					unset($_SESSION['carrinho'][$id_produto]);
				}
			}
		}
	}
}
?>