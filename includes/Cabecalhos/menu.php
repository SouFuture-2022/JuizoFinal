<? //php include('./Views/AcaoCarrinho.php'); $produto = new Produtos(); 
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loja Demo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="section-header">
        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="../Index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Contato">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Carrinho">Carrinho</a></li>
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
                        <form action="" method="POST" class="search">
                            <div class="input-group w-100">
                                <input type="text" name="buscar" id="buscar" class="form-control"
                                    placeholder="Buscar Produto">
                                <div class="input-group-append">
                                    <button type="submit" name="btBuscarProduto" class="btn btn-primary">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header mr-3">
                                <a href="../Carrinho" class="icon icon-sm rounded-circle border">
                                    <span class="badge badge-pill badge-danger notify">
                                        <? //php echo $qtd_prod_carrinho; 
										?>
                                    </span><i class="fa fa-cart-plus" aria-hidden="true"></i>
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
                                <i class="fas fa-align-justify"></i>Todas as Categorias
                            </strong>
                        </a>

                        <div class="dropdown-menu">
                            <div class="dropdown-divider"></div>
                            <?php foreach ($categoria->findAll() as $key => $value) { ?>
                            <a class="dropdown-item"
                                href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($value->id_categoria); ?>"><?php echo $value->nome_categoria; ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Carrinho">Carrinho</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>