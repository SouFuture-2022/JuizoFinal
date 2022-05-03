<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
		<h4> Detalhes </h4><a href="administracao.php"> Voltar </a><hr>
		<ol style="color: #FF0000;">
		<li> Verifique o endereço e a forma de pagamento a ser efetuada clicando em <b> 'Buscar Endereço' </b>, onde se localiza o nome do cliente que realizou o pedido. </li>
		<li> Seu estoque é Atualizado automaticamente assim que o pedido é gerado! </li>
		<li> Após a entrega do pedido, confirme o mesmo, clicando em <b>OK</b> ao lado da Data do Pedido. </li>
		</ol>
		<?php 
		if (isset($_GET["nome"])) {
		$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);

		$listarNome = mysqli_query($conn, "SELECT DISTINCT nome FROM vendas WHERE nome = '$nome'");
		while($escrever = mysqli_fetch_array($listarNome)) { ?>

		<!-- Busca de Cliente -->
		<form action="" method="POST" class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" name="busca_endereco" value="<?php echo $escrever['nome']; ?>" placeholder="Busque o Endereço" aria-label="Buscar">
		  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Buscar Endereço </button>
		</form>

		<?php  }} include('Models/Buscarpedido.php'); ?>

		<!-- Busca de Produro -->
		<!-- <form action="" method="POST" class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" name="busca_estoque" placeholder="Busque pelo Produro" aria-label="Buscar">
		  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Buscar Produto </button>
		</form> -->

		<?php include('Models/Buscarestoque.php'); ?>

	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th> N° do Pedido </th>
				<th> Nome do Produto </th>
				<th> Qtd </th>
				<th> Preço </th>
				<th> Sub Total </th>
				<th> Total sem Frete </th>
				<th> Data do Pedido </th>
				<th> Código do Pedido </th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th> N° do Pedido </th>
				<th> Nome do Produto </th>
				<th> Qtd </th>
				<th> Preço </th>
				<th> Sub Total </th>
				<th> Total sem Frete </th>
				<th> Código do Pedido </th>
			</tr>
        </tfoot>
		<?php
		if (isset($_GET["num_pedido"])) {
		$num_pedido = filter_input(INPUT_GET, 'num_pedido', FILTER_SANITIZE_NUMBER_INT);

		$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		//	Setar a Quantidade de Páginas de Itens por Página
		$qnt_result_pg = 4;
		//	Calcular o Início da Vizualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

		$listarDados = mysqli_query($conn, "SELECT * FROM pedidos WHERE num_pedido = '$num_pedido' LIMIT $inicio, $qnt_result_pg");
		while($escrever = mysqli_fetch_array($listarDados)) { ?>
		<tbody>
			<tr>
				<td><font color="#FF0000"><?php echo $escrever['num_pedido']; ?></font></td>
				<td><?php echo $escrever['nome']; ?></td>
				<td><?php echo $escrever['qtd']; ?></td>
				<td> R$<?php echo $escrever['preco']; ?></td>
				<td> R$<?php echo $escrever['sub_total']; ?></td>
				<td><font color="#FF0000"> R$<?php echo $escrever['total_geral']; ?></font></td>
				<td><?php echo date("d/m/Y, h:i:s", strtotime($escrever['data_pedido'])); ?></td>
				<td><a href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#confirmarModal<?php echo $escrever['id_pedido']; ?>"> OK </a></td>
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
			echo "<center><a href='Gerenciarpedido.php?pagina=1&num_pedido=$num_pedido&nome=$nome'>Primeira&nbsp;</a>";

			for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
				if($pag_ant >= 1) {
					echo "<a href='Gerenciarpedido.php?pagina=$pag_ant&num_pedido=$num_pedido&nome=$nome'>$pag_ant</a>";
				}
			}
			echo "&nbsp;$pagina&nbsp;";
  
			for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
				if($pag_dep <= $quantidade_pg) {
					echo "<a href='Gerenciarpedido.php?pagina=$pag_dep&num_pedido=$num_pedido&nome=$nome'>$pag_dep</a>";
				}
			}
			echo "<a href='Gerenciarpedido.php?pagina=$quantidade_pg&num_pedido=$num_pedido&nome=$nome'>&nbsp;Última</a></center>";
		} else { ?>
			<div class="container"><header class="jumbotron my-4"><center style="color: #FF0000;"> N° de Pedido não Encontrado!!! </center></header></div>
		<?php } ?>
	</table>
			<hr>
		</header>
    </div>

	<?php
	$listarDados = mysqli_query($conn, "SELECT * FROM pedidos");
	while($escrever = mysqli_fetch_array($listarDados)) {
	?>
	<!-- Confirmar Entrega do Pedido Modal -->
    <div class="modal fade" id="confirmarModal<?php echo $escrever['id_pedido']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Tem certeza que você deseja confirmar? </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"><p style="color: #FF0000;"> Tenha Atenção antes de confirmar pedido! </p>
		  <p> Confirmando pedido, estas informações irão sumir de sua base de dados. </p></div>
          <div class="modal-footer">
			<form action="Models/Removerpedido.php" method="POST">
			<input type="hidden" name="id_pedido" value="<?php echo $escrever['id_pedido']; ?>">
			<input type="hidden" name="num_pedido" value="<?php echo $escrever['num_pedido']; ?>">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Não </button>
            <button type="submit" class="btn btn-primary"> Sim </button>
			</form>
          </div>
        </div>
      </div>
    </div>

<?php } include('rodape.php'); ?>