<?php

	include('Conexaodb.php');

	$num_pedido = $_POST['num_pedido'];
	$situacao = $_POST['situacao'];
	$nome = $_POST['nome'];
	$total = $_POST['total'];
	$forma_pagamento = $_POST['forma_pagamento'];
	$qtdx = $_POST['qtdx'];
	$valor_entregue = $_POST['valor_entregue'];

	$insereDados = mysqli_query($conn, "INSERT INTO vendas (num_pedido ,situacao , nome, total , forma_pagamento , qtdx , valor_entregue)
	VALUES ('$num_pedido' , '$situacao' , '$nome' , '$total' , '$forma_pagamento' , '$qtdx' , '$valor_entregue')");
	echo "<script> alert('Compra Finalizada com Sucesso...'); window.location='/Minha-Lojinha/Index.php'</script>";
