<?php
    session_start();

    $logar = $_SESSION['logar'] ?? false;

    if($logar){
        require_once __DIR__ . "./includes/Cabecalhos/menucliente.php";
    
    } else {
        require_once __DIR__ . "./includes/Cabecalhos/menu.php";
    }

?>

<?php

use App\Infra\Dao\Avaliacoes\ListarAvaliacoesDb;
use App\Infra\Dao\Categorias\ListarCategoriasDb;
use App\Infra\Dao\Produto\ListarProdutoDb;
use App\Models\Produtos;
use App\Models\Categorias;
use App\Models\Avaliacoes;

$produto = new Produtos;
$categoria = new Categorias;
$avaliacao = new Avaliacoes;
$listar_categoria = new ListarCategoriasDb;
$listar_produto = new ListarProdutoDb;
$listar_avaliacao = new ListarAvaliacoesDb;


/*if (isset($_GET['acao']) && $_GET['acao'] == 'cate') {
    $id_categoria = (int)base64_decode($_GET['categoria']);*/
    $resultado = $listar_produto->findAllProductCategories();
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
            <h2 class="title-page">Todas as Categorias</h2>
            <nav>
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item"><a href="AllCategorias">Todas as Categoria</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ótimos artigos</li>
                </ol>
            </nav>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <div class="card">
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                <h6 class="title">Buscar Categoria</h6>
                            </a>
                        </header>
                    
                        <div class="filter-content collapse show" id="collapse_1">
                            <div class="card-body">
                                <form action="" method="POST" class="pb-3"> 
                                    <?php  
                                        $teste = $listar_categoria->findAll();
                                        foreach ($teste as $key => $value){
                                            $b = $teste[$key];
                                            $c = '';
                                            foreach ($b as $key => $valor){
                                                $c = $c . "$valor/";
                                            }
                                            $array = explode('/', $c);
                                            
                                        ?>
                                            <a href="?nome_categoria=<?php echo base64_encode($valor);?>"><?php echo $valor . "<br>";}?></a>
                        <?php
                            if (isset($_GET['nome_categoria'])){
                                $buscar = base64_decode($_GET['nome_categoria']);
                                $find_categorias = $listar_categoria->findAllSearch($buscar);
                                    foreach ($find_categorias as $key => $value){
                                        $cate = $find_categorias[$key];
                                        $a = '';
                                            foreach ($cate as $key => $vallue){
                                                $a = $a . $vallue;
                                                }$array = explode('/', $a);
                                        }
                                    }?>
                                                    
                                        </div>
                                    </div>
                                </form>
                                </article>
                    <article class="filter-group">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                <h6 class="title">Produtos Relacionados</h6>
                            </a>
                        </header>

                        <div class="filter-content collapse show" id="collapse_3">
                            <div class="card-body">
                                <ul class="list-menu">

                                </ul>
                            </div>
                        </div>
                    </article>

                </div>
            </aside>


            <main class="col-md-9">
                <?php
            $dados = $listar_produto->findAllPopular(0, 10);
            foreach ($dados as $key => $value) {

                $b = $dados["$key"];
                $a = '';
                foreach ($b as $key => $value) {
                    if ($value == null) {
                        $value = 'none';
                    }
                    $a = $a . "$value/";
                }
                $array = explode('/', $a);
            ?>

                <article class="card card-product-list">
                    <div class="row no-gutters">
                        <aside class="col-md-3">
                            <?php $id_produto = $array[0]; ?>
                            <a href="/Produto?id_produto=<?php echo base64_encode($id_produto);?>" class="img-wrap">
                                <!-- <span class="badge badge-danger"> NEW </span> -->
                                <img src="Assets/images/<?php echo $array[2]?>">
                            </a>
                        </aside>
                        <div class="col-md-6">
                            <div class="info-main">
                                <?php echo $array[1];
                                      echo "<br>" . $array[11];
                                ?>
                                <a href="#" class="h5 title"></a>
                                <div class="rating-wrap mb-3">
                                    <?php
                                    $id_produto = $array[0];
                                    $avaliar = $listar_avaliacao->find($id_produto);
                                    ?>
                                    <ul class="rating-stars">
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                class="fa fa-star"></i>
                                                <input type="hidden">
                                        </li>
                                    </ul>
                                    <div class="label-rating"> </div>
                                </div>
                                <p></p>
                            </div>
                        </div>

                        <aside class="col-sm-3">
                            <div class="info-aside">
                                <div class="price-wrap">
                                    <span class="price h5">R$<?php echo $array[7];?> </span>
                                    <!-- <del class="price-old">$198</del> -->
                                </div>
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p><?php $id_produto = $array[0];?></p>
                                    <a href="/Produtos?id_produto=<?php echo base64_encode($id_produto);?>" class="btn btn-primary btn-block"> Details
                                    </a>
                                    <a href="/Carrinho?produto=<?php echo base64_encode($id_produto) ?>" class="btn btn-light btn-block">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <span class="text">Adicionar ao Carrinho</span>
                                    </a>
                                </p>
                            </div>
                        </aside>
                    </div>
                </article>
<?php } ?>

                <nav aria-label="Navegação de página exemplo">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="../AllCategorias?acao=cate&categoria=&pagina=1">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>

                        <li class="page-item active"><a class="page-link"
                                href="../AllCategorias?acao=cate&categoria=&pagina="><span
                                    class="sr-only">atual</span>A</a></li>
                        <li class="page-item">
                            <a class="page-link" href="../AllCategorias?acao=cate&categoria=&pagina=">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </main>
        </div>
    </div>
</section>
<?php ?>