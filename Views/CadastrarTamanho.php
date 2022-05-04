<?php

	$tamanho = new Tamanho();
	$produto = new Produtos();

	if(isset($_POST['btCadastrar'])) {
		$sub_categoria  = $_POST['sub_categoria'];
		$tamanho_superior  = $_POST['tamanho_superior'];
		$tamanho_inferior  = $_POST['tamanho_inferior'];
		$quantidade_tamanho = $_POST['quantidade_tamanho'];
		$id_produto  = $_POST['id_produto'];

		$tamanho->setSubcategoria($sub_categoria);
		$tamanho->setTamanhosuperior($tamanho_superior);
		$tamanho->setTamanhoinferior($tamanho_inferior);
		$tamanho->setQuantidadetamanho($quantidade_tamanho);
		$tamanho->setIdproduto($id_produto);

		if($tamanho->insert()) {
			include('Includes/MsgSucesso.php');
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Cadastrar Tamanho</h3>
	</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<div class="form-group">
							<select class="form-control" name="sub_categoria" id="sub_categoria" required >
								<option value="">Sub Categoria</option>
								<option value="Calças">Calças</option>
								<option value="Calçados">Calçados</option>
								<option value="Camisas">Camisas em Geral</option>
								<option value="Vestidos">Vestidos/Camisolas</option>
							</select>
						</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<div id="tamanhoSuperior">
								<select class="form-control" name="tamanho_superior" id="tamanhoSuperior" >
									<option value="">Escolha o Tamanho</option>
									<option value="P">P</option>
									<option value="M">M</option>
									<option value="G">G</option>
								</select>
							</div>
							<div id="tamanhoInferior">
								<input type="number" name="tamanho_inferior" id="tamanhoInferior" placeholder="Tamanho" class="form-control" />
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="number" name="quantidade_tamanho" id="quantidadeTamanho" placeholder="Quantidade" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<select class="form-control" name="id_produto" required >
							<option value="">Produto</option>
							<?php foreach($produto->findAllSelect() as $key => $value) { ?>
							<option value="<?php echo $value->id_produto; ?>"><?php echo $value->nome; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
	$('#tamanhoSuperior').hide();
	$('#tamanhoInferior').hide();

	$('#sub_categoria').change(function() {
		if ($('#sub_categoria').val() == 'Camisas' || $('#sub_categoria').val() == 'Vestidos') {
		  $('#tamanhoSuperior').show();
		} else {
		  $('#tamanhoSuperior').hide();
		}

		if ($('#sub_categoria').val() == 'Calças' || $('#sub_categoria').val() == 'Calçados') {
		  $('#tamanhoInferior').show();
		} else {
		  $('#tamanhoInferior').hide();
		}
	});
});
</script>