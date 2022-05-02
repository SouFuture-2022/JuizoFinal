<?php
	include("Conexaodb.php");

	//	Alterar Estoque de Acordo com o ID Selecionado
	$id_produto = filter_input(INPUT_POST, 'id_produto', FILTER_SANITIZE_NUMBER_INT);
	$qtd = filter_input(INPUT_POST, 'qtd', FILTER_SANITIZE_NUMBER_INT);

	$altualizarDados = "UPDATE produtos SET qtd = '$qtd' WHERE id_produto = '$id_produto'";
	$resultado_usuario = mysqli_query($conn, $altualizarDados);

	// Encerar Código e Redirecionar Página
	if(mysqli_affected_rows($conn)) {
		echo "<script> alert('Estoque Atualizado com Sucesso...'); window.location='/Minha-Lojinha/Gerenciarestoque.php'</script>";
	} else {
		echo "<script> alert('Erro ao Atualizar Estoque...'); window.location='Minha-Lojinha/Gerenciarestoque.php?id_produto = '$id_produto''</script>";
	}
