<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="card">

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
                                        <img class="d-block w-100" src="/Assets/images/big.jpg" alt="First slide">
                                    </div>

                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="/Assets/images/thumb2.jpg" alt="Second slide">
                                    </div>

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
                                <input type="hidden" name="id_produto" value="<?php echo $resultado->id_produto; ?>" />
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

                        <h2 class="title">
                            Nome
                        </h2>

                        <div class="rating-wrap my-3">
                            <ul class="rating-stars">

                                <li style="width:80%" class="stars-active">
                                    1
                                    <i class="fa fa-star"></i>
                                    2
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    3
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    4
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i>
                                    5
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>

                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <span class="label-rating">

                            </span>

                            <small class="label-rating text-muted">

                            </small>

                            <small class="label-rating text-success">
                                <i class="far fa-check-square"></i>

                            </small>

                            <small class="label-rating">
                                <button type="submit" name="btFavoritar" onclick="mostrar('social-icon')"
                                    class="btn btn-primary" title="Compartilhar">
                                    <i class="fas fa-share-alt-square"></i>
                                </button>
                            </small>

                            <small class="label-rating">

                                <form action="" method="POST">
                                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>" />
                                    <input type="hidden" name="id_produto" <button type="submit" name="btFavoritar"
                                        class="btn btn-danger" title="Favoritar">
                                    <i class="far fa-heart"></i>
                                    </button>
                                </form>
                            </small>
                        </div>

                        <div id="social-icon" class="mb-3 hidden">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>"
                                target="_blank"><img src="Assets/images/social-icon-facebook.png" width="35"
                                    height="35" /></a>
                            <a href="https://twitter.com/intent/tweet?url=[http://lojademo.freevar.com/<?php echo 'Produto?acao=prod&produto=' . base64_encode($id_produto); ?>]&text=[<?php echo $resultado->nome; ?>]"
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
                            <var class="price h4">R$ 23,00

                            </var>
                        </div>

                        <dl class="row">
                            <dt class="col-sm-3">Categoria:</dt>
                            <dd class="col-sm-9">

                            </dd>
                            <dt class="col-sm-3">Quantidade em Estoque:</dt>
                            <dd class="col-sm-9">

                            </dd>
                            <dt class="col-sm-3">Peso:</dt>
                            <dd class="col-sm-9">

                            </dd>

                            <dt class="col-sm-3">Cor Escolhida:</dt>
                            <dd class="col-sm-9">

                            </dd>

                        </dl>

                        <div class="card mt-3"><strong>Descrição:</strong>

                        </div>


                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md flex-grow-0 mt-3">
                                <label><strong>Tamanhos Disponiveis</strong></label>
                                <div class="input-group mb-3 input-spinner">
                                    <ul>
                                        <li>P:
                                            <?php echo $tamanhoP; ?>
                                        </li>
                                        <li>M:
                                            <?php echo $tamanhoM; ?>
                                        </li>
                                        <li>G:
                                            <?php echo $tamanhoG; ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group col-md mt-3">
                                <label><strong>Escolha o Tamanho</strong></label>
                                <div class="mt-1">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_produto"
                                            value="<?php echo $resultado->id_produto; ?>" />
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

                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md mt-3">
                                <label><strong>Selecione a Cor</strong></label>
                                <div class="mt-1">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_produto"
                                            value="<?php echo $resultado->id_produto; ?>" />

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="cor" value="<?php echo $value->nome_cor; ?>"
                                                class="custom-control-input">
                                            <div class="custom-control-label">

                                            </div>
                                        </label>

                                        <div class="form-group">
                                            <button type="submit" name="btEscolherCor"
                                                class="btn btn-primary mt-3">Escolher Cor</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <hr>
                        <a href="../Carrinho?acao=add&produto=<?php echo base64_encode($resultado->id_produto); ?>"
                            class="btn btn-primary">Compre Agora</a>
                        <a href="../Carrinho?acao=add&produto=<?php echo base64_encode($resultado->id_produto); ?>"
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

<? //php include('Includes/Recomendados.php');
//} else {
//echo 'Error';
//} 
?>