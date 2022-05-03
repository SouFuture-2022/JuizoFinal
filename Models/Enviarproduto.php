<?php

	include('Conexaodb.php');

	$nome = $_POST['nome'];
	$nome_categoria = $_POST['nome_categoria'];
	$preco = $_POST['preco'];
	$qtd = $_POST['qtd'];
	$descricao = $_POST['descricao'];
	$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = $_SERVER['DOCUMENT_ROOT'].'/Minha-Lojinha/Upload/';

	move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

	$insereDados = mysqli_query($conn, "INSERT INTO produtos (nome , nome_categoria, preco , qtd , descricao , imagem , data_cadastro)
	VALUES ('$nome' , '$nome_categoria' , '$preco' , '$qtd' , '$descricao' , '$novo_nome', NOW())");
	echo "<script> alert('Produto Cadastrado com Sucesso...'); window.location='/Minha-Lojinha/Cadastrarproduto.php'</script>";
