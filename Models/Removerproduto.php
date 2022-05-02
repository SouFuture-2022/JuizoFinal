<?php
	//	Remover Produto
	include('Conexaodb.php');

	$id_produto = FILTER_INPUT(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);
	if(isset($id_produto)){
		$removerDados = mysqli_query($conn, "DELETE FROM produtos WHERE id_produto = '$id_produto'");
		echo "<script> alert('Produto removido com Sucesso...'); window.location='/Minha-Lojinha/listar-produtos.php'</script>";
	}
