<?php
	$produto = new Produtos();
	$categoria = new Categorias();
	$avaliacao = new Avaliacoes;
	
	if(isset($_GET['acao']) && $_GET['acao'] == 'cate') {
			$id_categoria = (int)base64_decode($_GET['categoria']);
			$resultado = $produto->findAllProductCategories($id_categoria);
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
		<header class="section-heading">
			<h2 class="title-page">Todas as Categorias</h2>
				<nav>
					<ol class="breadcrumb text-white">
						<li class="breadcrumb-item"><a href="../Index">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Todas as Categoria</a></li>
						<li class="breadcrumb-item active" aria-current="page"><?php echo $resultado->nome_categoria; ?>Ótimos artigos</li>
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

						<div class="filter-content collapse show" id="collapse_1" style="">
							<div class="card-body">
								<form action="" method="POST" class="pb-3">
									<div class="input-group">
										<input type="text" name="buscar" class="form-control" placeholder="Buscar Categoria">
										<div class="input-group-append">
											<button type="submit" name="btBuscarCategoria" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</article>
					
					<?php
					if(isset($_POST['btBuscarCategoria'])) {
						$buscar = $_POST['buscar'];
						if(empty($buscar)) { ?>
							<div class="alert alert-danger" role="alert">
								<p class="text-center"> Digite Algo para Busca! </p>
							</div>
					<?php } else { ?>
						<div class="alert alert-dark" role="alert">
					<?php foreach($categoria->findAllSearch($buscar) as $key => $value) { ?>
							  <p class="text-center"><a href="../Categoria?acao=cate&categoria=<?php echo base64_encode($value->id_categoria); ?>"><?php echo $value->nome_categoria; ?></a></p>
					<?php } ?>
						</div>
					<?php }} ?>

					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
								<h6 class="title">Categorias</h6>
							</a>
						</header>

						<div class="filter-content collapse show" id="collapse_2" style="">
							<div class="card-body">
								<ul class="list-menu">
								<?php foreach($categoria->findAll() as $key => $value) { ?>
									<li><a href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($value->id_categoria); ?>"><?php echo $value->nome_categoria; ?></a></li>
								<?php } ?>
								</ul>
							</div>
						</div>
					</article>

					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
								<h6 class="title">Produtos Relacionados</h6>
							</a>
						</header>

						<div class="filter-content collapse show" id="collapse_3" style="">
							<div class="card-body">
								<ul class="list-menu">
								<?php foreach($produto->findAllProductCategories($id_categoria) as $key => $value) { ?>
									<li><a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>"><?php echo $value->nome; ?></a></li>
								<?php } ?>
								</ul>
							</div>
						</div>
					</article>

				</div>
			</aside>


			<main class="col-md-9">
				<header class="border-bottom mb-4 pb-3">
						<div class="form-inline">
							<span class="mr-md-auto"><?php $linhas = $produto->findAllCountProduct($id_categoria); echo $linhas; ?> itens encontrados</span>
							<select class="mr-2 form-control">
								<option>Latest items</option>
								<option>Trending</option>
								<option>Most Popular</option>
								<option>Cheapest</option>
							</select>
							<div class="btn-group">
								<a href="#" class="btn btn-primary btn-block">Buscar</a>
							</div>
						</div>
				</header>

				<?php
				$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				$quantidade_pagina = 4;
				$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

				foreach($produto->findAllRelated($inicio, $quantidade_pagina, $id_categoria) as $key => $value) { ?>
				<article class="card card-product-list">
					<div class="row no-gutters">
						<aside class="col-md-3">
							<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="img-wrap">
								<!-- <span class="badge badge-danger"> NEW </span> -->
								<img src="Upload/<?php echo $value->imagem_destaque; ?>">
							</a>
						</aside>

						<div class="col-md-6">
							<div class="info-main">
								<a href="#" class="h5 title"><?php echo $value->nome; ?></a>
								<div class="rating-wrap mb-3">
									<ul class="rating-stars">
										<?php $total_media = $avaliacao->find($id_produto); $media = intval($total_media); $total = $avaliacao->findAllCount($id_produto); ?>
										<li style="width:80%" class="stars-active">
										<?php if($media == 1) { ?>
											<i class="fa fa-star"></i>
										<?php } elseif($media == 2) { ?>
											<i class="fa fa-star"></i><i class="fa fa-star"></i>
										<?php } elseif($media == 3) { ?>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										<?php } elseif($media == 4) { ?>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										<?php } elseif($media == 5) { ?>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										<?php } ?>
										</li>
										<li>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</li>
									</ul>
									<div class="label-rating"><?php echo $media . '/' . $total; ?></div>
								</div>
								<p><?php echo $value->descricao; ?></p>
							</div>
						</div>

						<aside class="col-sm-3">
							<div class="info-aside">
								<div class="price-wrap">
									<span class="price h5">R$<?php echo number_format($value->preco, 2, ',', ' '); ?></span>	
									<!-- <del class="price-old">$198</del> -->
								</div>
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="btn btn-primary btn-block"> Details </a>
									<a href="../Carrinho?acao=add&produto=<?php echo base64_encode($value->id_produto); ?>" class="btn btn-light btn-block">
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
					  <a class="page-link" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($value->id_categoria); ?>&pagina=1" aria-label="Anterior">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Anterior</span>
					  </a>
					</li>
					<?php
						$linhas = $produto->findAllCount();
						$quantidade_linhas = ceil($linhas / $quantidade_pagina);
						$maximo_links = 3;

						for($pagina_anterior = $pagina - $maximo_links; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
							if($pagina_anterior >= 1) { ?>
								<li class="page-item"><a class="page-link" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($id_categoria); ?>&pagina=<?php echo $pagina_anterior; ?>"><?php echo $pagina_anterior; ?></a></li>
							<?php }
						}
					?>

					<li class="page-item active"><a class="page-link" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($id_categoria); ?>&pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?><span class="sr-only">(atual)</span></a></li>

					<?php
						for($pagina_posterior = $pagina + 1; $pagina_posterior <= $pagina + $maximo_links; $pagina_posterior++) {
							if($pagina_posterior <= $quantidade_linhas) { ?>
								<li class="page-item"><a class="page-link" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($id_categoria); ?>&pagina=<?php echo $pagina_posterior; ?>"><?php echo $pagina_posterior; ?></a></li>
							<?php }
						}
					?>
					<li class="page-item">
					  <a class="page-link" href="../AllCategorias?acao=cate&categoria=<?php echo base64_encode($id_categoria); ?>&pagina=<?php echo $quantidade_linhas; ?>" aria-label="Próximo">
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
<?php } else { echo 'error'; } ?>