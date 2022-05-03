<?php include('Models/Conexaodb.php'); ?>

    <div class="col-lg-3">
        <h1 class="my-4"> Categorias </h1>
        <div class="list-group"><?php
			$listarDados = mysqli_query($conn, "SELECT * FROM categorias ORDER BY nome_categoria");
			while($escrever = mysqli_fetch_array($listarDados)) { ?>
			<a href="Categoria.php?nome_categoria=<?php echo $escrever['nome_categoria']; ?>" class="list-group-item"><?php echo $escrever['nome_categoria']; ?></a>
        <?php } ?>
		</div>
    </div>