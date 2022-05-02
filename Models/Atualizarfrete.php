<?php
	include("Conexaodb.php");

	//	Alterar Frete de Acordo com o ID Selecionado
	$id_frete = filter_input(INPUT_POST, 'id_frete', FILTER_SANITIZE_NUMBER_INT);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);

	$altualizarDados = "UPDATE fretes SET cidade = '$cidade' , bairro = '$bairro' , valor = '$valor' WHERE id_frete = '$id_frete'";
	$resultado_usuario = mysqli_query($conn, $altualizarDados);

	// Encerar Código e Redirecionar Página
	if(mysqli_affected_rows($conn)) {
		echo "<script> alert('Frete Editado com Sucesso...'); window.location='/Minha-Lojinha/Listarfretes.php'</script>";
	} else {
		echo "<script> alert('Erro ao Editar Frete...'); window.location='Minha-Lojinha/Listarfretes.php?id_frete = '$id_frete''</script>";
	}
