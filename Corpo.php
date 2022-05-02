<?php include('Models/Conexaodb.php'); include('Models/Buscarproduto.php'); include('Categorias.php'); ?>

      <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="Template/img/img1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Template/img/img2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Template/img/img3.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"> Previous </span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"> Next </span>
          </a>
        </div>

        <div class="row">
		<?php
		$listarDados = mysqli_query($conn, "SELECT * FROM produtos ORDER BY nome");
		while($escrever = mysqli_fetch_array($listarDados)) { ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="produto?id_produto=<?php echo $escrever['id_produto']; ?>"><img class="card-img-top" src="upload/<?php echo $escrever['imagem']; ?>" width="50" height="100" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
				  <a href="produto?id_produto=<?php echo $escrever['id_produto']; ?>"><?php echo $escrever['nome']; ?></a>
                </h4>
                <h5> R$ <?php echo $escrever['preco']; ?></h5>
                <p class="card-text"><?php echo $escrever['descricao']; ?></p>
                <p class="card-text"><?php echo $escrever['nome_categoria']; ?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="carrinho.php?acao=add&id_produto=<?php echo $escrever['id_produto']?>" class="card-link">
				<img src="Template/img/carrinho.png" width="20" height="20" alt="" /></a>
              </div>
            </div>
          </div>
        <?php } ?>
		</div>
      </div>