<?php

use App\Models\Produtos;
use App\Models\Avaliacoes;
use App\Infra\Dao\Avaliacoes\ListarAvaliacoesDb;
use App\Infra\Dao\Produto\ListarProdutoDb;

$produto = new Produtos();
$avaliacao = new Avaliacoes;
$listar_produto = new ListarProdutoDb;
$listar_avaliacao = new ListarAvaliacoesDb;
session_start();

if (isset($_SESSION['msg_sucesso'])) {
	echo $_SESSION['msg_sucesso'];
	unset($_SESSION['msg_sucesso']);
}
?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<section class="section-intro padding-y-sm">
    <div class="container">
        <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                <li data-target="#carousel1_indicator" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="Assets/images/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/images/1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="Assets/images/1.jpg" alt="Third slide">
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

<section class="section-content padding-y-sm">
    <div class="container">
        <article class="card card-body">
            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary">
                            <i class="fas fa-truck"></i>
                        </span>
                        <figcaption class="pt-3">
                            <h5 class="title">Entrega Rápida</h5>
                            <p>Entrega rápida e segura para todo Brasil.</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary">
                            <i class="fas fa-comment-dots"></i>
                        </span>
                        <figcaption class="pt-3">
                            <h5 class="title">Suporte Necessário</h5>
                            <p>Compra prática e rápida, em todo o site.</p>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary">
                            <i class="fas fa-lock"></i>
                        </span>
                        <figcaption class="pt-3">
                            <h5 class="title">Altamente Seguro</h5>
                            <p>Faça suas compras sem se preocupar com a entrega de seu pedido.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </article>
    </div>
</section>

