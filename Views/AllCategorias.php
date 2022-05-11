 <section class="section-name bg padding-y-sm">
	<div class="container">
		<header class="section-heading">
			<h2 class="title-page">Todas as Categorias</h2>
				<nav>
					<ol class="breadcrumb text-white">
						<li class="breadcrumb-item"><a href="../Index">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Todas as Categoria</a></li>
						<li class="breadcrumb-item active" aria-current="page">Ótimos artigos</li>
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

						<div class="filter-content collapse show" id="collapse_1">
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
					
					

					<article class="filter-group">
						<header class="card-header">
							<a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
								<h6 class="title">Categorias</h6>
							</a>
						</header>

						<div class="filter-content collapse show" id="collapse_2" >
							<div class="card-body">
								<ul class="list-menu">
								
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

						<div class="filter-content collapse show" id="collapse_3">
							<div class="card-body">
								<ul class="list-menu">
								
								</ul>
							</div>
						</div>
					</article>

				</div>
			</aside>


			<main class="col-md-9">
				<header class="border-bottom mb-4 pb-3">
						<div class="form-inline">
							<span class="mr-md-auto">itens encontrados</span>
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
				  <article class="card card-product-list">
					<div class="row no-gutters">
						<aside class="col-md-3">
							<a href="../Produto?acao=prod&produto=" class="img-wrap">
								<!-- <span class="badge badge-danger"> NEW </span> -->
								<img src="Upload/">
							</a>
						</aside>

						<div class="col-md-6">
							<div class="info-main">
								<a href="#" class="h5 title"></a>
								<div class="rating-wrap mb-3">
									<ul class="rating-stars">
										</li>
										<li>
											<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
										</li>
									</ul>
									<div class="label-rating"> </div>
								</div>
								<p></p>
							</div>
						</div>

						<aside class="col-sm-3">
							<div class="info-aside">
								<div class="price-wrap">
									<span class="price h5">R$ </span>	
									<!-- <del class="price-old">$198</del> -->
								</div>
								<p class="text-success">Free shipping</p>
								<br>
								<p>
									<a href="../Produto?acao=prod&produto="class="btn btn-primary btn-block"> Details </a>
									<a href="../Carrinho?acao=add&produto=" class="btn btn-light btn-block">
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<span class="text">Adicionar ao Carrinho</span>
									</a>
								</p>
							</div>
						</aside>
					</div>
				 </article>
				

				<nav aria-label="Navegação de página exemplo">
				  <ul class="pagination">
					<li class="page-item">
					  <a class="page-link" href="../AllCategorias?acao=cate&categoria=&pagina=1" aria-label="Anterior">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Anterior</span>
					  </a>
					</li>
					<li class="page-item"><a class="page-link" href="../AllCategorias?acao=cate&categoria="> </a></li>
					

					<li class="page-item active"><a class="page-link" href="../AllCategorias?acao=cate&categoria=&pagina="> <span class="sr-only">(atual)</span></a></li>
           				<li class="page-item">
					  <a class="page-link" href="../AllCategorias?acao=cate&categoria=&pagina=" aria-label="Próximo">
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
