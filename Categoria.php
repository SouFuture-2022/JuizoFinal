<?php include('menu.php'); ?>

 <div class="col-lg-9">
       <header class="jumbotron my-4">
	    <div class="row"><?php
		if (isset($_GET["nome_categoria"])) {
		$nome_categoria = filter_input(INPUT_GET, 'nome_categoria', FILTER_SANITIZE_STRING);

		$listarDados = mysqli_query($conn, "SELECT * FROM produtos WHERE nome_categoria = '$nome_categoria'");
		while($escrever = mysqli_fetch_array($listarDados)) { ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="Produto?id_produto=<?php echo $escrever['id_produto']; ?>"><img class="card-img-top" src="upload/<?php echo $escrever['imagem']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Produto?id_produto=<?php echo $escrever['id_produto']; ?>"><?php echo $escrever['nome']; ?></a>
                </h4>
                <h5> R$ <?php echo $escrever['preco']; ?></h5>
				<p class="card-text"><?php echo $escrever['nome_categoria']; ?></p>
                <p class="card-text"><?php echo $escrever['descricao']; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="carrinho.php?acao=add&id_produto=<?php echo $escrever['id_produto']?>" class="card-link">
				<img src="Template/img/carrinho.png" width="20" height="20" alt="" /></a>
              </div>
            </div>
          </div>
        <?php
		}} else { ?>
			<div class="container"><header class="jumbotron my-4"><center style="color: #FF0000;"> Categoria não Encontrada!!! </center></header></div>
		<?php } ?>
		</div>
		</header>
      </div>

<?php include('rodape.php'); ?>