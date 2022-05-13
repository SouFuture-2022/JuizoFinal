<?php

use App\Infra\Dao\Cores\CadastrarCores;
use App\Infra\Dao\Produto\ListarProdutoDb;
use App\Models\Cores;
use App\Models\Produtos;

$cor = new Cores();
$cadastrar_cor = new CadastrarCores;
$produto = new Produtos();
$listar_produto = new ListarProdutoDb;


if (isset($_POST['btCadastrar'])) {
	$nome_cor  = $_POST['nome_cor'];
	$quantidade_cor = $_POST['quantidade_cor'];
	$id_produto  = $_POST['id_produto'];

	$cor->setNomecor($nome_cor);
	$cor->setQuantidadecor($quantidade_cor);
	$cor->setIdproduto($id_produto);

	if ($cadastrar_cor->insert()) {
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
            <h3 class="section-title">Cadastrar Cor</h3>
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
                            <input type="text" name="nome_cor" id="nome" placeholder="Nome da Cor" class="form-control"
                                required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="quantidade_cor" id="quantidadeCor"
                                placeholder="Quantidade da Cor" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="id_produto" required>
                                <option value="">Produto</option>
                                <?php foreach ($listar_produto->findAllSelect() as $key => $value) { ?>
                                <option value="<?php echo $value->id_produto; ?>"><?php echo $value->nome; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" name="btCadastrar"
                                class="btn btn-primary btn-block">Registrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>