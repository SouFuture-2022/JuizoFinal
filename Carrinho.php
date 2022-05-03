<?php
session_start();

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

//Ações para o carrinho
if(isset($_GET['acao'])) {
	//Adicionar produto
	if($_GET['acao'] == 'add') {
		$id_produto = intval($_GET['id_produto']);
		if(!isset($_SESSION['carrinho'][$id_produto])) {
			$_SESSION['carrinho'][$id_produto] = 1;
		} else {
			$_SESSION['carrinho'][$id_produto] += 1;
		}
	}

	//Remover Produto
	if($_GET['acao'] == 'del') {
		$id_produto = intval($_GET['id_produto']);
		if(isset($_SESSION['carrinho'][$id_produto])) {
			unset($_SESSION['carrinho'][$id_produto]);
		}
	}

	//Atualizar Produto
	if($_GET['acao'] == 'up') {
		if(is_array($_POST['prod'])) {
			foreach($_POST['prod'] as $id_produto => $qtd) {
				$id_produto = intval($id_produto);
				$qtd = intval($qtd);
				if(!empty($qtd) || $qtd <> 0) {
					$_SESSION['carrinho'][$id_produto] = $qtd;
				} else {
					unset($_SESSION['carrinho'][$id_produto]);
				}
			}
		}
	}
}

include('menu.php'); ?>

 <div class="col-lg-9">
    <header class="jumbotron my-4">
	<h4> Carrinho de Compras </h4><hr>
	<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
		<tr>
			<th> Produto </th>
			<th> Quanidade </th>
			<th> Preço </th>
			<th> SubTotal </th>
			<th> Remover </th>
		</tr>
		</thead>
			<form action="?acao=up" method="POST">
			<tfoot>
			<tr>
				<td><input type="submit" class="btn btn-primary" value="Atualizar" /></td>
				<td></td>
				<td><a href="Index.php"> Continuar Comprando? </a></td>
				<td></td>
				<td></td>
			</tr>
			</tfoot>
			<tbody>
			<?php
			if(count($_SESSION['carrinho']) == 0) {
				echo '<tr><td colspan="5"><center><strong><font color="red"> Não Há Produto no Carrinho! </font></strong></center></td><tr>';

			} else {

				include('Models/Conexaodb.php');
				foreach($_SESSION['carrinho'] as $id_produto => $qtd) {

					$sql   = "SELECT * FROM produtos WHERE id_produto = '$id_produto'";
					$qr    = mysqli_query($conn, $sql) or die (mysqli_errno());
					$ln    = mysqli_fetch_assoc($qr);

					$nome  = $ln['nome'];
					$preco = $ln['preco'];
					@$sub_total = number_format($ln['preco'] * $qtd, 2, '.', ' ');
					@$total += $sub_total;

				echo '<tr>
						<td>' . $nome . '</td>
						<td><input type="number" size="5" name="prod[' . $id_produto . ']" value="' . $qtd . '"></td>
						<td> R$' . $preco . '</td>
						<td> R$' . $sub_total . '</td>
						<td><center><a href="?acao=del&id_produto=' . $id_produto . '"> X </a><center></td>
					  </tr>';
				}
				$total = number_format($total, 2, '.', ' ');

				echo '<tr>
						<td colspan="3"><b> Total: </b></td>
						<td colspan="3"><b> R$' . $total . '</b></td>
					  </tr>';
				echo '<input type="hidden" name="produto[]" value="'.$total.'">';
			}
			?>
			</tbody>
			</form>
			</table>

		<form action="Models/Enviarpedido.php" method="POST" enctype="multipart/form-data">
			<?php

			foreach($_SESSION['carrinho'] as $id_produto => $qtd) {

				$sql   = "SELECT * FROM produtos WHERE id_produto = '$id_produto'";
				$qr    = mysqli_query($conn, $sql) or die (mysqli_errno());
				$ln    = mysqli_fetch_assoc($qr);

				$nome  = $ln['nome'];
				$preco = $ln['preco'];
				@$sub_total = number_format($ln['preco'] * $qtd, 2, '.', ' ');
				@$total += $sub_total;

				echo '<input type="hidden" name="id_produto[]" value="'.$id_produto.'">
				<input type="hidden" name="nome[]" value="'.$nome.'">
				<input type="hidden" name="qtd[]" value="'.$qtd.'">
				<input type="hidden" name="preco[]" value="'.$preco.'">
				<input type="hidden" name="sub_total[]" value="'.$sub_total.'">';
			}

				@$total_geral = $total / 2;
				$total_geral = number_format($total_geral, 2, '.', ' ');

				echo '<input type="hidden" name="total_geral" value="'.$total_geral.'">';
			?>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="bairro" id="Bairro" class="form-control" required="required">
							<option value="Informe seu Bairro"> Informe seu Bairro </option>
							<?php
								$listarDados = mysqli_query($conn, "SELECT bairro FROM fretes ORDER BY bairro");
								while($escrever = mysqli_fetch_array($listarDados)) { ?>
								<option value="<?php echo $escrever['bairro']; ?>"><?php echo $escrever['bairro']; ?></option>
							<?php } ?>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="submit" class="btn btn-primary" name="fializar" value="Fializar Pedido" />
					  </div>
					</div>
				</div>
			</div>
		</form><hr>
	</div>
	</header>
  </div>

<?php include('rodape.php'); ?>