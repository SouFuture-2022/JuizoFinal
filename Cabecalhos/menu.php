<?php include('./Views/AcaoCarrinho.php'); $produto = new Produtos(); ?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="max-age=604800" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Loja Demo</title>
	<link href="Assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="Assets/css/ui.css" rel="stylesheet" type="text/css"/>
	<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
	<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
	<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"rel="stylesheet">
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
				<li class="nav-item"><a class="nav-link" href="../Carrinho">Carrinho</a></li>
			</ul>
			<ul class="navbar-nav">
				<li  class="nav-item"><a href="#" class="nav-link">Fone: +55 (00) 9.0000-0000</a></li>
				<!-- <li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> Engl~^Esish </a>
					<ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
						<li><a class="dropdown-item" href="#"> Arabic </a></li>
						<li><a class="dropdown-item" href="#"> Russian </a></li>
					</ul>
				</li> -->
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
						<input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar Produto">
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
							<span class="badge badge-pill badge-danger notify"><?php echo $qtd_prod_carrinho; ?></span><i class="fa fa-cart-plus" aria-hidden="true"></i>
						</a>
						<!-- <div class="dropdown">
						<!-- Carrinho -->
							<!-- <a href="../Carrinho" class="icon icon-sm rounded-circle border" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-cart-plus" aria-hidden="true"></i>
							</a> -->
							<!-- Quantidade de Produtos no Carrinho -->
							<!-- <span class="badge badge-pill badge-danger notify"><?php //echo $qtd_prod_carrinho; ?></span>

							<!-- <div class="dropdown-menu p-3 dropdown-menu-right" style="min-width: 280px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(200px, 38px, 0px);" x-placement="bottom-end">

								<figure class="itemside mb-3">
									<div class="aside"><img src="bootstrap-ecommerce-html/images/items/1.jpg" class="img-sm border"></div>
										<figcaption class="info align-self-center">
											<p class="title">Name of item nice iteme</p>
											<a href="#" class="float-right">
												<span class="text-primary">
													<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
													  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
													</svg>
												</span>
											</a>
											<div class="price">$250</div>
										</figcaption>
								</figure>

								<figure class="itemside mb-3">
									<div class="aside"><img src="bootstrap-ecommerce-html/images/items/3.jpg" class="img-sm border"></div>
										<figcaption class="info align-self-center">
											<p class="title">Another name of item  item</p>
											<a href="#" class="float-right">
												<span class="text-primary">
													<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
													  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
													</svg>
												</span>
											</a>
											<div class="price">$250</div>
										</figcaption>
								</figure>

								div class="price-wrap text-center py-3 border-top">Subtotal: <strong class="h5 price">$1200</strong></div>
								<a href="../Carrinho" class="btn btn-primary btn-block"> Carrinho </a>
							</div>
						</div> -->
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
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link pl-0" data-toggle="dropdown" href="#">
						<strong>
							<i class="fas fa-align-justify"></i>&nbsp Todas as Categorias
						</strong>
					</a>

				<div class="dropdown-menu">
					<div class="dropdown-divider"></div>
					<?php foreach($categoria->findAll() as $key => $value) { ?>
					<a class="dropdown-item" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($value->id_categoria); ?>"><?php echo $value->nome_categoria; ?></a>
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
</header>

<?php
if(isset($_POST['btBuscarProduto'])) { $buscar  = $_POST['buscar'];
	if(empty($buscar)) { ?>
	<div class="alert alert-danger" role="alert">
		<p class="text-center"> Digite Algo para Busca! </p>
	</div>
<?php } else { ?>
	<div class="alert alert-dark" role="alert">
<?php foreach($produto->findAllSearch($buscar) as $key => $value) { ?>
		<p class="text-center"><a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>"><?php echo $value->nome; ?></a></p>
<?php } ?>
	</div>
<?php }} ?>