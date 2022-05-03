<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastro de Categoria </h4><hr>
			<form action="Models/Enviarcategoria.php" method="POST">
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="nome_categoria" id="Nomecategoria" class="form-control" placeholder="Nome da Categoria" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Cadastrar">
					  </div>
					</div>
				</div>
			</div>
		</form><hr>
		</header>
    </div>

<?php include('rodape.php'); ?>