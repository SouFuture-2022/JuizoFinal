<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loja Demo</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
    <script src="Assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
    <script src="Assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="Assets/js/script.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
                            <a href="/Favoritos" class="btn btn-light">
                                <i class="fa fa-heart"></i> <span class="ms-1 d-none d-sm-inline-block">Favoritos
                                </span>
                            </a>
                            <a data-bs-toggle="offcanvas" href="/Carrinho" class="btn btn-light">
                                <i class="fa fa-shopping-cart"></i> <span class="ms-1">Carrinho </span>
                            </a>
                            <a href="/Login" class="btn btn-light">
                                <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline-block">Login </span>
                            </a>
                        </div>
                    </div> <!-- col end.// -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <form action="#" class="">
                            <div class="input-group">
                                <input type="search" class="form-control" style="width:55%" placeholder="Search">
                                <button class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div> <!-- input-group end.// -->
                        </form>
                    </div> <!-- col end.// -->
                </div> <!-- row end.// -->
            </div> <!-- container end.// -->
        </section> <!-- header-main end.// -->

        <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar_main">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar_main">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link ps-0" href="#">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meus itens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meu perfil</a>

                            <a class="nav-link ps-0" href="/Categorias">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Produtos">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Itens">Meus itens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Perfil">Meu perfil</a>
                        </li>
                    </ul>
                </div> <!-- collapse end.// -->
            </div> <!-- container end.// -->
        </nav> <!-- navbar end.// -->
    </header> <!-- section-header end.// -->
</body>