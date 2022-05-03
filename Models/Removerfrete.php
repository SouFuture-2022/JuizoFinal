<?php
	//	Remover Frete
	include('Conexaodb.php');

	$id_frete = FILTER_INPUT(INPUT_GET, 'id_frete', FILTER_SANITIZE_NUMBER_INT);
	if(isset($id_frete)) {
		$removerDados = mysqli_query($conn, "DELETE FROM fretes WHERE id_frete = '$id_frete'");
		echo "<script> alert('Frete Removido com Sucesso...'); window.location='/Minha-Lojinha/Listarfretes.php'</script>";
	}
