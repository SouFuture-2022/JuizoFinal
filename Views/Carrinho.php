<?php

	include('AcaoCarrinho.php');

	if(isset($_SESSION['msg_sucesso'])) {
		echo $_SESSION['msg_sucesso'];
		unset($_SESSION['msg_sucesso']);
	}

	$produto = new Produtos();
	$pedido = new Pedidos();

	if(isset($_POST['btCadastrar'])) {
		$nome = $_POST['nome'];
		$cor = $_POST['cor'];
		$tamanho = $_POST['tamanho'];
		$quantidade = $_POST['qtd'];
		$preco = $_POST['preco'];
		$sub_total = $_POST['sub_total'];
		$id_produto = $_POST['id_produto'];
		$id_usuario = $_POST['id_usuario'];

		$nums = implode('', range(0, 9));
		$alphaNumeric = $nums;
		$num_pedido = '';
		$len = 9;

		for($i = 0; $i < $len; $i++) {
			$num_pedido .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
		}

		for ($i=0; $i < count($nome); $i++) {
			$name = $nome[$i];
			$color = $cor[$i];
			$size = $tamanho[$i];
			$amount = $quantidade[$i];
			$price = $preco[$i];
			$total = $sub_total[$i];
			$id_product = $id_produto[$i];
			$id_user = $id_usuario[$i];

			$pedido->setNumpedido($num_pedido);
			$pedido->setNome($name);
			$pedido->setCor($color);
			$pedido->setTamanho($size);
			$pedido->setQuantidade($amount);
			$pedido->setPreco($price);
			$pedido->setSubtotal($total);
			$pedido->setIdproduto($id_product);
			$pedido->setIdusuario($id_user);

			if($pedido->insert()) {
				$produto->updateStock($amount, $id_product);

				$_SESSION['msg_sucesso'] = 
				'<div class="alert alert-success" role="alert">
					Pedido Realizado Com sucesso...
				</div>';
				header('Location: ../Carrinho');				
			}
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Meu Carrinho</h3>
	</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="row">
		<aside class="col-lg-9">
			<div class="card">
			<?php  if(count($_SESSION['carrinho']) == 0) { ?>
				<div class="alert alert-danger mt-3" role="alert">
				  <p class="text-center">Não Há Produto no Carrinho!</p>
				</div>

			<?php } else { ?>

				<div class="table-responsive">
					<table class="table table-borderless table-shopping-cart">
						<thead class="text-muted">
							<tr class="small text-uppercase">
								<th scope="col">Produto</th>
								<th scope="col" width="120">Quantidade</th>
								<th scope="col" width="120">Preço</th>
								<th scope="col" width="120">Sub Total</th>
								<th scope="col" class="text-right d-none d-md-block" width="200"></th>
								<th scope="col" class="text-right d-none d-md-block" width="200"></th>
							</tr>
						</thead>
						<tbody>
							<form action="?acao=up" method="POST">
							<?php
								foreach($_SESSION['carrinho'] as $id_produto => $qtd) {
								$sql  = "SELECT * FROM produtos WHERE id_produto = $id_produto";
								$stmt = Conexao::prepare($sql);
								$stmt->bindParam(1, $id_produto);
								$stmt->execute();
								$ln = $stmt->fetchAll();

								$imagem_destaque = $ln[0]->imagem_destaque;
								$nome = $ln[0]->nome;
								$peso = $ln[0]->peso;
								$cor = $ln[0]->cor;
								$preco = $ln[0]->preco;
								@$sub_total = $ln[0]->preco * $qtd;
								@$total += $sub_total;
								$total_peso += $peso / 1000;
							?>
								<tr>
									<td>
										<figure class="itemside align-items-center">
											<div class="aside"><img src="Upload/<?php echo $imagem_destaque; ?>" class="img-sm" alt="" /></div>
											<figcaption class="info">
												<a href="#" class="title text-dark"><?php echo $nome; ?></a>
												<p class="text-muted small"><strong>Cor:</strong> <?php echo $cor; ?><!--<br><strong>Tamanho:</strong> Canon<br>--></p>
											</figcaption>
										</figure>
									</td>

									<td class="text-right d-none d-md-block">
										<input type="number" name="produto[<?php echo $id_produto; ?>]" class="form-control" value="<?php echo $qtd; ?>" />
									</td>

									<td>
										<div class="price-wrap">
											<var class="price">R$<?php echo number_format($preco, 2, ',', ' '); ?></var>
											<!-- <small class="text-muted"> $315.20 each </small> --->
										</div>
									</td>

									<td>
										<div class="price-wrap">
											<var class="price">R$<?php echo number_format($sub_total, 2, ',', ' '); ?></var>
										</div>
									</td>
									
									<td class="text-right d-none d-md-block">
										<button type="submit" class="btn btn-primary">Atualizar</button>
									</td>

									<td class="text-right d-none d-md-block">
										<a href="?acao=del&produto=<?php echo base64_encode($id_produto); ?>" class="btn btn-light">Remover</a>
									</td>
								</tr>
								<?php } // foreach ?>
							</form>
						</tbody>
					</table>
				</div>
			<?php } // else ?>


				<div class="card-body border-top">
					<a href="../FinalizarCompra" class="btn btn-primary float-md-right">Confirmar Pedido  
						<i class="fa fa-angle-double-right" aria-hidden="true"></i>
					</a>

					<a href="../Index" class="btn btn-light">
						<i class="fa fa-angle-double-left" aria-hidden="true"></i> Continue Comprando
					</a>
				</div>
			</div>

			<div class="alert alert-success mt-3">
				<p class="icontext">
					<i class="fas fa-truck"></i>&nbsp;&nbsp;&nbsp;Free Delivery within 1-2 weeks
				</p>
			</div>
		</aside>


			<aside class="col-lg-3">
				<div class="card mb-3">
					<div class="card-body">
						<dl class="dlist-align">
							<dt><strong>Total Pedido:</strong></dt>
							<dd class="text-right text-dark b"><strong>R$<?php echo number_format($total + $frete, 2, ',', ' '); ?></strong></dd>
						</dl>

						<hr>

						<p class="text-center mb-3">
							<img src="Assets/images/payments.png" height="26" alt="payments" />
						</p>

						<form action="" method="POST" enctype="multipart/form-data">
							<?php
							foreach($_SESSION['carrinho'] as $id_produto => $qtd) {
								$sql  = "SELECT * FROM produtos WHERE id_produto = $id_produto";
								$stmt = Conexao::prepare($sql);
								$stmt->bindParam(1, $id_produto);
								$stmt->execute();
								$ln = $stmt->fetchAll();

								$nome = $ln[0]->nome;
								$cor = $ln[0]->cor;
								$preco = $ln[0]->preco;
								@$sub_total = $ln[0]->preco * $qtd;
								@$total_carrinho += $sub_total;
								$id_usuario = 1;
								$tamanho = 'P';

								echo '
								<input type="hidden" name="nome[]" value="'.$nome.'">
								<input type="hidden" name="cor[]" value="'.$cor.'">
								<input type="hidden" name="tamanho[]" value="'.$tamanho.'">
								<input type="hidden" name="qtd[]" value="'.$qtd.'">
								<input type="hidden" name="preco[]" value="'.$preco.'">
								<input type="hidden" name="sub_total[]" value="'.$sub_total.'">
								<input type="hidden" name="id_produto[]" value="'.$id_produto.'">
								<input type="hidden" name="id_usuario[]" value="'.$id_usuario.'">
								';
							}
							?>
							<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Confirmar Pedido</button>
						</form>
						<a href="../Index" class="btn btn-light btn-block mt-3">Continue Comprando</a>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<input type="hidden" id="peso" value="<?php echo $total_peso; ?>" />
						<input type="hidden" id="valor" value="<?php echo $total_carrinho; ?>" />
						<div class="form-group">
							<select id="frete" class="form-control" required >
								<option value="">Escolha o Tipo de Frete</option>
								<option value="balcao">Receber no Balcão</option>
								<option value="41106">PAC</option>
								<option value="40010">SEDEX</option>
							</select>
						</div>
						<div class="form-group">
							<div class="input-group">
								<input type="text" class="form-control" id="cep" placeholder="Digite o CEP" maxlength="9" />
								<span class="input-group-append">
									<button onclick="calculo();" class="btn btn-primary">Calcular Frete</button>
								</span>
							</div>
						</div>

						<hr>

						<small class="form-text text-muted text-center"><a href="https://buscacepinter.correios.com.br/app/pedido/index.php" target="_blank"> Não sei meu CEP </a></small>
					</div>
				</div>

				<div id="retorno">
				<!-- Resposta: Frete + Total  -->
				
				</div>

			</aside>
		</div>
	</div>
</section>

