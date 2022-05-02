<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastro de Produto </h4><hr>
			<p style="color: #FF0000;"> Atenção: Todos os campos são obrigatórios. O o campo <b>preço</b>, deve constar nesse formato: 00.00 / ex. 30.00 </p>
			<form action="Models/Enviarproduto.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="nome" id="Nome" class="form-control" placeholder="Nome" required="required">
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<!-- <input type="text" name="preco" id="Preco" class="form-control" placeholder="R$ Preço" onKeyPress="return(MascaraMoeda(this,'.',',',event))" required="required"> -->
						<input type="text" name="preco" id="Preco" class="form-control" placeholder="R$ Preço: ex. 00.00" required="required">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="nome_categoria" id="Nomecategoria" class="form-control" required="required">
						<option value="Escolha uma Categoria"> Escolha uma Categoria </option>
						<?php
							$listarDados = mysqli_query($conn, "SELECT * FROM categorias ORDER BY nome_categoria");
							while($escrever = mysqli_fetch_array($listarDados)) { ?>
							<option value="<?php echo $escrever['nome_categoria']; ?>"><?php echo $escrever['nome_categoria']; ?></option>
						<?php } ?>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="number" name="qtd" id="Quantidade" class="form-control" placeholder="Quantidade" required="required">
					  </div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<textarea type="text" name="descricao" id="Descrição" class="form-control" placeholder="Descrição" required="required"></textarea>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="file" name="imagem" id="Imagem" class="form-control" placeholder="Imagem" required="required">
					  </div>
					</div>
				</div>
			</div>
			<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Cadastrar">
		</form><hr>
		</header>
    </div>

<?php include('rodape.php'); ?>