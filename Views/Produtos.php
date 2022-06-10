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

use App\Infra\Dao\Avaliacoes\CadastrarAvaliacoesDb;
use App\Infra\Dao\Avaliacoes\ListarAvaliacoesDb;
use App\Infra\Dao\Favoritos\CadastrarFavoritosDb;
use App\Infra\Dao\Imagens\ListarImagensDb;
use App\Infra\Dao\Pedido\ListarPedidoDb;
use App\Infra\Dao\Produto\AlterarProdutoDb;
use App\Infra\Dao\Produto\ListarProdutoDb;
use App\Models\Produtos;
use App\Models\Categorias;
use App\Models\Tamanho;
use App\Models\Imagens;
use App\Models\Cores;
use App\Models\Favoritos;
use App\Models\Avaliacoes;
use App\Models\Pedidos;

if (isset($_SESSION['msg_sucesso'])) {
	echo $_SESSION['msg_sucesso'];
	unset($_SESSION['msg_sucesso']);
}

$produto = new Produtos();
$categoria = new Categorias();
$imagem = new Imagens();
$cor = new Cores();
$tamanho = new Tamanho();
$favoritar = new Favoritos();
$avaliacao = new Avaliacoes();
$pedidos = new Pedidos();
$alterar_produto = new AlterarProdutoDb;
$insert_favoritar = new CadastrarFavoritosDb;
$insert_avaliacao = new CadastrarAvaliacoesDb;
$listar_produto = new ListarProdutoDb;
$listar_imagem = new ListarImagensDb;
$listar_avaliacao = new ListarAvaliacoesDb;
$listar_pedidos = new ListarPedidoDb;

if (isset($_POST['btEscolherCor'])) {
	$id_produto = $_POST['id_produto'];
	$cor = $_POST['cor'];

	$produto->setCor($cor);

	if ($alterar_produto->updateCor($id_produto)) {
		$_SESSION['msg_sucesso'] =
			'<div class="alert alert-success" role="alert">
				Cor Escolhida Com sucesso...
			</div>';
		header('Location: ../Produto?acao=prod&produto=' . base64_encode($id_produto));
	}
}

if (isset($_POST['btEscolherTamanho'])) {
	$id_produto = $_POST['id_produto'];
	$tamanho = $_POST['tamanho'];

	$produto->setTamanho($tamanho);

	if ($alterar_produto->updateTamanho($id_produto)) {
		$_SESSION['msg_sucesso'] =
			'<div class="alert alert-success" role="alert">
				Tamanho Escolhido Com sucesso...
			</div>';
		header('Location: ../Produto?acao=prod&produto=' . base64_encode($id_produto));
	}
}

if (isset($_POST['btFavoritar'])) {
	$id_usuario  = $_POST['id_usuario'];
	$id_produto = $_POST['id_produto'];

	$favoritar->setIdusuario($id_usuario);
	$favoritar->setIdproduto($id_produto);

	if ($insert_favoritar->insert($id_usuario, $id_produto)) {
		echo "<script> alert ('Produto Favoritado'); window.location= 'http://localhost:8000/Favoritos?a=$user'</script>";
	}
}

if (isset($_POST['btAvaliar'])) {
	if (isset($_POST['estrela'])) {
		$id_produto = $_POST['id_produto'];
		$estrela  = $_POST['estrela'];

		$avaliacao->setEstrela($estrela);
		$avaliacao->setIdproduto($id_produto);

		if ($insert_avaliacao->insert()) {
                $id_prod = base64_encode($id_produto);
			echo "<script> alert ('Avaliação realizada'); window.location='http://Localhost:8000/Produtos?id_produto=$id_prod'</script></script>";
		}
	} else {
		$id_produto = $_POST['id_produto'];
            $id_prod = base64_encode($id_produto);
			echo "<script> alert ('Avaliação não realizada'); window.location='http://Localhost:8000/Produtos?id_produto=$id_prod'</script></script>";  
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
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="card">
            <?php
			if (isset($_GET['id_produto'])){
				$id_produto = base64_decode($_GET['id_produto']);
				$resultado = $listar_produto->find($id_produto);
                foreach ($resultado as $key => $valor){ 
                }
            } else {
                echo "Error";
            }
			?>  
            <div class="row no-gutters">
                <aside class="col-md-6">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="1"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="2"></li>
                                    <li data-target="#carousel1_indicator" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="Assets/images/<?php echo $valor->imagem_destaque; ?>"
                                            alt="First slide">
                                    </div>  
                                    <?php foreach ($listar_imagem->find($id_produto) as $key => $value) { ?>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="Uploads/Produtos/<?php echo $value->nome_imagem; ?>"
                                            alt="Second slide">
                                    </div>
                                    <?php } ?>
                                </div>
                                <a class="carousel-control-prev" href="#carousel1_indicator" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel1_indicator" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <center>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_produto" value="<?php echo $valor->id_produto; ?>" />
                                <div class="rating-css">
                                    <div class="star-icon">
                                        <input type="radio" name="estrela" value="1" id="estrela1">
                                        <label for="estrela1" class="fa fa-star"></label>
                                        <input type="radio" name="estrela" value="2" id="estrela2">
                                        <label for="estrela2" class="fa fa-star"></label>
                                        <input type="radio" name="estrela" value="3" id="estrela3">
                                        <label for="estrela3" class="fa fa-star"></label>
                                        <input type="radio" name="estrela" value="4" id="estrela4">
                                        <label for="estrela4" class="fa fa-star"></label>
                                        <input type="radio" name="estrela" value="5" id="estrela5">
                                        <label for="estrela5" class="fa fa-star"></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btAvaliar" class="btn btn-primary mt-3">Avaliar</button>
                                </div>
                            </form>
                        </center>
                    </article>
                </aside>

                <main class="col-md-6 border-left">
                    <article class="content-body">

                        <h2 class="title"><?php echo $valor->nome; ?></h2>

                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">
                                <?php $total_media = $listar_avaliacao->find($id_produto);
									$media = intval($total_media);
									$total = $listar_avaliacao->findAllCount($id_produto); ?>
                                <li style="width:80%" class="stars-active">
                                    <?php if ($media == 1) { ?>
                                    <i class="fa fa-star"></i>
                                    <?php } elseif ($media == 2) { ?>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <?php } elseif ($media == 3) { ?>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <?php } elseif ($media == 4) { ?>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i>
                                    <?php } elseif ($media == 5) { ?>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                    <?php } ?>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating"><?php echo $media . '/' . $total; ?></span>

                            <small class="label-rating text-muted">
                                <?php
									if (isset($_COOKIE['contador'])) {
										$cont = $_COOKIE['contador'];
										$cont++;
										echo $cont;
										setcookie('contador', $cont, time() + 60 * 60 * 365);
									} else {
										echo '1ª visita';

									} ?> visualizações</small>

                            <small class="label-rating text-success">
                                <i class="far fa-check-square"></i>
                                <?php $compras = $listar_pedidos->findAllCountShopping($resultado);
									echo $compras; ?> compras
                            </small>

                            <small class="label-rating">
                                <button type="submit" name="btFavoritar" onclick="mostrar('social-icon')"
                                    class="btn btn-primary" title="Compartilhar">
                                    <i class="fas fa-share-alt-square"></i>
                                </button>
                            </small>

                            <small class="label-rating"><?php $id_usuario = 1; ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>" />
                                    <input type="hidden" name="id_produto"
                                        value="<?php echo $valor->id_produto; ?>" />
                                    <button type="submit" name="btFavoritar" class="btn btn-danger" title="Favoritar">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </form>
                            </small>
                        </div>

                        <div id="social-icon" class="mb-3 hidden">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>"
                                target="_blank"><img src="Assets/images/social-icon-facebook.png" width="35"
                                    height="35" /></a>
                            <a href="https://twitter.com/intent/tweet?url=[http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>]&text=[<?php echo $valor->nome; ?>]"
                                target="_blank"><img src="Assets/images/social-icon-twitter.png" width="25"
                                    height="25" /></a>
                            <a href="https://api.whatsapp.com/send?text=http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>"
                                target="_blank"><img src="Assets/images/social-icon-whatsapp.jpg" width="30"
                                    height="30" /></a>
                            <a href="http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>"
                                target="_blank"><img src="Assets/images/social-icon-instagram.png" width="25"
                                    height="25" /></a>
                            <a href="http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>"
                                target="_blank"><img src="Assets/images/social-icon-google.png" width="30"
                                    height="30" /></a>
                        </div>

                        <div class="mb-3">
                            <var class="price h4">R$<?php echo number_format($valor->preco, 2, ',', ' '); ?></var>
                        </div>

                        <dl class="row">
                            <dt class="col-sm-3">Categoria:</dt>
                            <dd class="col-sm-9"><?php echo $valor->id_categoria; ?></dd>
                            <dt class="col-sm-3">Quantidade em Estoque:</dt>
                            <dd class="col-sm-9"><?php echo $valor->quantidade; ?></dd>
                            <dt class="col-sm-3">Peso:</dt>
                            <dd class="col-sm-9"><?php echo $valor->peso; ?>g</dd>
                            <?php if ($valor->cor != 0) { ?>
                            <dt class="col-sm-3">Cor Escolhida:</dt>
                            <dd class="col-sm-9"><?php echo $valor->cor; ?></dd>
                            <?php } ?>
                        </dl>

                        <div class="card mt-3"><strong>Descrição:</strong><?php echo $valor->descricao; ?></div>

                        <?php if ($valor->habilitar_tamanho == 'S') {
								$tamanhoP = $tamanho->findAllP($valor->id_produto);
								$tamanhoM = $tamanho->findAllM($valor->id_produto);
								$tamanhoG = $tamanho->findAllG($valor->id_produto);
							?>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md flex-grow-0 mt-3">
                                <label><strong>Tamanhos Disponiveis</strong></label>
                                <div class="input-group mb-3 input-spinner">
                                    <ul>
                                        <li>P: <?php echo $tamanhoP; ?></li>
                                        <li>M: <?php echo $tamanhoM; ?></li>
                                        <li>G: <?php echo $tamanhoG; ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group col-md mt-3">
                                <label><strong>Escolha o Tamanho</strong></label>
                                <div class="mt-1">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_produto"
                                            value="<?php echo $valor->id_produto; ?>" />
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="tamanho" value="P" class="custom-control-input" />
                                            <div class="custom-control-label">P</div>
                                        </label>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="tamanho" value="M" class="custom-control-input" />
                                            <div class="custom-control-label">M</div>
                                        </label>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="tamanho" value="G" class="custom-control-input" />
                                            <div class="custom-control-label">G</div>
                                        </label>

                                        <div class="form-group">
                                            <button type="submit" name="btEscolherTamanho"
                                                class="btn btn-primary mt-3">Escolher Tamanho</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php }

							if ($valor->habilitar_cor == 'S') {
								$valor->cor; ?>
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md mt-3">
                                <label><strong>Selecione a Cor</strong></label>
                                <div class="mt-1">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_produto"
                                            value="<?php echo $valor->id_produto; ?>" />
                                        <?php foreach ($cor->find($valor->id_produto) as $key => $value) { ?>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="cor" value="<?php echo $value->nome_cor; ?>"
                                                id="<?php echo $value->nome_cor; ?>" class="custom-control-input">
                                            <div class="custom-control-label"><?php echo $value->nome_cor; ?></div>
                                        </label>
                                        <?php } ?>
                                        <div class="form-group">
                                            <button type="submit" name="btEscolherCor"
                                                class="btn btn-primary mt-3">Escolher Cor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php } ?>

                        <hr>
                        <a href="../Carrinho?acao=add&produto=<?php echo base64_encode($valor->id_produto); ?>"
                            class="btn btn-primary">Compre Agora</a>
                        <a href="../Carrinho?produto=<?php echo base64_encode($valor->id_produto); ?>"
                            class="btn btn-outline-primary">
                            <span class="text">Adicionar ao Carrinho</span>
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </a>
                    </article>
                </main>
            </div>
        </div>
    </div>
</section>


