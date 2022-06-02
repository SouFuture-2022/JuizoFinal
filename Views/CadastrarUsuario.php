<?php

use App\Models\Usuarios;
use App\Infra\Dao\Usuario\CadastrarUsuarioDb;

$usuario = new Usuarios;
$cadastrar_usuario = new CadastrarUsuarioDb;

if (isset($_POST['btCadastrar'])) {
    $extensao = strtolower(substr($_FILES['perfil']['name'], -4));
    $perfil = md5(time()) . $extensao;
    $diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Uploads/Perfis/';

    move_uploaded_file($_FILES['perfil']['tmp_name'], $diretorio . $perfil);

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

    if ($cadastrar_usuario->insert()) {
        $_SESSION['msg_sucesso'] =
            '<div class="alert alert-success" role="alert">
				<i class="fa fa-check-circle" aria-hidden="true"></i> Cadastro Realizado Com sucesso...
			</div>';
        header('Location: ../Index');
    }
}
?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
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
                            <input type="password" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" placeholder="Confirmar senha" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-primary w-75" type="submit" id="button" name="cadastrar" value="Cadastrar">
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

if (isset($_POST['cadastrar'])){
    $cadastrar = new CadastrarUsuarioDb;
    $cadastrar ->insert();
    echo "<script> alert('Usuário cadastrado com sucesso...') ; window.location='http://Localhost:8000/'</script>";
}
