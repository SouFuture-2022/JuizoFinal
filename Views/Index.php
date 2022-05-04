<?php

	$produto = new Produtos();
	$avaliacao = new Avaliacoes;
	session_start();

	if(isset($_SESSION['msg_sucesso'])) {
		echo $_SESSION['msg_sucesso'];
		unset($_SESSION['msg_sucesso']);
	}
?>
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
					<figure  class="item-feature">
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
				<figure  class="item-feature">
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

<section class="section-content">
	<div class="container">
		<header class="section-heading">
			<h3 class="section-title">Produtos Populares</h3>
		</header>

		<div class="row">
			<?php
			$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			$quantidade_pagina = 4;
			$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

			foreach($produto->findAllPopular($inicio, $quantidade_pagina) as $key => $value) { ?>
				<div class="col-md-3">
					<div href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="card card-product-grid">
						<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="img-wrap"><img src="Uploads/ProdutosDestaque/<?php echo $value->imagem_destaque; ?>" /></a>
						<figcaption class="info-wrap">
						<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="title"><?php echo $value->nome; ?></a>

							<div class="rating-wrap">
								<ul class="rating-stars">
								<?php $total_media = $avaliacao->find($value->id_produto); $media = intval($total_media); $total = $avaliacao->findAllCount($value->id_produto); ?>
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
								<span class="label-rating"><?php echo $media . '/' . $total; ?></span>
								<span class="label-rating text-muted"> 34 reviws</span>
							</div>
							<div class="price mt-1">R$<?php echo number_format($value->preco, 2, ',', ' '); ?></div>
						</figcaption>
					</div>
				</div>
			<?php } ?>
		</div>
		<nav aria-label="Navegação de página exemplo">
		  <ul class="pagination">
			<li class="page-item">
			  <a class="page-link" href="../Index?pagina=1" aria-label="Anterior">
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
						<li class="page-item"><a class="page-link" href="../Index?pagina=<?php echo $pagina_anterior; ?>"><?php echo $pagina_anterior; ?></a></li>
					<?php }
				}
			?>

			<li class="page-item active"><a class="page-link" href="../Index?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?><span class="sr-only">(atual)</span></a></li>

			<?php
				for($pagina_posterior = $pagina + 1; $pagina_posterior <= $pagina + $maximo_links; $pagina_posterior++) {
					if($pagina_posterior <= $quantidade_linhas) { ?>
						<li class="page-item"><a class="page-link" href="../Index?pagina=<?php echo $pagina_posterior; ?>"><?php echo $pagina_posterior; ?></a></li>
					<?php }
				}
			?>
			<li class="page-item">
			  <a class="page-link" href="../Index?pagina=<?php echo $quantidade_linhas; ?>" aria-label="Próximo">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Próximo</span>
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
</section>

<hr>

<section class="section-content">
		<div class="container">
		<header class="section-heading">
		<h3 class="section-title">Adicionados Recentemente</h3>
		</header>

		<div class="row">
			<?php
			$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			$quantidade_pagina = 4;
			$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

			foreach($produto->findAll($inicio, $quantidade_pagina) as $key => $value) { ?>
				<div class="col-md-3">
					<div href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="card card-product-grid">
						<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="img-wrap"><img src="Uploads/ProdutosDestaque/<?php echo $value->imagem_destaque; ?>" /></a>
						<figcaption class="info-wrap">
						<span class="badge badge-danger">NEW</span><a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="title"><?php echo $value->nome; ?></a>

							<div class="rating-wrap">
								<ul class="rating-stars">
								<?php $total_media = $avaliacao->find($value->id_produto); $media = intval($total_media); $total = $avaliacao->findAllCount($value->id_produto); ?>
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
								<span class="label-rating"><?php echo $media . '/' . $total; ?></span>
								<span class="label-rating text-muted"> 34 reviws</span>
							</div>
							<div class="price mt-1">R$<?php echo number_format($value->preco, 2, ',', ' '); ?></div>
						</figcaption>
					</div>
				</div>
			<?php } ?>
		</div>
		<nav aria-label="Navegação de página exemplo">
		  <ul class="pagination">
			<li class="page-item">
			  <a class="page-link" href="../Index?pagina=1" aria-label="Anterior">
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
						<li class="page-item"><a class="page-link" href="../Index?pagina=<?php echo $pagina_anterior; ?>"><?php echo $pagina_anterior; ?></a></li>
					<?php }
				}
			?>

			<li class="page-item active"><a class="page-link" href="../Index?pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?><span class="sr-only">(atual)</span></a></li>

			<?php
				for($pagina_posterior = $pagina + 1; $pagina_posterior <= $pagina + $maximo_links; $pagina_posterior++) {
					if($pagina_posterior <= $quantidade_linhas) { ?>
						<li class="page-item"><a class="page-link" href="../Index?pagina=<?php echo $pagina_posterior; ?>"><?php echo $pagina_posterior; ?></a></li>
					<?php }
				}
			?>
			<li class="page-item">
			  <a class="page-link" href="../Index?pagina=<?php echo $quantidade_linhas; ?>" aria-label="Próximo">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Próximo</span>
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<h3 class="mb-3">Download app demo text</h3>
		<a href="#"><img src="Assets/images/googleplay.png" height="40"></a>
		<a href="#"><img src="Assets/images/appstore.png" height="40"></a>
	</div>
</section>