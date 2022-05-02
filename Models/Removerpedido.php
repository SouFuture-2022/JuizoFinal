<?php
	//	Remover Categoria
	include('Conexaodb.php');

	$id_pedido = FILTER_INPUT(INPUT_POST, 'id_pedido', FILTER_SANITIZE_NUMBER_INT);
	$num_pedido = FILTER_INPUT(INPUT_POST, 'num_pedido', FILTER_SANITIZE_NUMBER_INT);

	if(isset($id_pedido)){
		$removerDados = mysqli_query($conn, "DELETE FROM pedidos WHERE id_pedido = '$id_pedido'");
		echo "<script> alert('Pedido Confirmado com Sucesso...'); window.location='/Minha-Lojinha/gerenciar-pedido.php?num_pedido=".$num_pedido."'</script>";
	}
