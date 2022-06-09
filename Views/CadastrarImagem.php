<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<section>
    <div class="container d-flex justify-content-center">
        <div class="card w-50 shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h2 class="text-primary mb-3">Cadastrar imagem</h2>
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="file" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select">
                                <option value="">Produto</option>
                                <option value="">produto cadastrado 1</option>
                                <option value="">produto cadastrado 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <button class="btn btn-primary w-75">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--?php

session_start();

if (isset($_SESSION['msg_error'])) {
    echo $_SESSION['msg_error'];
    unset($_SESSION['msg_error']);
}

use App\Infra\Dao\Imagens\CadastrarImagensDb;
use App\Models\Imagens;
use App\Models\Produtos;
use App\Infra\Dao\Imagens\ListarImagensDb;
use App\Infra\Dao\Produto\CadastrarProdutoDb;
use App\Infra\Dao\Produto\ListarProdutoDb;

$listar_produto = new ListarProdutoDb;
$imagem = new Imagens();
$listar_imagem = new ListarImagensDb;
$produto = new Produtos();
$cadastrar_produto = new CadastrarProdutoDb;
$cadastrar_imagem = new CadastrarImagensDb;

if (isset($_POST['btCadastrar'])) {
    $id_produto = $_POST['id_produto'];
    $verifica_insercao = $listar_imagem->findAllCount($id_produto);

    if ($verifica_insercao < 3) {
        $extensao = strtolower(substr($_FILES['nome_imagem']['name'], -4));
        $nome_imagem = md5((time())) . $extensao;
        $diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Assets/images/';

        move_uploaded_file($_FILES['nome_imagem']['tmp_name'], $diretorio . $nome_imagem);

        $imagem->setNomeimagem($nome_imagem);
        $imagem->setIdproduto($id_produto);

        if ($cadastrar_imagem->insert($id_produto, $nome_imagem)) {
            echo "<script> alert ('Imagem cadastrada'); window.location = 'http://Localhost:8000/'</script>";
        }
    } else {
        $_SESSION['msg_error'] =
            '<div class="alert alert-danger" role="alert">
				<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Não é permitido cadastrar mais que 3 imagens...
				</div>';
        //header('Location: ../CadastrarImagem');
    }
}
?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Imagem</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" name="nome_imagem" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="id_produto" required>
                                <option value="">Produto</option>
                                <?php foreach ($listar_produto->findAllSelect() as $key => $value) { ?>
                                <option value="<?php echo $value->id_produto; ?>"><?php $value->id_produto; echo $value->nome; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>
