<?php

	$categoria = new Categorias();

	if(isset($_POST['btCadastrar'])) {
		$nome_categoria  = $_POST['nome_categoria'];

		$categoria->setNomeCategotia($nome_categoria);

		if($categoria->insert()) {
			include('Includes/MsgSucesso.php');
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Cadastrar Categoria</h3>
	</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="nome_categoria" id="nomeCategoria" placeholder="Nome da Categotia" class="form-control" required />
				</div>
				<div class="form-group">
					<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</section>