<?php include('menuadmin.php');?>

    <div class="col-lg-9">
    <header class="jumbotron my-4">
	<h4> Visão Geral | Pedidos do mês Vigente </h4><hr>
		<div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th> N° do Pedido </th>
					<th> Data do Pedido </th>
					<th> Cliente </th>
					<th> Total sem Frete </th>
					<th> Ver mais </th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th> N° do Pedido </th>
					<th> Data do Pedido </th>
					<th> Cliente </th>
					<th> Total sem Frete </th>
					<th> Ver mais </th>
				</tr>
			</tfoot>
			<?php
			$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			//	Setar a Quantidade de Páginas de Itens por Página
			$qnt_result_pg = 3;
			//	Calcular o Início da Vizualização
			$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

			$listarDados = mysqli_query($conn, "SELECT DISTINCT pedidos.num_pedido, pedidos.data_pedido, vendas.nome, vendas.total FROM pedidos
			LEFT JOIN vendas ON pedidos.num_pedido = vendas.num_pedido ORDER BY pedidos.data_pedido LIMIT $inicio, $qnt_result_pg");
			while($escrever = mysqli_fetch_array($listarDados)) { ?>
			<tbody>
				<tr>
					<td><?php echo $escrever['num_pedido']; ?></td>
					<td><?php echo date("d/m/Y, h:i:s", strtotime($escrever['data_pedido'])); ?></td>
					<td><?php echo $escrever['nome']; ?></td>
					<td> R$<?php echo $escrever['total']; ?></td>
					<td><a href="Gerenciarpedido.php?num_pedido=<?php echo $escrever['num_pedido']; ?>&nome=<?php echo $escrever['nome']; ?>">
					<svg width="20" height="20" viewBox="0 0 16 16" fill="currentColor">
					<path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
					<path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
					</svg></a></td>
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
				echo "<center><a href='Administracao.php?pagina=1'>Primeira&nbsp;</a>";

				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
					if($pag_ant >= 1) {
						echo "<a href='Administracao.php?pagina=$pag_ant'>$pag_ant</a>";
					}
				}
				echo "&nbsp;$pagina&nbsp;";
	  
				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
					if($pag_dep <= $quantidade_pg) {
						echo "<a href='Administracao.php?pagina=$pag_dep'>$pag_dep</a>";
					}
				}
				echo "<a href='Administracao.php?pagina=$quantidade_pg'>&nbsp;Última</a></center>";
			?>
		</table>
		</div><hr>
	</header>
    </div>

<?php include('rodape.php') ?>