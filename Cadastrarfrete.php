<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastro de Frete </h4><hr>
			<p style="color: #FF0000;"> Atenção: O campo <b>valor</b>, deve constar nesse formato: 00.00 / ex. 3.00 </p>
				<form action="Models/Enviarfrete.php" method="POST">
				<div class="form-group">
					<div class="form-label-group">
						<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required="required" />
					</div>
				</div>
				<div class="form-group">
				  <div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required="required" />
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="text" name="valor" id="valor" class="form-control" placeholder="Valor: ex. 00.00" required="required" />
					  </div>
					</div>
				  </div>
				</div>
					<input type="submit" name="btCadastrar" class="btn btn-primary btn-block" value="Enviar">
				</form><hr>
			</div>
		</header>
    </div>

<?php include('rodape.php'); ?>