<<<<<<< HEAD
<section class="section-name bg padding-y-sm">
	<div class="container">
		<header class="section-heading">   
			<h3 class="section-title">Login</h3>
		</header>
	</div>
</section>
<link rel="stylesheet" href="/Assets/css/bootstrap.css">
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
=======
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <h2 class="text-primary ">Entrar</h2>

                        <form method="post" action="">
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="../Assets/images/usuario.png" alt="icone de perfil"></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="../Assets/images/cadeado.png" alt="icone de senha"></span>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <!--<div>
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Lembrar de mim
                                    </label>
                                </div>-->

                                <div>
                                    <a href="#" class="text-decoration-none">Esqueci minha senha</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <input type="submit" id="submit" name="submit" value="Entrar">
                            <!--<input type="submit" id="submit" name="login" value="Entrar">-->
                            </div>
                        </form>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <p>Ainda não tem uma conta?</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="Cadastrar" class="btn w-75 btn-outline-primary">Criar conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

use App\Models\SessionLogin;

session_start();
$logar = $_SESSION['logar'] ?? false;

if ($_POST){

if (isset($_POST['submit'])){
$email = $_POST['email'];
$senha = $_POST['senha'];
$_SESSION['email'] = $email;
$logar = new SessionLogin();
$dados = $logar->login($email, $senha);
$num = $dados->rowCount();

if ($num == 1) {
    $_SESSION ['logar'] = true;
    $_SESSION ['email'] = $email;
    echo "<script> alert('Sessão Iniciada...') ; window.location='http://Localhost:8000/'</script>";
} else {
    echo "Dados inválidos, tente novamente";
}

}

}
>>>>>>> a9e1a45526328bc1471a6ed18c887b2159b90a67
