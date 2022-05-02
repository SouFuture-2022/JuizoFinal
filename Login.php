<?php session_start();  include('menu.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastro de Cliente </h4><hr>
			<p style="color: #FF0000;"> Atenção: Área Restrita para Administrador. </p>
			<form action="Models/Validarusuario.php" method="POST">
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="nome" value="Dell" id="Login" class="form-control" placeholder="Login" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="password" name="senha" value="Teste.00" class="form-control" id="Senha" placeholder="Senha" maxlength="08" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Para sua segurança, sua senha deve conter pelo menos, 08 Caracteres, 01 Letra Maiúscula e 01 Número." required="required">
					  </div>
					</div>
				</div>
			</div>
			<input type="submit" name="btLogar" class="btn btn-primary btn-block" value="Entrar">
		</form>
		<p>
		<?php
			//	Login
			if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}
			// Erro ao logar
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			// Senha incorreto
			if(isset($_SESSION['retornoErro'])){
				echo $_SESSION['retornoErro'];
				unset($_SESSION['retornoErro']);
			}
			// Senha Alterada
			if(isset($_SESSION['msgSenha'])){
				echo $_SESSION['msgSenha'];
				unset($_SESSION['msgSenha']);
			}
		?>
		</p>
		<hr>
		</header>
    </div>

<?php include('rodape.php'); ?>