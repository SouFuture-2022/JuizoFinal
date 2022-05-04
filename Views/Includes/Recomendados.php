<section class="section-content">
	<div class="container">
		<header class="section-heading">
			<h3 class="section-title">Produtos Relacionados</h3>
		</header>

		<div class="row">
			<?php
			$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
			$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
			$quantidade_pagina = 4;
			$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;
			$id_categoria = $resultado->id_categoria;

			foreach($produto->findAllRelated($inicio, $quantidade_pagina, $id_categoria) as $key => $value) { ?>
				<div class="col-md-3">
					<div href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="card card-product-grid">
						<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="img-wrap"><img src="Upload/<?php echo $value->imagem_destaque; ?>" /></a>
						<figcaption class="info-wrap">
						<a href="../Produto?acao=prod&produto=<?php echo base64_encode($value->id_produto); ?>" class="title"><?php echo $value->nome; ?></a>

							<div class="rating-wrap">
								<ul class="rating-stars">
									<li>
										<span class="text-warning">
											<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
											</svg>
										</span>
										<span class="text-warning">
											<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
											</svg>
										</span>
										<span class="text-warning">
											<svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
												<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
											</svg>
										</span>
									</li>
								</ul>
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
			  <a class="page-link" href="../Produto?acao=prod&produto='<?php echo base64_encode($id_produto); ?>&?pagina=1" aria-label="Anterior">
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
						<li class="page-item"><a class="page-link" href="../Produto?acao=prod&produto='<?php echo base64_encode($id_produto); ?>&pagina=<?php echo $pagina_anterior; ?>"><?php echo $pagina_anterior; ?></a></li>
					<?php }
				}
			?>

			<li class="page-item active"><a class="page-link" href="../Produto?acao=prod&produto='<?php echo base64_encode($id_produto); ?>&pagina=<?php echo $pagina; ?>"><?php echo $pagina; ?><span class="sr-only">(atual)</span></a></li>

			<?php
				for($pagina_posterior = $pagina + 1; $pagina_posterior <= $pagina + $maximo_links; $pagina_posterior++) {
					if($pagina_posterior <= $quantidade_linhas) { ?>
						<li class="page-item"><a class="page-link" href="../Produto?acao=prod&produto='<?php echo base64_encode($id_produto); ?>&pagina=<?php echo $pagina_posterior; ?>"><?php echo $pagina_posterior; ?></a></li>
					<?php }
				}
			?>
			<li class="page-item">
			  <a class="page-link" href="../Produto?acao=prod&produto='<?php echo base64_encode($id_produto); ?>&pagina=<?php echo $quantidade_linhas; ?>" aria-label="Próximo">
				<span aria-hidden="true">&raquo;</span>
				<span class="sr-only">Próximo</span>
			  </a>
			</li>
		  </ul>
		</nav>
	</div>
</section>