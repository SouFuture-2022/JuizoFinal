<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<section>
    <div class="container">
        <div class="card card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h2 class="text-primary mb-3">Tabela</h2>
                <div class="row d-flex justify-content-between d-flex align-items-center mb-3">
                    <div class="col">
                        <div>
                            <div class="row d-flex align-items-center">
                                    Mostrando
                                    <select style="width: 70px; margin-left: 5px; margin-right: 5px;" class="form-select" aria-label="Default select example">
                                        <option value="1">5</option>
                                        <option value="2">10</option>
                                        <option value="3">15</option>
                                        <option value="4">20</option>
                                    </select>
                                    Registros por página
                            </div> 
                        </div>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <div class="input-group input-group">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <button class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nome 1</td>
                        <td>Email 1</td>
                        <td>Telefone 1</td>
                        <td><a href="#">Deletar</a></td>
                      </tr>
                      <tr>
                        <td>Nome 2</td>
                        <td>Email 2</td>
                        <td>Telefone 2</td>
                        <td><a href="#">Deletar</a></td>
                      </tr>
                      <tr>
                        <td>Nome 3</td>
                        <td>Email 3</td>
                        <td>Telefone 3</td>
                        <td><a href="#">Deletar</a></td>
                      </tr>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <!--Lembrando que esse 1 de 1 muda de acordo com a quantidade de paginas que poderão ser mostradas-->
                        Mostrando 1 de 1
                    </div>
                    <div class="col">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
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