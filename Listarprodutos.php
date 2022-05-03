<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Verificar Produtos </h4><hr>
			<!-- <form action="" method="POST" class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" name="busca_produto" placeholder="Busque pelo Nome do Produto" aria-label="Buscar">
				<button class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Buscar </button>
			</form> -->
			<?php include('Models/Buscarproduto.php'); ?>
			<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th> Nome </th>
						<th> Categoria </th>
						<th> Preço </th>
						<th> Qtd </th>
						<th> Descrição </th>
						<th> Imagem </th>
						<th> Editar </th>
						<th> Remover </th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th> Nome </th>
						<th> Categoria </th>
						<th> Preço </th>
						<th> Qtd </th>
						<th> Descrição </th>
						<th> Imagem </th>
						<th> Editar </th>
						<th> Remover </th>
					</tr>
				</tfoot>
				<?php
				$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				//	Setar a Quantidade de Páginas de Itens por Página
				$qnt_result_pg = 3;
				//	Calcular o Início da Vizualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

				$listarDados = mysqli_query($conn, "SELECT * FROM produtos ORDER BY nome LIMIT $inicio, $qnt_result_pg");
				while($escrever = mysqli_fetch_array($listarDados)) { ?>
				<tbody>
					<tr>
						<td><?php echo $escrever['nome']; ?></td>
						<td><?php echo $escrever['nome_categoria']; ?></td>
						<td> R$<?php echo $escrever['preco']; ?></td>
						<td><?php echo $escrever['qtd']; ?></td>
						<td><a href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#ampliardescricao<?php echo $escrever['id_produto']; ?>"> Ampliar </a></td>
						<td><a href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#ampliarimagem<?php echo $escrever['id_produto']; ?>"><img src="Upload/<?php echo $escrever['imagem']; ?>" width="40" height="40"></a></td>
						<td><button class="btn btn-primary" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#editarproduto<?php echo $escrever['id_produto']; ?>">
						<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg></button></td>
						<td><button class="btn btn-primary" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#removerproduto<?php echo $escrever['id_produto']; ?>"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
						<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg></button></td>
					</tr>
				</tbody>
				<?php }
				//	Páginação - Soma a Quantidade de Linhas no Banco de Dados
				$result_pg = "SELECT COUNT(id_produto) AS num_result FROM produtos";
				$resultado_pg = mysqli_query($conn, $result_pg);
				$row_pg = mysqli_fetch_assoc($resultado_pg);
				//	Quantidade de Página
				$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
				//	Limitar os Links Antes e Depois
				$max_links = 2;
					echo "<center><a href='Listarprodutos.php?pagina=1'>Primeira&nbsp;</a>";

					for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
						if($pag_ant >= 1) {
							echo "<a href='Listarprodutos.php?pagina=$pag_ant'>$pag_ant</a>";
						}
					}
					echo "&nbsp;$pagina&nbsp;";
  
					for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
						if($pag_dep <= $quantidade_pg) {
							echo "<a href='Listarprodutos.php?pagina=$pag_dep'>$pag_dep</a>";
						}
					}
					echo "<a href='Listarprodutos.php?pagina=$quantidade_pg'>&nbsp;Última</a></center>";
				?>
			</table>
			</div>
			<hr>
		</header>
    </div>

<?php
	$listarDados = mysqli_query($conn, "SELECT * FROM produtos");
	while($escrever = mysqli_fetch_array($listarDados)) { ?>

<!-- Listar Descrição Modal -->
    <div class="modal fade" id="ampliardescricao<?php echo $escrever['id_produto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Descrição: '<?php echo $escrever['nome']; ?>'!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"><textarea type="text" name="descricao" id="Descrição" class="form-control" placeholder="Descrição"><?php echo $escrever['descricao']; ?></textarea></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Fechar </button>
          </div>
        </div>
      </div>
    </div>

	<!-- Listar Imagem Modal -->
    <div class="modal fade" id="ampliarimagem<?php echo $escrever['id_produto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Imagem: '<?php echo $escrever['nome']; ?>'!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"><center><img src="Upload/<?php echo $escrever['imagem']; ?>" width="300" height="300"></center></div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Fechar </button>
          </div>
        </div>
      </div>
    </div>

<!-- Editar Produto Modal -->
    <div class="modal fade" id="editarproduto<?php echo $escrever['id_produto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Editar '<?php echo $escrever['nome']; ?>'!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
		  <form action="Models/Atalizarproduto.php" method="POST" enctype="multipart/form-data">
          <div class="modal-body">
			<div class="form-group">
				<div class="form-label-group">
					<p style="color: #FF0000;"> Atenção: O campo <b>preço</b>, deve constar nesse formato: 00:00 / ex 30.00 </p>
				</div>
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="hidden" name="id_produto" value="<?php echo $escrever['id_produto']; ?>">
						<input type="text" name="nome" id="Nome" value="<?php echo $escrever['nome']; ?>" class="form-control" placeholder="Nome" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<!-- <input type="text" name="preco" id="Preco" value="<?php echo $escrever['preco']; ?>" class="form-control" placeholder="R$ Preço" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required"> -->
						<input type="text" name="preco" id="Preco" value="<?php echo $escrever['preco']; ?>" class="form-control" placeholder="R$ Preço: ex. 00.00" required="required">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="nome_categoria" id="Nomecategoria" value="<?php echo $escrever['nome_categoria']; ?>" class="form-control" placeholder="Quantidade" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="number" name="qtd" id="Quantidade" value="<?php echo $escrever['qtd']; ?>" class="form-control" placeholder="Quantidade" required="required">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<textarea type="text" name="descricao" id="Descrição" class="form-control" placeholder="Descrição" required="required"><?php echo $escrever['descricao']; ?></textarea>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="file" name="imagem" id="Imagem" class="form-control" placeholder="Imagem">
					  </div>
					</div>
				</div>
			</div>
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Fechar </button></form>
			<button class="btn btn-primary" type="submit"> Editar </button>
          </div>
        </div>
      </div>
    </div>

<!-- Remove Produto Modal -->
    <div class="modal fade" id="removerproduto<?php echo $escrever['id_produto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Tem certeza que você deseja remover '<?php echo $escrever['nome']; ?>'?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"> Selecione "Sim" para remover ou "Não" para caso tenha clicado por engano. </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Não </button>
            <a class="btn btn-primary" href="Models/Removerproduto.php?id_produto=<?php echo $escrever['id_produto']; ?>"> Sim </a>
          </div>
        </div>
      </div>
    </div>

<?php } include('rodape.php'); ?>