<?php

	include('Conexaodb.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cpf = $_POST['cpf'];
	$nascimento = $_POST['nascimento'];
	$sexo = $_POST['sexo'];
	$login = 'login';
	$senha = 'senha';
	$num = $_POST['num'];
	$cep = $_POST['cep'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$ibge = $_POST['ibge'];
	$niveis_acesso_id = 2;

	$insereDados = mysqli_query($conn, "INSERT INTO usuarios (nome , email , telefone , cpf , nascimento , sexo , login , senha , num , cep , rua , bairro , cidade , uf , ibge , niveis_acesso_id , data_cadastro)
	VALUES ('$nome' , '$email' , '55$telefone' , '$cpf' , '$nascimento' , '$sexo' , '$login', md5('$senha') , '$num' , '$cep' , '$rua' , '$bairro' , '$cidade' , '$uf', '$ibge' , '$niveis_acesso_id' , NOW())");
	echo "<script> alert('Cadastro Realizado com Sucesso...'); window.location='/Minha-Lojinha/Index.php'</script>";
