<?php include('menu.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastro de Cliente </h4><hr>
			<p style="color: #FF0000;"> Atenção: Todos os campos são obrigatórios. </p>
			<form action="Models/Enviarusuario.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="nome" id="Nome" class="form-control" placeholder="Nome" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="email" name="email" id="Email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="tel" name="telefone" id="Telefone" class="form-control" placeholder="DDD+Telefone" maxlength="11" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="date" name="nascimento" id="Nascimento" class="form-control" placeholder="Nascimento" required="required">
					  </div>
					</div>
				</div>
			</div>
				<p><center></center></p>
				<div id="msgOK" style="margin-left: 350px; color: #008000; display: none;"> CPF Válido </div>
				<div id="msgErro" style="margin-left: 350px; color:	#FF0000; display: none;"> CPF Inválido </div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="cpf" id="CPF" class="form-control" placeholder="CPF" maxlength="11" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<button class="btn btn-primary"> Validar CPF </button>
					  </div>
					</div>
				</div>
			</div>
			<hr>
			<!-- <p style="color: #FF0000;"> Para sua segurança, sua senha deve conter pelo menos, 08 Caracteres, 01 Letra Maiúscula e 01 Número. </p>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="login" id="Login" class="form-control" placeholder="Login" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="password" name="senha" class="form-control" id="Senha" placeholder="Senha" maxlength="08" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Para sua segurança, sua senha deve conter pelo menos, 08 Caracteres, 01 Letra Maiúscula e 01 Número." required="required">
					  </div>
					</div>
				</div>
			</div><hr> -->
			<div class="form-group">
				  <div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						Masculino <input type="radio" name="sexo" value="masculino" id="Sexo" placeholder="Masculino" required="required">
						Feminino <input type="radio" name="sexo" value="feminino" id="Sexo" placeholder="Feminino" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="num" id="num" class="form-control" placeholder="N°" required="required" />
					  </div>
					</div>
				  </div>
				</div><hr>
				<div class="form-group">
				  <div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="cep" id="cep" maxlength="9" onblur="pesquisacep(this.value);" class="form-control" placeholder="Cep" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="rua" id="rua" class="form-control" placeholder="Rua" required="required" />
					  </div>
					</div>
				  </div>
				</div>
				<div class="form-group">
				  <div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required="required" />
					  </div>
					</div>
				  </div>
				</div>
				<div class="form-group">
				  <div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="uf" id="uf" class="form-control" placeholder="Estado" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
					  	<input type="text" name="ibge" id="ibge" class="form-control" placeholder="IBGE" required="required" />
					  </div>
					</div>
				  </div>
				</div>
			<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Cadastrar">
		</form><hr>
		</header>
    </div>

<?php include('rodape.php'); ?>