<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Cadastrar Status </h4><hr>
			<form action="Models/Enviastatus.php" method="POST">
				<div class="form-group">
				<div class="form-row">
					<div class="col-md-6">
					  <div class="form-label-group">
						<select name="nome" id="Nome" class="form-control" required="required">
						<option value="Escolha um Nome"> Escolha um Nome </option>
						<?php
							$listarDados = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY nome");
							while($escrever = mysqli_fetch_array($listarDados)) { ?>
							<option value="<?php echo $escrever['nome']; ?>"><?php echo $escrever['nome']; ?></option>
						<?php } ?>
						</select>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-label-group">
						<input type="submit" name="btEnviar" class="btn btn-primary btn-block" value="Enviar">
					  </div>
					</div>
				</div>
			</div>
			</form>
			<hr>
		</header>
    </div>

<?php include('rodape.php'); ?>