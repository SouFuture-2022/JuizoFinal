<?php

include('Conexaodb.php');

	//	SISTEMA DE BUSCA
	//	Linha para capturar a palavra digitada.
	if(isset($_POST['busca_estoque'])) {
		$busca_estoque = $_POST['busca_estoque'];

	//	Caso o resultado seja vazio não irá executa o código e retornará a mensagem de aviso.
	if($busca_estoque == "" or $busca_estoque == " ") { ?>
		<div class="container"><header class="jumbotron my-4"><center><strong><font color="red"> Digite algo para a busca_estoque! </font></strong></center></header></div>
	<?php
	} else {
	//	Toda vez que for encontrado um espaço na palabra busca_estoque irá por um espaço no meio.
		$busca_divida = explode(' ', $busca_estoque);
		$quant = count($busca_divida);
		$id_mostrado = array("");

	//	Nesse for terá um loop para cada palavra no banco de bados.
	for($i = 0; $i < $quant; $i++) {
		$pesquisa = $busca_divida[$i];
		$sql = mysqli_query($conn, "SELECT * FROM categorias LEFT JOIN produtos ON categorias.nome_categoria = produtos.nome_categoria WHERE categorias.nome_categoria LIKE '%$busca_estoque%' AND qtd <= 5 ORDER BY categorias.nome_categoria");

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
				<th><font color="#FF0000"> Categoria </font></th>
				<th> Preço </th>
				<th> Quantidade </th>
				<th> Descrição </th>
				<th> - </th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th> Nome </th>
				<th><font color="#FF0000"> Categoria </font></th>
				<th> Preço </th>
				<th> Quantidade </th>
				<th> Descrição </th>
				<th> - </th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td><?php echo $nome; ?></td>
				<td><font color="#FF0000"><?php echo $nome_categoria; ?></font></td>
				<td><?php echo $preco; ?></td>
				<td><form action="Models/Atalizarestoque.php" method="POST">
				<input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
				<input type="number" name="qtd" value="<?php echo $qtd; ?>" class="form-control"></td>
				<td><a href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#ampliardescricao<?php echo $id_produto; ?>"> Ampliar </a></td>
				<td><button class="btn btn-primary" type="submit" title="Atualizar"> Atualizar </button></form></td>
			</tr>
		</tbody>
		</table>
	</header>
	</div>

	<!-- Listar Descrição Modal -->
    <div class="modal fade" id="ampliardescricao<?php echo $id_produto; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Descrição: '<?php echo $nome; ?>'!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"><textarea type="text" name="descricao" id="Descrição" class="form-control" placeholder="Descrição"><?php echo $descricao; ?></textarea></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Fechar </button>
          </div>
        </div>
      </div>
    </div>

	<?php
	array_push($id_mostrado, $id_produto);
	}}
	}//	else
	}//	for
	}//	else campos vazio
	}//if botao pressionado