<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Cadastre-se</h2>
                <form method="post" action="">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="nome" placeholder="Nome completo" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="perfil" placeholder="Nome de usuário" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                    <div class="col">
                            <input type="date" class="form-control" name="data_nascimento" placeholder="Data de Nascimento" required>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="col">
                            <input type="password" name="senha" class="form-control" placeholder="Confirmar senha" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" id="button" name="cadastrar" value="Cadastrar">
                    </div>
                </form>
                <hr>
                <div class="d-flex justify-content-center">
                    <p>Já tem uma conta?</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="Login" class="btn w-75 btn-outline-primary" href="#">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  

use App\Infra\Dao\Usuario\CadastrarUsuarioDb;

if (isset($_POST['cadastrar'])){
    $cadastrar = new CadastrarUsuarioDb;
    $cadastrar ->insert();
    header('location:/');
}
