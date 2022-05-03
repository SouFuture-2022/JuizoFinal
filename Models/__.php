<?php

	include('Conexaodb.php');

	$nome = $_POST['nome'];
	

	$insereDados = mysqli_query($conn, "INSERT INTO enderecos (nome)
	VALUES ('$nome')");
	echo "<script> alert('Cadastro Realizado com Sucesso...'); window.location='/Minha-Lojinha/index.php'</script>";
