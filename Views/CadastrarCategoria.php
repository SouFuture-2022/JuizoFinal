<!--<?php
//ola mundo...
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
-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="mb-3 text-primary">Cadastrar Categoria</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select text-muted" aria-label="Default select example">
                                <option selected>Nome da categoria</option>
                                <option value="1">Categooria 1</option>
                                <option value="2">Categoria 2</option>
                                <option value="3">Categoria 3</option>
                              </select>
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