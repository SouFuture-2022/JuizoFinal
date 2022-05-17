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
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="../Index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contato">Contato</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Fone: +55 (00) 9.0000-0000</a></li>
                </ul>
            </div>
            </div>
        </nav>

        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="../Index" class="brand-wrap"><img class="logo" src="Assets/images/logo.png"></a>
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                <div class="dropdown">
                                    <!-- Carrinho -->
                                    <a href="#" class="icon icon-sm rounded-circle border" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-header icontext">
                                <a href="../CadastrarUsuario" class="icon icon-sm rounded-circle border">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </a>

                                <div class="text">
                                    <span class="text-muted">Seja bem-vindo!</span>
                                    <div>
                                        <a href="../Login">Login</a> |
                                        <a href="../CadastrarUsuario">Registrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link pl-0" data-toggle="dropdown" href="#">
                            <strong>
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>&nbsp Todas as Categorias
                            </strong>
                        </a>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../AllCategorias">Todas as Categorias</a>
                            <a class="dropdown-item" href="../AllProdutos">Todos os Produtos</a>
                            <div class="dropdown-divider"></div>
                            <?php foreach ($categoria->findAll() as $key => $value) { ?>
                            <a class="dropdown-item" href="#"><?php echo $value->nome_categoria; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <?php foreach ($categoria->findAllMenu() as $key => $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $value->nome_categoria; ?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</body>