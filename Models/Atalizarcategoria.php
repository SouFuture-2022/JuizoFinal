<?php
	include("Conexaodb.php");

	//	Alterar Categoria de Acordo com o ID Selecionado
	$id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_SANITIZE_NUMBER_INT);
	$nome_categoria = filter_input(INPUT_POST, 'nome_categoria', FILTER_SANITIZE_STRING);

	$altualizarDados = "UPDATE categorias SET nome_categoria = '$nome_categoria' WHERE id_categoria = '$id_categoria'";
	$resultado_usuario = mysqli_query($conn, $altualizarDados);

	// Encerar Código e Redirecionar Página
	if(mysqli_affected_rows($conn)) {
		echo "<script> alert('Categoria Editada com Sucesso...'); window.location='/Minha-Lojinha/Listarcategorias.php'</script>";
	} else {
		echo "<script> alert('Erro ao Editar Categoria...'); window.location='Minha-Lojinha/Listarcategorias.php?id_categoria = '$id_categoria''</script>";
	}
