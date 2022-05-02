<?php
include('Conexaodb.php');

	$cidade = $_POST['cidade'];
	$bairro = $_POST['bairro'];
	$valor = $_POST['valor'];

	$insereDados = mysqli_query($conn, "INSERT INTO fretes (cidade , bairro , valor) VALUES ('$cidade' , '$bairro' , '$valor')");
	echo "<script> alert('Frete Cadastro com Sucesso...'); window.location='/Minha-Lojinha/Cadastrarfrete.php'</script>";
