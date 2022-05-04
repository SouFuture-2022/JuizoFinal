<section class="section-name bg padding-y-sm">
	<div class="container">
		<header class="section-heading">
			<h3 class="section-title">Login</h3>
		</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<form action="" method="POST">
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
									<span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
								</div>
									<input type="password" name="senha" id="senha" placeholder="Senha" class="form-control" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-eye" onclick="mouseoverPass();" onmouseout="mouseoutPass();" aria-hidden="true"></i></span>
								</div>
							<small class="form-text text-muted"><p class="text-danger">Para sua segurança, sua senha deve conter pelo menos, 08 Caracteres, 01 Letra Maiúscula e 01 Número.</p></small>
							</div>
						</div>
					</div>
					<!--<div class="form-group"> 
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label">Lembrar-me</div>
						</label>
					</div> -->
					<div class="form-group">
						<button type="submit" name="btLogar" class="btn btn-primary btn-block">Entrar</button>
					</div>
				</form>
			</div>
			<div class="card-footer text-center">
				<a href="#">Esqueci minha senha</a><p>Ainda não tem uma conta? <a href="../CadastrarUsuario">Quero me Cadastrar</a>
			</div>
			<div class="card-footer text-center">
				<p>Baixe Nosso App</p>
				<a href="#"><img src="Assets/images/googleplay.png" height="40"></a>
				<a href="#"><img src="Assets/images/appstore.png" height="40"></a>
			</div>
		</div>
	</div>
</section>