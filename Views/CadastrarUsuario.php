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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../Assets/css/centralizar.css">
<section>
    <div>
        <a href="/" class="btn btn-primary ms-1 mt-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </a>    
    </div>  
    <div class="container d-flex justify-content-center" id="teste">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Cadastre-se</h2>
                <form action="">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome completo" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nome de usuário" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Telefone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="CPF" required>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control text-muted" placeholder="Data de nascimento" required>
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
                        <button class="btn w-75 btn-primary">Cadastrar</button> 
                    </div>
                </form>
                <hr>
                <div class="d-flex justify-content-center">
                    <p>Já tem uma conta?</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn w-75 btn-outline-primary" href="#">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  

if (isset($_POST['cadastrar'])){
    $email = $_POST['email'];
    $cadastrar = new CadastrarUsuarioDb;
    $cadastrar ->insert();
    $_SESSION ['logar'] = true;
    $_SESSION['email'] = $email;
    echo "<script> alert('Usuário Cadastrado...') ; window.location='http://Localhost:8000/'</script>";
}