<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="text-primary mb-3">Cadastrar tamanho</h2>
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select text-muted" aria-label="Default select example">
                                <option selected>Sub categorias</option>
                                <option value="1">Calças</option>
                                <option value="2">Calçados</option>
                                <option value="3">Camisas</option>
                            </select>
                        </div>
                        <!--OS PRODUTOS SÃO INFORMAÇÕES QUE ESTÃO CADASTRADAS NO BANCO DE DADOS, LOGO, CABE AO BACK, QUE
                        A GENTE TANTO AMA, RESOLVER ESSE PROBLEMA sz-->
                        <div class="col">
                            <select class="form-select text-muted" aria-label="Default select example">
                                <option selected>Produto</option>
                                <option value="1">Produto 1</option>
                                <option value="2">Produto 2</option>
                                <option value="3">Produto 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select text-muted" aria-label="Default select example">
                                <option selected>Tamanho superior</option>
                                <option value="P">P</option>
                                <option value="M">M</option>
                                <option value="G">G</option>
                                <option value="GG">GG</option>
                            </select>
                        </div>
                        <!--A QUANTIDADE ESTÁ EM TIPO TEXT POR MOTIVOS ESTETICOS. CABE AO BACK, QUE A GENTE TANTO AMA,
                        NAO PERMITIR A ENTRADA DE CARACTERES, APENAS NUMEROS.-->
                        
                        <!--O TAMANHO INFERIOR OU SUPERIOR NÃO PODE SER OBRIGATÓRIAMENTE REQUERIDO, PARTINDO DA IDEIA DE
                        QUE UM TAMANHO SUPERIOR NAO PRECISA TER UM TAMANHO INFERIOR. EX: UMA BLUSA JA TEM O TAMANHO P, ENTAO
                        ELA NAO PODE TER TAMANHO 45 AO MESMO TEMPO-->
                        <div class="col">
                            <input type="text" name="" placeholder="Tamanho infeiror" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn w-75 btn-primary">Cadastrar</button> 
                    </div>               
                </form>
            </div>
        </div>
    </div>
</section>
<!--<?php

use App\Models\Tamanho;
use App\Models\Produtos;
use App\Infra\Dao\Tamanhos\CadastrarTamanhosDb;
use App\Infra\Dao\Produto\ListarProdutoDb;

$tamanho = new Tamanho();
$produto = new Produtos();
$listar_produto = new ListarProdutoDb;
$cadastrar_tamanho = new CadastrarTamanhosDb;

if (isset($_POST['btCadastrar'])) {
	$sub_categoria  = $_POST['sub_categoria'];
	$tamanho_superior  = $_POST['tamanho_superior'];
	$tamanho_inferior  = $_POST['tamanho_inferior'];
	$quantidade_tamanho = $_POST['quantidade_tamanho'];
	$id_produto  = $_POST['id_produto'];

	$tamanho->setSubcategoria($sub_categoria);
	$tamanho->setTamanhosuperior($tamanho_superior);
	$tamanho->setTamanhoinferior($tamanho_inferior);
	$tamanho->setQuantidadetamanho($quantidade_tamanho);
	$tamanho->setIdproduto($id_produto);

	if ($cadastrar_tamanho->insert()) {
		include('Includes/MsgSucesso.php');
	}
}
?>

<link href="Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Tamanho</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <select class="form-control" name="sub_categoria" id="sub_categoria" required>
                                    <option value="">Sub Categoria</option>
                                    <option value="Calças">Calças</option>
                                    <option value="Calçados">Calçados</option>
                                    <option value="Camisas">Camisas em Geral</option>
                                    <option value="Vestidos">Vestidos/Camisolas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div id="tamanhoSuperior">
                                <select class="form-control" name="tamanho_superior" id="tamanhoSuperior">
                                    <option value="">Escolha o Tamanho</option>
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                </select>
                            </div>
                            <div id="tamanhoInferior">
                                <input type="number" name="tamanho_inferior" id="tamanhoInferior" placeholder="Tamanho"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="quantidade_tamanho" id="quantidadeTamanho"
                                placeholder="Quantidade" class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" name="id_produto" required>
                            <option value="">Produto</option>
                            <?php foreach ($listar_produto->findAllSelect() as $key => $value) { ?>
                            <option value="<?php echo $value->id_produto; ?>"><?php echo $value->nome; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script type="text/javascript">
$(document).ready(function() {
    $('#tamanhoSuperior').hide();
    $('#tamanhoInferior').hide();

    $('#sub_categoria').change(function() {
        if ($('#sub_categoria').val() == 'Camisas' || $('#sub_categoria').val() == 'Vestidos') {
            $('#tamanhoSuperior').show();
        } else {
            $('#tamanhoSuperior').hide();
        }

        if ($('#sub_categoria').val() == 'Calças' || $('#sub_categoria').val() == 'Calçados') {
            $('#tamanhoInferior').show();
        } else {
            $('#tamanhoInferior').hide();
        }
    });
});
</script>