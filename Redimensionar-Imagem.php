<?php session_start(); include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Redimensionar Imagem </h4><hr>
			<p style="color: #FF0000;"> Atenção: O campo <b>preço</b>, deve constar nesse formato: 00.00 / ex. 3.00 </p>
			<form action="Redimensionar.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<div class="form-label-group">
					<input type="file" name="imagem" id="Imagem" class="form-control" placeholder="Imagem" required="required">
				</div>
			</div>
			<input type="submit" name="btRedimensionar" class="btn btn-primary btn-block" value="Redimensionar">
		</form><hr>
		<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<?php
							if(isset($_SESSION['retorno_imagem'])) {
								echo $_SESSION['retorno_imagem'];
								unset($_SESSION['retorno_imagem']);
							}
						?>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<?php
							if(isset($_SESSION['retorno_texto'])) {
								echo $_SESSION['retorno_texto'];
								unset($_SESSION['retorno_texto']);
							}
						?>
					  </div>
					</div>
				</div>
			</div>
		</header>
    </div>

<?php include('rodape.php'); ?>