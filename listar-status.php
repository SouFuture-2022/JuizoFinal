<?php include('menuadmin.php'); ?>

    <div class="col-lg-9">
        <header class="jumbotron my-4">
			<h4> Verificar Status </h4><hr>
			<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th> Nome </th>
						<th> Pedido Realizado  </th>
						<th> Separando Embalando </th>
						<th> Pagamento Confirmado </th>
						<th> Pedido Entregue </th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th> Nome </th>
						<th> Pedido Realizado </th>
						<th> Separando Embalando </th>
						<th> Pagamento Confirmado </th>
						<th> Pedido Entregue </th>
					</tr>
				</tfoot>
				<?php
				$listarDados = mysqli_query($conn, "SELECT * FROM status ORDER BY nome");
				while($escrever = mysqli_fetch_array($listarDados)) { ?>
				<tbody>
					<tr>
						<td><?php echo $escrever['nome']; ?></td>
						<td><center><input type="image" src="Template/img/bola-verde.png" width="20" height="20" alt=""></center></td>

						<?php //	Separando Embalando
						if($escrever['separando_embalando'] == 'Vermelho') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="separando_embalando" value="Amarelo"><input type="image" src="Template/img/bola-vermelha.png" width="20" height="20" alt=""></form></center></td>
						<?php } elseif($escrever['separando_embalando'] == 'Amarelo') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="separando_embalando" value="Verde"><input type="image" src="Template/img/bola-amarela.png" width="20" height="20" alt=""></form></center></td>
						<?php } else { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="separando_embalando" value="Amarelo"><input type="image" src="Template/img/bola-verde.png" width="20" height="20" alt=""></form></center></td>

						<?php }	//	Pagamento Confirmado
						if($escrever['pagamento_confirmado'] == 'Vermelho') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pagamento_confirmado" value="Amarelo"><input type="image" src="Template/img/bola-vermelha.png" width="20" height="20" alt=""></form></center></td>
						<?php } elseif($escrever['pagamento_confirmado'] == 'Amarelo') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pagamento_confirmado" value="Verde"><input type="image" src="Template/img/bola-amarela.png" width="20" height="20" alt=""></form></center></td>
						<?php } else { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pagamento_confirmado" value="Amarelo"><input type="image" src="Template/img/bola-verde.png" width="20" height="20" alt=""></form></center></td>

						<?php }//	Pedido Entregue
						if($escrever['pedido_entregue'] == 'Vermelho') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pedido_entregue" value="Amarelo"><input type="image" src="Template/img/bola-vermelha.png" width="20" height="20" alt=""></form></center></td>
						<?php } elseif($escrever['pedido_entregue'] == 'Amarelo') { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pedido_entregue" value="Verde"><input type="image" src="Template/img/bola-amarela.png" width="20" height="20" alt=""></form></center></td>
						<?php } else { ?>
						<td><center><form action="Models/Editarstatus.php" method="POST"><input type="hidden" name="id_status" value="<?php echo $escrever['id_status']; ?>"><input type="hidden" name="pedido_entregue" value="Amarelo"><input type="image" src="Template/img/bola-verde.png" width="20" height="20" alt=""></form></center></td>
						<?php }?>
					</tr>
				</tbody>
				<?php } ?>
			</table>
			</div>
			<hr>
		</header>
    </div>

<?php include('rodape.php'); ?>