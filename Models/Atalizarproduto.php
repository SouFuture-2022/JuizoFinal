<?php
	//	Editar Produto
	include('Conexaodb.php');

	$id_produto = $_POST['id_produto'];
	$nome = $_POST['nome'];
	$nome_categoria = $_POST['nome_categoria'];
	$preco = $_POST['preco'];
	$qtd = $_POST['qtd'];
	$descricao = $_POST['descricao'];
	$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = $_SERVER['DOCUMENT_ROOT'].'/Minha-Lojinha/Upload/';

	move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

	$altualizarDados = "UPDATE produtos SET nome = '$nome' , nome_categoria = '$nome_categoria' , preco = '$preco' , qtd = '$qtd' , descricao = '$descricao' , imagem = '$novo_nome' , data_cadastro = NOW() WHERE id_produto = '$id_produto'";
	$resultado_usuario = mysqli_query($conn, $altualizarDados);

	// Encerar Código e Redirecionar Página
	if(mysqli_affected_rows($conn)) {
		echo "<script> alert('Produto Editado com Sucesso...'); window.location='/Minha-Lojinha/Listarprodutos.php'</script>";
	} else {
		echo "<script> alert('Erro ao Editar Produto...'); window.location='Minha-Lojinha/Listarprodutos.php?id_produto = '$id_produto''</script>";
	}
