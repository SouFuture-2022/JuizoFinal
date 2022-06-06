<?php
    session_start();
    $logar = $_SESSION['logar'] ?? false;

    if($logar){
        require __DIR__ . "./includes/Cabecalhos/menucliente.php";
    } else {
        require __DIR__ . "./includes/Cabecalhos/menu.php";
    }

?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<!-- ================ SECTION INTRO ================ -->
<?php

use App\Infra\Dao\Produto\ListarProdutoDb;
use App\Infra\Dao\Favoritos\CadastrarFavoritosDb;
use App\Infra\Dao\Favoritos\ListarFavoritosDb;
$logar = $_SESSION['logar'] ?? false;
$email = $_SESSION['email'] ?? null;

use App\Infra\Dao\Usuario\ListarUsuarioDb;
$a = new ListarUsuarioDb;
$dados = $a->all($email);
foreach ($dados as $key => $value){  
$b = $dados[$key];
foreach ($b as $key => $value){
    $id_usuario = $value;
}
}  
$listar_produto = new ListarProdutoDb;
$favoritos = new CadastrarFavoritosDb;
?>

<section class="section-intro padding-y-sm">
    <div class="container">
        <div id="carousel1_indicator" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Assets/images/vision.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/images/bla.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/images/vision.jpg" alt="Third slide">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- ================ SECTION INTRO END.// ================ -->

<!-- ================ SECTION PRODUCTS ================ -->

<section class="padding-y">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title">Produtos</h3>
        </header>

        <div class="row">

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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <figure class="card card-product-grid">
                <?php $id_produto = $array[0];?>
                    <div class="img-wrap">
                        <img src="Assets/images/<?php echo $array[2]; ?>">
                    </div>
                    <figcaption class="info-wrap border-top">
                        <div class="price-wrap">
                            <span class="price">$<?php echo $array[7]; ?></span>
                        </div>
                        <p class="title mb-2"><?php echo $array[11]; ?> - <?php echo $array[5]; ?></p>


        </div> <!-- row end.// -->

    </div> <!-- container end.// -->
</section>

<!-- ================ SECTION PRODUCTS END.// ================ -->
<section class="section-name padding-y">
    <div class="container">
        <h3 class="mb-3">Download app demo text</h3>
        <a href="#"><img src="Assets/images/googleplay.png" height="40"></a>
        <a href="#"><img src="Assets/images/appstore.png" height="40"></a>
    </div>
</section>