<?php

use App\Infra\Dao\Categorias\CadastrarCategoria;
use App\Models\Categorias;

$categoria = new Categorias();
$cadastrar_categoria = new CadastrarCategoria;

if (isset($_POST['btCadastrar'])) {
    $nome_categoria  = $_POST['nome_categoria'];

    $categoria->setNomeCategotia($nome_categoria);

    if ($cadastrar_categoria->insert()) {
        include('Includes/MsgSucesso.php');
    }
}
?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Categoria</h3>
        </header>
    </div>
</section>
<section class="section-name padding-y">
    <div class="container">
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="nome_categoria" id="nomeCategoria" placeholder="Nome da Categotia"
                        class="form-control" required />
                </div>
                <div class="form-group">
                    <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>