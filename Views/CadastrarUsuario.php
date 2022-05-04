<?php

	$usuario = new Usuarios();

	if(isset($_POST['btCadastrar'])) {
		$extensao = strtolower(substr($_FILES['perfil']['name'], -4));
		$perfil = md5(time()).$extensao;
		$diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Uploads/Perfis/';

		move_uploaded_file($_FILES['perfil']['tmp_name'], $diretorio.$perfil);

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$telefone = $_POST['telefone'];
		$cpf = $_POST['cpf'];
		$data_nascimento = $_POST['data_nascimento'];
		$sexo = $_POST['sexo'];

		$usuario->setNome($nome);
		$usuario->setEmail($email);
		$usuario->setSenha($senha);
		$usuario->setTelefone($telefone);
		$usuario->setCPF($cpf);
		$usuario->setDatanascimento($data_nascimento);
		$usuario->setSexo($sexo);
		$usuario->setPerfil($perfil);

		if($usuario->insert()) {
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
		<h3 class="section-title">Cadastrar Conta</h3>
	</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-6">		
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
							<input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
							</div>
							<input type="date" name="data_nascimento" id="dataNascimento" class="form-control" required="required" />
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">	
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
							</div>
							<input type="email" name="email" id="email" placeholder="E-mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
							</div>
							<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone" maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}" required />

						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
							</div>
								<input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-eye" onclick="mouseoverPass();" onmouseout="mouseoutPass();" aria-hidden="true"></i></span>
							</div>
							<small class="form-text text-muted"><p class="text-danger">Para sua segurança, sua senha deve conter pelo menos, 08 Caracteres, 01 Letra Maiúscula e 01 Número.</p></small>
						</div>
					</div>
					<div class="col-md-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
							</div>
							<input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control" maxlength="11" required />
						</div>
					</div>
				</div>
				Sexo:&nbsp;&nbsp;&nbsp;
				<div class="form-row">
					<div class="form-group">
						<label class="custom-control custom-radio mb-3">
							<input type="radio" name="sexo" value="M" id="sexo" class="custom-control-input" required checked />
							<div class="custom-control-label">M</div>
						</label>
					</div>
					&nbsp;&nbsp;&nbsp;
					<div class="form-group">
						<label class="custom-control custom-radio mb-3">
							<input type="radio" name="sexo" value="F" id="sexo" class="custom-control-input" required />
							<div class="custom-control-label">F</div>
						</label>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
							</div>
							<input type="file" name="perfil" id="imgPerfil" class="form-control">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>