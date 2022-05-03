<?php session_start(); include('menu.php'); ?>

<div class="col-lg-9">
    <header class="jumbotron my-4">
	<h4> Pagamento </h4><hr>
		<div class="container">
		  <div class="row">
			<div class="col-sm">
			   <p><input type="submit" class="btn btn-primary btn-block" onclick="mostra('casa')" value="Receber em Casa"></p>
			</div>
			<div class="col-sm">
				<p><input type="submit" class="btn btn-primary btn-block" onclick="mostra('loja')" value="Retirar em Loja"></p>
			</div>
		</div>
		</div>
		<div class="col-sm">
			<div id="casa" class="hidden">
			<hr><p><center> Receber em Casa </center></p><hr>
			<form action="Models/Enviarvenda.php" method="POST">
			<div class="form-group">
				<input type="hidden" name="situacao" id="Casa" value="Receber em Casa" class="form-control" placeholder="Casa" required="required" />
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="bairro" id="Bairro" value="<?php if(isset($_SESSION['retorno_bairro'])) { echo $_SESSION['retorno_bairro']; unset($_SESSION['retorno_bairro']); } ?>" class="form-control" placeholder="N° Pedido" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="valor_frete" id="Valorfrete" value="<?php if(isset($_SESSION['retorno_valor_frete'])) { echo $_SESSION['retorno_valor_frete']; unset($_SESSION['retorno_valor_frete']); } ?>" class="form-control" placeholder="Valor do Frete" required="required" />
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="num_pedido" id="Pedido" value="<?php if(isset($_SESSION['retorno_numpedido_casa'])) { echo $_SESSION['retorno_numpedido_casa']; unset($_SESSION['retorno_numpedido_casa']); } ?>" class="form-control" placeholder="N° Pedido" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="total" id="Total" value="<?php if(isset($_SESSION['retorno_total_casa'])) { echo $_SESSION['retorno_total_casa']; unset($_SESSION['retorno_total_casa']); } ?>" class="form-control" placeholder="Total" required="required" />
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="nome" id="Nome" class="form-control" required="required">
						<option value="Escolha uma Categoria"> Escolha seu Nome </option>
						<?php
							$listarDados = mysqli_query($conn, "SELECT nome FROM usuarios ORDER BY nome");
							while($escrever = mysqli_fetch_array($listarDados)) { ?>
							<option value="<?php echo $escrever['nome']; ?>"><?php echo $escrever['nome']; ?></option>
						<?php } ?>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="forma_pagamento" id="Formapagamento" class="form-control" required="required">
						<option value="Dinheiro"> Dinheiro </option>
						<option value="Cartão"> Cartão </option>
						</select>
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="number" name="qtdx" id="Qtdx" class="form-control" placeholder="Dividir Quantas x" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="valor_entregue" id="Valorentregue" class="form-control" placeholder="Valor Entregue" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required" />
					  </div>
					</div>
				</div>
			</div>
				<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Confirmar">
			</form><hr>
			</div>
			<div id="loja" class="hidden">
				<hr><p><center> Retirar de Loja </center></p><hr>
			<form action="Models/Enviarvenda.php" method="POST">
			<div class="form-group">
				<input type="hidden" name="situacao" id="Loja" value="Retirar de Loja" class="form-control" placeholder="Casa" required="required" />
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="num_pedido" id="Pedido" value="<?php if(isset($_SESSION['retorno_numpedido_loja'])) { echo $_SESSION['retorno_numpedido_loja']; unset($_SESSION['retorno_numpedido_loja']); } ?>" class="form-control" placeholder="N° Pedido" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="total" id="Total" value="<?php if(isset($_SESSION['retorno_total_loja'])) { echo $_SESSION['retorno_total_loja']; unset($_SESSION['retorno_total_loja']); } ?>" class="form-control" placeholder="Total" required="required" />
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="nome" id="Nome" class="form-control" required="required">
						<option value="Escolha uma Categoria"> Escolha seu Nome </option>
						<?php
							$listarDados = mysqli_query($conn, "SELECT nome FROM usuarios ORDER BY nome");
							while($escrever = mysqli_fetch_array($listarDados)) { ?>
							<option value="<?php echo $escrever['nome']; ?>"><?php echo $escrever['nome']; ?></option>
						<?php } ?>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="forma_pagamento" id="Formapagamento" class="form-control" required="required">
						<option value="Dinheiro"> Dinheiro </option>
						<option value="Cartão"> Cartão </option>
						</select>
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="number" name="qtdx" id="Qtdx" class="form-control" placeholder="Dividir Quantas x" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="valor_entregue" id="Valorentregue" class="form-control" placeholder="Valor Entregue" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required" />
					  </div>
					</div>
				</div>
			</div>
				<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Confirmar">
			</form><hr>
			</div>
		</div>
	</header>
  </div>

<?php include('rodape.php'); ?>