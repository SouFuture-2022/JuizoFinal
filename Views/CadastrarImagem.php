<?php

	session_start();

	if(isset($_SESSION['msg_error'])) {
		echo $_SESSION['msg_error'];
		unset($_SESSION['msg_error']);
	}

	$imagem = new Imagens();
	$produto = new Produtos();

	if(isset($_POST['btCadastrar'])) {
		$id_produto = $_POST['id_produto'];
		$verifica_insercao = $imagem->findAllCount($id_produto);

		if($verifica_insercao < 3) {
			$extensao = strtolower(substr($_FILES['nome_imagem']['name'], -4));
			$nome_imagem = md5(time()).$extensao;
			$diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Uploads/Produtos/';

			move_uploaded_file($_FILES['nome_imagem']['tmp_name'], $diretorio.$nome_imagem);

			$imagem->setNomeimagem($nome_imagem);
			$imagem->setIdproduto($id_produto);

			if($imagem->insert()) {
				include('Includes/MsgSucesso.php');
			}

		} else {
			$_SESSION['msg_error'] = 
				'<div class="alert alert-danger" role="alert">
				<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Não é permitido cadastrar mais que 3 imagens...
				</div>';
			header('Location: ../CadastrarImagem');
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Cadastrar Imagem</h3>
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
							<input type="file" name="nome_imagem" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" name="id_produto" required >
								<option value="">Produto</option>
								<?php foreach($produto->findAllSelect() as $key => $value) { ?>
								<option value="<?php echo $value->id_produto; ?>"><?php echo $value->nome; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</section>