<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="/Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="/Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="/Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="/Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<table id="minhaTabela">
  
    <thead class="p-3 mb-2 bg-primary text-white"></div>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
    </thead>  
    <tbody class="bg-success p-2 text-dark bg-opacity-25">
        <tr>
            <td>Vinicius Moura</td>
            <td>viniciusmouramail@gmail.com</td>
            <td>49 12345-68791</td>
            <td><a href="#" class="link-danger">Deletar</a></td>
        </tr>
        <tr>
            <td>José Andrade</td>
            <td>joseandrade@gmail.com</td>
            <td>32 9875-68791</td>
            <td><a href="#" class="link-danger">Deletar</a></td>
        </tr>
        <tr>
            <td>Rodrigo Costa</td>
            <td>rodrigocosta@gmail.com</td>
            <td>32 4564-68791</td>
            <td><a href="#" class="link-danger">Deletar</a></td>
        </tr>
    </tbody >
</table>


<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
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
        <option>Selecione o País</option>
        <option>Uzbekistan</option>
        <option>Kazakhstan</option>
        <option>Estados Unidos</option>
        <option>Russia</option>
        <option>Outros</option>
    </select>
</div>
<div class="form-group">
    <select class="custom-select form-control">
        <option>Seleção Personalizada</option>
        <option>Estados Unidos</option>
        <option>Alemanha</option>
        <option>Canada</option>
    </select>
</div>
<div class="form-group">
    <label>Comentario</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <small class="form-text text-muted"> O caráter máximo é 250  </small>
</div>