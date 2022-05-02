<?php
session_start();
include('Conexaodb.php');

	if(isset($_POST['fializar'])) {
		$id_produto = $_POST['id_produto'];
		$nome = $_POST['nome'];
		$qtd = $_POST['qtd'];
		$preco = $_POST['preco'];
		$sub_total = $_POST['sub_total'];
		$total_geral = $_POST['total_geral'];
		$bairro = $_POST['bairro'];

		// Gerar Número Aleatório para o Pedido
		$nums = implode('', range(0, 9));
		$alphaNumeric = $nums;
		$num_pedido = '';
		$len = 9;

		for($i = 0; $i < $len; $i++) {
			$num_pedido .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
		}

		foreach ($nome as $p => $v) {
			$codigo = $id_produto[$p];
			$name = $nome[$p];
			$quantidade = $qtd[$p];
			$pre = $preco[$p];
			$su = $sub_total[$p];

			$insereDados = mysqli_query($conn, "INSERT INTO pedidos (nome , qtd , preco , sub_total , total_geral , num_pedido , data_pedido)
			VALUES ('$name' , '$quantidade' , '$pre' , '$su' , '$total_geral' , '$num_pedido', NOW())");

			$alterarDados = "UPDATE produtos SET qtd = qtd - $quantidade WHERE id_produto = '$codigo'";
			$resultado_usuario = mysqli_query($conn, $alterarDados);
		}

		$tabela = "SELECT usuarios.cidade, usuarios.bairro, fretes.cidade, fretes.bairro, fretes.valor FROM usuarios INNER JOIN fretes
		ON usuarios.bairro = fretes.bairro WHERE usuarios.bairro = '$usuarios.bairro'";
		$verifica = mysqli_query($conn, $tabela);

		if($verifica){
		$busca = mysqli_num_rows($verifica);

		if(($busca) == '0') {
			$listarFrete = mysqli_query($conn, "SELECT * FROM fretes WHERE bairro = '$bairro'");
				while($escrever = mysqli_fetch_array($listarFrete)) {
					$_SESSION['retorno_bairro'] = $bairro;
					$_SESSION['retorno_valor_frete'] = number_format($escrever['valor'], 2, '.', ' ');
					$_SESSION['retorno_numpedido_casa'] = $num_pedido;
					$_SESSION['retorno_total_casa'] = number_format($total_geral + $escrever['valor'], 2, '.', ' ');
				}

					$_SESSION['retorno_numpedido_loja'] = $num_pedido;
					$_SESSION['retorno_total_loja'] = number_format($total_geral, 2, '.', ' ');

			header("Location: /Minha-Lojinha/Finalizarvenda.php");
		} else {
			header("Location: /Minha-Lojinha/Finalizarvenda.php");
		}	// Free result set
		mysqli_free_result($verifica);
		}	// Connection close 
		mysqli_close($conn);
	}
