<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../Assets/css/inputs.css">
<body>
    <section>
        <div class="container w-50">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h2 class="text-primary mb-3">Cadastrar produto</h2>
                            <form action="">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Nome do produto">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <select class="form-select text-muted" aria-label="Default select example">
                                                <option value="">Categoria</option>
                                                <option value="">Roupas</option>
                                                <option value="">Calçados</option>
                                                <option value="">Tecnologia?</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <Label>
                                            Selecionar fotos do produto
                                            <br>
                                            <small>Máximo 5 fotos</small>
                                        </Label>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <label for="addfoto" id="imgicon" style="cursor: pointer;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </label>
                                        <input type="file" name="addfoto" id="addfoto" accept="image/*" style="display: none;">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Preço unitáro">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Quantidade">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col d-flex justify-content-center">
                                        <button class="btn btn-primary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                            Cores
                                        </button>
                                        <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                            <div class="offcanvas-header">
                                              <h3 class="offcanvas-title text-primary" id="staticBackdropLabel">Cadastrar cor</h3>
                                              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <div>
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <input type="text" class="form-control" placeholder="Nome da cor" required>
                                                            </div>
                                                            <div class="col">
                                                                <input type="number" class="form-control" placeholder="Quantidade da cor" required>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center mb-3">
                                                            <button class="btn w-75 btn-primary">Cadastrar</button>
                                                        </div>
                                                    </form>
                                                    <div>
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Cor</th>
                                                                    <th scope="col">Quantidade</th>
                                                                    <th scope="col">Deletar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Verde</th>
                                                                    <td>3</td>
                                                                    <td>
                                                                        <button class="btn btn-outline-dark">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                        </svg>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Vermelho</th>
                                                                    <td>5</td>
                                                                    <td>
                                                                        <button class="btn btn-outline-dark">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                            </svg>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-center">                         
                                        <button class="btn btn-primary w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Tamanhos disponíveis</button>
                                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                            <div class="offcanvas-header">
                                                <h3 class="offcanvas-title text-primary" id="offcanvasRightLabel">Cadastrar tamanho</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                            </div>
                                            <div class="offcanvas-body">
                                                <form action="">
                                                    <div class="row" style="margin-left: 3px;">
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
                                                            <input type="number" name="" placeholder="Tamanho infeiror" class="form-control">
                                                        </div>
                                                        <div class="row mt-3 mb-3">
                                                            <div class="d-flex justify-content-center">
                                                                <button class="btn w-75 btn-primary">Cadastrar</button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Tamanho</th>
                                                                        <th scope="col">Quantidade</th>
                                                                        <th scope="col">Deletar</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>P</th>
                                                                        <td>3</td>
                                                                        <td>
                                                                            <button class="btn btn-outline-dark">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                            </svg>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>45</th>
                                                                        <td>5</td>
                                                                        <td>
                                                                            <button class="btn btn-outline-dark">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                                                </svg>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                        <a class="btn w-75 btn-outline-primary">Cadastrar produto</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="../Assets/js/inputs.js"></script>
</body>
<!--<?php

use App\Models\Produtos;
use App\Models\Categorias;
use App\Infra\Dao\Produto\CadastrarProdutoDb;
use App\Infra\Dao\Categorias\ListarCategoriasDb;

$produto = new Produtos();
$categoria = new Categorias();

if (isset($_POST['btCadastrar'])) {
    $extensao = strtolower(substr($_FILES['imagem_destaque']['name'], -4));
    $imagem_destaque = md5(time()) . $extensao;
    $diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Uploads/ProdutosDestaque/';

    move_uploaded_file($_FILES['imagem_destaque']['tmp_name'], $diretorio . $imagem_destaque);

    $nome = $_POST['nome'];
    $habilitar_cor = $_POST['habilitar_cor'];
    $habilitar_tamanho = $_POST['habilitar_tamanho'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $peso = $_POST['peso'];
    $un_medida = 'g';
    $descricao = $_POST['descricao'];
    $id_categoria = $_POST['id_categoria'];

    $produto->setNome($nome);
    $produto->setImagem($imagem_destaque);
    $produto->setHabilitarcor($habilitar_cor);
    $produto->setHabilitartamanho($habilitar_tamanho);
    $produto->setPreco($preco);
    $produto->setQuantidade($quantidade);
    $produto->setPeso($peso);
    $produto->setUnmedida($un_medida);
    $produto->setDescricao($descricao);
    $produto->setIdcategoria($id_categoria);

    if (isset($_POST['produto'])) {
        $produto = new CadastrarProdutoDb;
        $produto->insert();
    }
} $categorias = new ListarCategoriasDb;
?>

<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Produto</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="text" name="nome" id="nome" placeholder="Nome do Produto" class="form-control"
                            required />
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="id_categoria" required>
                                <option value="">Categoria</option>
                                <?php foreach ($categorias->findAll() as $key => $value) { ?>
                                <option value="<?php echo $value->id_categoria; ?>">
                                    <?php echo $value->nome_categoria; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" name="imagem_destaque" id="imagemDestaque" class="form-control"
                                required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="preco" id="preco" placeholder="Preço" class="form-control money"
                                onKeyPress="return(MascaraMoeda(this,'.','.',event))" required />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="habilitar_cor" required>
                                <option value="">Habilitar Cor</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select class="form-control" name="habilitar_tamanho" required>
                                <option value="">Habilitar Tamanho</option>
                                <option value="S">Sim</option>
                                <option value="N">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="peso" id="peso" placeholder="Peso" class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span class="caracteres">1.000</span> Restantes
                    <textarea name="descricao" id="descricao" placeholder="Desccrição" class="form-control"
                        rows="3"></textarea>
                    <small class="form-text text-muted">
                        <p class="text-danger">Máximo de caracteres 1.000 letras</p>
                    </small>
                </div>
                <div class="form-group">
                    <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>