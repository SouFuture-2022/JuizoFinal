<?php include('menu.php'); ?>

    <header class="jumbotron my-4">
	<?php
	if (isset($_GET["id_produto"])) {
	$id_produto = filter_input(INPUT_GET, 'id_produto', FILTER_SANITIZE_NUMBER_INT);

	$listarDados = mysqli_query($conn, "SELECT * FROM produtos WHERE id_produto = '$id_produto'");
	while($escrever = mysqli_fetch_array($listarDados)) { ?>
		<div class="container">
		  <div class="row">
			<div class="col-sm">
            <div class="card h-100">
			  <img class="card-img-top" id="myimage" src="Upload/<?php echo $escrever['imagem']; ?>" width="100" height="200" alt="">
              <div class="card-body">
                <h5> Nome: <?php echo $escrever['nome']; ?></h5>
                <h5> Preço: R$ <?php echo $escrever['preco']; ?></h5>
                <h5> Estoque: <?php echo $escrever['qtd']; ?></h5>
                <h5> Categoria: <a href="Categoria.php?nome_categoria=<?php echo $escrever['nome_categoria']; ?>"><?php echo $escrever['nome_categoria']; ?></a></h5>
                <h5> Descrição: <?php echo $escrever['descricao']; ?></h5>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="carrinho.php?acao=add&id_produto=<?php echo $escrever['id_produto']?>" class="card-link">
				<img src="Template/img/carrinho.png" width="20" height="20" alt="" /></a>
              </div>
            </div>
			</div>
			<div class="col-sm">
			  <div id="myresult" class="img-zoom-result" width="100" height="100" alt=""></div>
		  </div>
		</div>
		</div>
    <?php
	}} else { ?>
		<div class="container"><header class="jumbotron my-4"><center style="color: #FF0000;"> Produto não Encontrado!!! </center></header></div>
	<?php } ?>
	</header>

<?php include('rodape.php'); ?>