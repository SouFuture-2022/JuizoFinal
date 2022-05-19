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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Cadastrar Cor</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select text-muted" aria-label="Default select example">
                                <option selected>Produtos</option>
                                <option value="1">Produto 1</option>
                                <option value="2">Produto 2</option>
                                <option value="3">Produto 3</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col mb-3">
                            <input type="text" class="form-control" placeholder="Nome da cor" required>

                        </div>
                        <div class="col mb-3">
                            <input type="text" class="form-control" placeholder="Quantidade da cor" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn w-75 btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
                                <!--<?php foreach ($listar_produto->findAllSelect() as $key => $value) { ?>
                                <option value="<!--?php echo $value->id_produto; ?>"><?php echo $value->nome; ?></option>
                                <?php } ?>-->
  