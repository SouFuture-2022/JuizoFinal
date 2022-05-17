<?php #use App\Models\Produtos; #include('./Views/AcaoCarrinho.php'); $categoria = new Produtos(); 
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Type some info">
    <meta name="author" content="Type name">
    <title>Loja Demo</title>
    <link href="Assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
    <link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header class="section-header">
        <section class="header-main">
            <div class="container">
                <div class="row gy-3 align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="index.php" class="brand-wrap"><img class="logo" src="Assets/images/logo.png"></a>
                    </div>
                    <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                        <div class="float-end">
                            <a href="#" class="btn btn-light">
                                <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">Login </span>
                            </a>
                            <a href="#" class="btn btn-light">
                                <i class="fa fa-heart"></i> <span class="ms-1 d-none d-sm-inline-block">Favoritos
                                </span>
                            </a>
                            <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light">
                                <i class="fa fa-shopping-cart"></i> <span class="ms-1">Carrinho </span>
                            </a>
                        </div>
                    </div> <!-- col end.// -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <form action="#" class="">
                            <div class="input-group">
                                <input type="search" class="form-control" style="width:55%" placeholder="Search">
                                <!--<select class="form-select">
                                    <option value="">Todo tipo</option>
                                    <option value="codex">Especial</option>
                                    <option value="comments">Apenas o melhor</option>
                                    <option value="content">Mais recente</option>
                                </select> -->
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div> <!-- input-group end.// -->
                        </form>
                    </div> <!-- col end.// -->

                </div> <!-- row end.// -->
            </div> <!-- container end.// -->
        </section> <!-- header-main end.// -->

        <nav class="navbar navbar-light bg-black border-top navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar_main">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar_main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ps-0" href="#"> Categorias </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu name</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Outros</a>
                        </li>
                    </ul>
                </div> <!-- collapse end.// -->
            </div> <!-- container end.// -->
        </nav> <!-- navbar end.// -->
    </header> <!-- section-header end.// -->

    <!-- ================ SECTION INTRO ================ -->
    <section class="section-intro bg-primary-light padding-y-lg">
        <div class="container">

            <article class="my-5">
                <h1 class="display-4 text-white">
                    Melhores produtos & <br> marcas em nossa loja </h1>
                <p class="lead text-white">Produtos da moda, preços de fábrica, excelente serviço</p>
                <a href="#" class="btn btn-warning"> Compre agora</a>
                <a href="#" class="btn btn-light"> Saber mais </a>
            </article>

        </div> <!-- container end.// -->
    </section>
    <!-- ================ SECTION INTRO END.// ================ -->

    <!-- ================ SECTION PRODUCTS ================ -->
    <section class="padding-y">
        <div class="container">

            <header class="section-heading">
                <h3 class="section-title">Novo Produtos</h3>
            </header>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/1.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$790.50</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">GoPro HERO6 4K Action Camera - Black</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/2.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$320.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Canon camera 20x zoom, Black color EOS 2000</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/3.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$120.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Xiaomi Redmi 8 Original Global Version 4GB</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/4.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$120.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/5.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$120.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Apple Watch Series 1 Sport Case 38mm Black</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/6.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$120.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">T-shirts with multiple colors, for men and lady</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/7.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$99.50</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">Gaming Headset 32db Blackbuilt in mic</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <figure class="card card-product-grid">
                        <div class="img-wrap">
                            <img src="Assets/images/8.jpg">
                        </div>
                        <figcaption class="info-wrap border-top">
                            <div class="price-wrap">
                                <span class="price">$120.00</span>
                            </div> <!-- price-wrap.// -->
                            <p class="title mb-2">T-shirts with multiple colors, for men and lady</p>

                            <a href="#" class="btn btn-primary">Adicionar</a>
                            <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
                        </figcaption>
                    </figure>
                </div> <!-- col end.// -->
            </div> <!-- row end.// -->

        </div> <!-- container end.// -->
    </section>
    <!-- ================ SECTION PRODUCTS END.// ================ -->

    <?php
    /*

$ds = new Produtos();

if(isset($_POST['btBuscarProduto'])) { $buscar  = $_POST['buscar'];
	if(empty($buscar)) { ?>
    <div class="alert alert-danger" role="alert">
        <p class="text-center"> Digite Algo para Busca! </p>
    </div>
    <?php } else { ?>
    <div class="alert alert-dark" role="alert">
        <?php foreach($ds->produto->findAllSearch($buscar) as $key => $value) { ?>
        <p class="text-center"><a
                href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>"><?php echo $value->nome; ?></a>
        </p>
        <?php } ?>
    </div>
    <?php }}
*/
    ?>
