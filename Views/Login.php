<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../Assets/css/centralizar.css">

<section>
    <div>
        <a href="/" class="btn btn-primary ms-1 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </a>    
    </div>
    <div class="container" id="teste">
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

                            <div class="mb-1">
                                <div class="input-group">
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

                                <div class="mb-3">
                                    <a href="#" class="text-decoration-none">Esqueci minha senha</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <input class="btn btn-primary w-75" type="submit" id="submit" name="submit" value="Entrar">
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
