<?php
include('Conexaodb.php');

	$limite_minimo = $_POST['limite_minimo'];
	$insereDados = mysqli_query($conn, "INSERT INTO limite_minimo (limite_minimo) VALUES ('$limite_minimo')");
	echo "<script> alert('Limite Mínimo Cadastrado com Sucesso...'); window.location='/Minha-Lojinha/administracao.php'</script>";
