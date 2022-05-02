<?php

include('Conexaodb.php');

	//	SISTEMA DE BUSCA
	//	Linha para capturar a palavra digitada.
	if(isset($_POST['busca_endereco'])) {
		$busca_endereco = $_POST['busca_endereco'];

	//	Caso o resultado seja vazio não irá executa o código e retornará a mensagem de aviso.
	if($busca_endereco == "" or $busca_endereco == " ") { ?>
		<div class="container"><header class="jumbotron my-4"><center><strong><font color="red"> Digite algo para a busca_endereco! </font></strong></center></header></div>
	<?php
	} else {
	//	Toda vez que for encontrado um espaço na palabra busca_endereco irá por um espaço no meio.
		$busca_divida = explode(' ', $busca_endereco);
		$quant = count($busca_divida);
		$id_mostrado = array("");

	//	Nesse for terá um loop para cada palavra no banco de bados.
	for($i = 0; $i < $quant; $i++) {
		$pesquisa = $busca_divida[$i];
		$sql = mysqli_query($conn, "SELECT * FROM usuarios LEFT JOIN vendas ON usuarios.nome = vendas.nome WHERE usuarios.nome LIKE '%$busca_endereco%' ORDER BY usuarios.nome");

	//	Vai contar quantas linhas a variável sql puxou.
		$quant_campos = mysqli_num_rows($sql);

	if($quant_campos == 0) { ?>
		<div class="container"><header class="jumbotron my-4"><center><strong><font color="red"> Nenhum resultado obtido! </font></strong></center></header></div>
	<?php
	} else {
	//	A função mysql_fetch_array retorna todos os valores puxados da sql no banco.
	while($linha = mysqli_fetch_array($sql)) {
	//	Confere se o id já está no array/pesquisa, para não repeti a pesquisa no resultado.
		$nome = $linha['nome'];
		$num = $linha['num'];
		$cep = $linha['cep'];
		$rua = $linha['rua'];
		$bairro = $linha['bairro'];
		$cidade = $linha['cidade'];
		$uf = $linha['uf'];
		$situacao = $linha['situacao'];
		$total = $linha['total'];
		$forma_pagamento = $linha['forma_pagamento'];
		$qtdx = $linha['qtdx'];
		$valor_entregue = $linha['valor_entregue'];
		$id_usuario = $linha['id_usuario'];
		@$troco = $linha['valor_entregue'] - $linha['total'];

	//	Se retorna verdade ele mostra, caso contrário não mostra.
	if(!array_search($id_usuario, $id_mostrado)) {	// Exibe o resultado.?>

	<div class="container">
	<header class="jumbotron my-4">
		<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th> Nome </th>
				<th> N° </th>
				<th> Rua </th>
				<th> Bairro </th>
				<th> Cidade </th>
				<th> Situação </th>
				<th> Total com Frete </th>
				<th> Forma de Pagamento </th>
				<th> Qtd </th>
				<th> Valor Entregue </th>
				<th> Troco </th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th> Nome </th>
				<th> Nº </th>
				<th> Rua </th>
				<th> Bairro </th>
				<th> Cidade </th>
				<th> Situação </th>
				<th> Total com Frete </th>
				<th> Forma de Pagamento </th>
				<th> Qtd </th>
				<th> Valor Entregue </th>
				<th> Troco </th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td><?php echo $nome; ?></td>
				<td><?php echo $num; ?></td>
				<td><?php echo $rua; ?></td>
				<td><?php echo $bairro; ?></td>
				<td><?php echo $cidade; ?></td>
				<td><?php echo $situacao; ?></td>
				<td><?php echo $total; ?></td>
				<td><?php echo $forma_pagamento; ?></td>
				<td><?php if ($qtdx == 0 or $qtdx == '') { echo 'Avista'; } else { echo $qtdx; } ?></td>
				<td><?php echo $valor_entregue; ?></td>
				<td><?php echo $troco = number_format($troco, 2, ',', '.'); ?></td>
			</tr>
		</tbody>
		</table>
		</div>
	</header>
	</div>

	<?php
	array_push($id_mostrado, $id_usuario);
	}}
	}//	else
	}//	for
	}//	else campos vazio
	}//if botao pressionado