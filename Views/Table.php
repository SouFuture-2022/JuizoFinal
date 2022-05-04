<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

  <table id="minhaTabela">
    <thead>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vinicius Moura</td>
        <td>viniciusmouramail@gmail.com</td>
        <td>49 12345-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>José Andrade</td>
        <td>joseandrade@gmail.com</td>
        <td>32 9875-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
      <tr>
        <td>Rodrigo Costa</td>
        <td>rodrigocosta@gmail.com</td>
        <td>32 4564-68791</td>
        <td><a href="">Deletar</a></td>
      </tr>
    </tbody>
  </table>
  
  
  	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function(){
	  $('#minhaTabela').DataTable({
			"language": {
				"lengthMenu": "Mostrando _MENU_ registros por página",
				"zeroRecords": "Nada encontrado",
				"info": "Mostrando página _PAGE_ de _PAGES_",
				"infoEmpty": "Nenhum registro disponível",
				"infoFiltered": "(filtrado de _MAX_ registros no total)"
			}
		});
	});
	</script>
	
	
	
	
	
	<div class="form-group">
				<select class="form-control">
					<option>Basic selection</option>
					<option>Uzbekistan</option>
					<option>Kazakhstan</option>
					<option>United States</option>
					<option>Russia</option>
					<option>Others</option>
				</select>
			</div>
			<div class="form-group">
				<select class="custom-select form-control">
					<option>Custom selection</option>
					<option>United states</option>
					<option>Germany</option>
					<option>Canada</option>
				</select>
			</div>
			<div class="form-group">
				<label>Label of textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				<small class="form-text text-muted"> Maximum character is 250 letters </small>
			</div>