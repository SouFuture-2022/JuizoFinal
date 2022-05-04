<?php

	$endereco = new Enderecos();

	if(isset($_POST['btCadastrar'])) {
		$numero = $_POST['numero'];
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$id_usuario = '1';

		$endereco->setNumero($numero);
		$endereco->setCep($cep);
		$endereco->setRua($rua);
		$endereco->setBairro($bairro);
		$endereco->setCidade($cidade);
		$endereco->setUf($uf);
		$endereco->setIdusuario($id_usuario);

		if($endereco->insert()) {
			$_SESSION['msg_sucesso'] = 
			'<div class="alert alert-success" role="alert">
				<i class="fa fa-check-circle" aria-hidden="true"></i> Cadastro Realizado Com sucesso...
			</div>';
			header('Location: ../Index');
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Cadastrar Endereços</h3>
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
							<input type="text" name="numero" value="000" id="numero" placeholder="N°" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="cep" value="000000-000" id="cep" placeholder="CEP" maxlength="9" onblur="pesquisacep(this.value);" class="form-control" required />
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="rua" value="Teste" id="rua" placeholder="Rua" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="bairro" value="Teste" id="bairro" placeholder="Bairro" class="form-control" required />
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="cidade" value="Teste" id="cidade" placeholder="Cidade" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="uf" value="CE" id="uf" placeholder="UF" class="form-control" required />
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