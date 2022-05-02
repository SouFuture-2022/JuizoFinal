<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Verificar Categorias </h4><hr>
			<p style="color: #FF0000;"> Atenção: Ao <b>Editar/Remover</b>, quaisquer uma das categorias abaixo, os produtos que são vinculadas a elas, estarão sujeitos a "sumirem" visualmente do sistema. </p>
			<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th> Nome da Categoria </th>
						<th> Editar </th>
						<th> Remover </th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th> Nome da Categoria </th>
						<th> Editar </th>
						<th> Remover </th>
					</tr>
				</tfoot>
				<?php
				$listarDados = mysqli_query($conn, "SELECT * FROM categorias ORDER BY nome_categoria");
				while($escrever = mysqli_fetch_array($listarDados)) { ?>
				<tbody>
					<tr>
						<td>
						<form action="Models/Atalizarcategoria.php" method="POST">
							<input type="hidden" name="id_categoria" value="<?php echo $escrever['id_categoria']; ?>">
							<input type="text" name="nome_categoria" id="Nomecategoria" class="form-control" value="<?php echo $escrever['nome_categoria']; ?>"></td>
							<td><button type="submit" name="btEditar" class="btn btn-primary">
							<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
							<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
							</svg></button>
						</form></td>
						<td><button class="btn btn-primary" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#removercategoria<?php echo $escrever['id_categoria']; ?>"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
						<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
						</svg></button></td>
					</tr>
				</tbody>
				<?php } ?>
			</table>
			</div>
			<hr>
		</header>
    </div>

<!-- Remove Categoria Modal -->
<?php
	$listarDados = mysqli_query($conn, "SELECT * FROM categorias");
	while($escrever = mysqli_fetch_array($listarDados)) { ?>

    <div class="modal fade" id="removercategoria<?php echo $escrever['id_categoria']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Tem certeza que você deseja remover '<?php echo $escrever['nome_categoria']; ?>'?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"> × </span>
            </button>
          </div>
          <div class="modal-body"> Selecione "Sim" para remover ou "Não" para caso tenha clicado por engano. </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal"> Não </button>
            <a class="btn btn-primary" href="Models/Removercategoria.php?id_categoria=<?php echo $escrever['id_categoria']; ?>"> Sim </a>
          </div>
        </div>
      </div>
    </div>
<?php }  include('rodape.php'); ?>