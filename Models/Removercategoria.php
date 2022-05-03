<?php
	//	Remover Categoria
	include('Conexaodb.php');

	$id_categoria = FILTER_INPUT(INPUT_GET, 'id_categoria', FILTER_SANITIZE_NUMBER_INT);
	if(isset($id_categoria)){
		$removerDados = mysqli_query($conn, "DELETE FROM categorias WHERE id_categoria = '$id_categoria'");
		echo "<script> alert('Categoria Removida com Sucesso...'); window.location='/Minha-Lojinha/listar-categorias.php'</script>";
	}
