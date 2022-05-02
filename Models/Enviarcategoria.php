<?php
include('Conexaodb.php');

	$nome_categoria = $_POST['nome_categoria'];

	$insereDados = mysqli_query($conn, "INSERT INTO categorias (nome_categoria) VALUES ('$nome_categoria')");
	echo "<script> alert('Categoria Cadastrada com Sucesso...'); window.location='/Minha-Lojinha/Cadastrarcategoria.php'</script>";
