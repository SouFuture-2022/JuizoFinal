<?php

include('Conexaodb.php');

	//	SISTEMA DE BUSCA
	//	Linha para capturar a palavra digitada.
	if(isset($_POST['busca_produto'])) {
		$busca_produto = $_POST['busca_produto'];

	//	Caso o resultado seja vazio não irá executa o código e retornará a mensagem de aviso.
	if($busca_produto == "" or $busca_produto == " ") { ?>
		<div class="container"><header class="jumbotron my-4"><center><strong><font color="red"> Digite algo para a busca_produto! </font></strong></center></header></div>
	<?php
	} else {
	//	Toda vez que for encontrado um espaço na palabra busca_produto irá por um espaço no meio.
		$busca_divida = explode(' ', $busca_produto);
		$quant = count($busca_divida);
		$id_mostrado = array("");

	//	Nesse for terá um loop para cada palavra no banco de bados.
	for($i = 0; $i < $quant; $i++) {
		$pesquisa = $busca_divida[$i];
		$sql = mysqli_query($conn, "SELECT * FROM produtos WHERE nome LIKE '%$busca_produto%' ORDER BY nome");

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
		$nome_categoria = $linha['nome_categoria'];
		$preco = $linha['preco'];
		$qtd = $linha['qtd'];
		$descricao = $linha['descricao'];
		$id_produto = $linha['id_produto'];

	//	Se retorna verdade ele mostra, caso contrário não mostra.
	if(!array_search($id_produto, $id_mostrado)) { // Exibe o resultado.?>

	<div class="container">
	<header class="jumbotron my-4">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th> Nome </th>
				<th> Categoria </th>
				<th> Preço </th>
				<th> Quantidade </th>
				<th> Descrição </th>
				<th> Verificar Produto </th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th> Nome </th>
				<th> Categoria </th>
				<th> Preço </th>
				<th> Quantidade </th>
				<th> Descrição </th>
				<th> Verificar Produto </th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td><?php echo $nome; ?></td>
				<td><?php echo $nome_categoria; ?></td>
				<td><?php echo $preco; ?></td>
				<td><?php echo $qtd; ?></td>
				<td><?php echo $descricao; ?></td>
				<td><a href="produto?id_produto=<?php echo $id_produto; ?>"> Acessar! </a></td>
			</tr>
		</tbody>
		</table>
	</header>
	</div>

	<?php
	array_push($id_mostrado, $id_produto);
	}}
	}//	else
	}//	for
	}//	else campos vazio
	}//if botao pressionado