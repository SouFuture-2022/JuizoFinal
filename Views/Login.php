<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
                                    <span class="input-group-text"><img src="../Assets/images/usuario.png"
                                            alt="icone de perfil"></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="../Assets/images/cadeado.png"
                                            alt="icone de senha"></span>
                                    <input type="password" name="email" class="form-control" placeholder="Senha"
                                        required>
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

$logar = new SessionLogin();
$dados = $logar->login($email, $senha);
$num = $dados->rowCount();
if ($num == 1) {
    $_SESSION ['logar'] = true;
    header('Location:/');
} else {
    echo "Dados inválidos, tente novamente";
}

}

}
