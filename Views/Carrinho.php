<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!--Essa section só é apresentada quando o cliente nao tem nada adicionado no carrinho-->
<!--<section>
    <div class="container col-lg-4 col-md-6">
        <div class="card card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h2 class="text-primary">Meu carrinho</h2>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Seu carrinho está vazio.</h4>
                    <p>Você ainda não tem nenhum produto adicionado ao seu carrinho.</p>
                    <hr>
                    <p class="mb-0"><a href="#" class="alert-link">Navegar no site</a></p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!--Essa section é apresentada caso o usuário não seja logado-->
<!--<section>
    <div class="container col-lg-4 col-md-6">
        <div class="card card shadow p-3 mb-5 bg-body rounded">
            <div class="card-body">
                <h2 class="text-primary">Meu carrinho</h2>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Seu carrinho está vazio.</h4>
                    <p>Para adicionar produtos no seu carrinho, acesse sua conta</p>
                    <hr>
                    <p class="mb-0"><a href="#" class="alert-link">Entrar</a></p>
                </div>
            </div>
        </div>
    </div>
</section>-->

<!--Essa section é apresentada para os usuários que tem produtos adicionados aos seus carrinhos-->
<?php

            use App\Infra\Dao\Produto\ListarProdutoDb;
            $listar_produto = new ListarProdutoDb;
            $dados = $listar_produto->printAll();
            foreach ($dados as $key => $value) {
                $b = $dados["$key"];
                $a = '';
                foreach ($b as $key => $value) {
                    if ($value == null) {
                        $value = 'none';
                    }
                    $a = $a . "$value/";
                }
                $array = explode('/', $a);

            ?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="content-body">
                <h2 class="card-title mb-4 text-primary">Meu carrinho</h2>
                <article class="row">
                    <div class="col">
                        <figure class="itemside me-lg-5">
                            <div class="aside"><img src="../Assets/images/3.jpg" class="img-sm img-thumbnail" style="width: 60px;"></div>
                            <figcaption class="info">
                                <a href="#" class="title">Produto 1</a>
                                <p class="text-muted">Celulares, Azul...</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div style="width: 120px;">
                        <!--A quantidade ja vai estar pré estabelecida.-->
                        <p><strong>Quantidade</strong></p>
                        <input type="text" class="form-control"> 
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">             
                        <p><strong>Preço</strong></p> 
                        <small class="text-muted">R$1.000,00</small> 
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="float-lg-end">
                            <button class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </button> 
                            <button class="btn btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </article>
                <hr> <?php } ?>

                <!--

                <article class="row gy-3 mb-4">
                    <div class="col">
                        <figure class="itemside me-lg-5">
                            <div class="aside"><img src="../Assets/images/4.jpg" class="img-sm img-thumbnail" style="width: 60px;"></div>
                            <figcaption class="info">
                                <a href="#" class="title">Produto 2</a>
                                <p class="text-muted">Azul, Tamanho M...</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div style="width: 120px;">
                       A quantidade ja vai estar pré estabelecida.
                        <p><strong>Quantidade</strong></p>
                        <input type="text" class="form-control"> 
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">             
                        <p><strong>Preço</strong></p> 
                        <small class="text-muted">R$1.000,00</small> 
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="float-lg-end">
                            <button class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </button> 
                            <button class="btn btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </article>
                Esse hr só aparece se tiver um item embaixo
                <hr>
    
                <article class="row gy-3 mb-4">
                    <div class="col">
                        <figure class="itemside me-lg-5">
                            <div class="aside"><img src="../Assets/images/5.jpg" class="img-sm img-thumbnail" style="width: 60px;"></div>
                            <figcaption class="info">
                                <a href="#" class="title">Produto 3</a>
                                <p class="text-muted"> XL size, Jeans, Blue </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div style="width: 120px;">
                        A quantidade ja vai estar pré estabelecida.
                        <p><strong>Quantidade</strong></p>
                        <input type="text" class="form-control"> 
                    </div>
                    <div class="col-lg-2 col-sm-4 col-6">             
                        <p><strong>Preço</strong></p> 
                        <small class="text-muted">R$1.000,00</small> 
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="float-lg-end">
                            <button class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                </svg>
                            </button> 
                            <button class="btn btn-outline-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </article>


            -->
            </div> 
    </div> 
</div>
        <aside class="col-lg-3">
    
            <div class="card mb-3 shadow p-3 bg-body rounded">
            <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="mb-2">
                        <select id="inputState" class="form-select">
                            <option selected>Escolha o tipo de frete</option>
                            <option>Receber no balcão</option>
                            <option>Expresso</option>
                            <option>Correios</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="CEP">
                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Calcular frete</button>
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-between">
                <div>
                    <strong>Valor do frete:</strong>
                </div>
                <div>
                    R$14.00
                </div>
            </div>
            </div> 
            </div> 
    
            <div class="card shadow bg-body rounded">
            <div class="card-body">
                <dl class="dlist-align">
                  <dt>Preço total:</dt>
                  <dd class="text-end">R$3.000,00</dd>
                </dl>
                <dl class="dlist-align">
                  <dt>Descontos:</dt>
                  <dd class="text-muted">Cupom 1</dd>
                  <dd class="text-end text-success">- R$60.00</dd>
                  <dd class="text-muted">Cupom 2</dd>
                  <dd class="text-end text-success">- R$4</dd>
                </dl>
                <dl class="dlist-align">
                  <dt>Frete:</dt>
                  <dd class="text-end">R$14.00</dd>
                </dl>
                <hr>
                <dl class="dlist-align">
                  <dt>Total:</dt>
                  <dd class="text-end text-dark h5">R$2.954,00</dd>
                </dl>
                
                <div class="d-grid gap-2 my-3">
                    <a href="#" class="btn btn-primary w-100">Confirmar compra</a>
                    <a href="#" class="btn btn-outline-primary w-100">Continuar comprando</a>
                </div>
            </div> 
            </div> 
    
        </aside> 
    
    </div>
</div>

<!--<?php

use App\Infra\Database\Conexao;
use App\Models\Produtos;
use App\Infra\Dao\Pedido\CadastrarPedidoDb;
use App\Infra\Dao\Produto\AlterarProdutoDb;
use App\Models\Pedidos;

include('AcaoCarrinho.php');

if (isset($_SESSION['msg_sucesso'])) {
	echo $_SESSION['msg_sucesso'];
	unset($_SESSION['msg_sucesso']);
}

$produto = new Produtos;
$alterar_produto = new AlterarProdutoDb;
$pedido = new Pedidos;
$cadastrar_pedido = new CadastrarPedidoDb;

if (isset($_POST['btCadastrar'])) {
	$nome = $_POST['nome'];
	$cor = $_POST['cor'];
	$tamanho = $_POST['tamanho'];
	$quantidade = $_POST['qtd'];
	$preco = $_POST['preco'];
	$sub_total = $_POST['sub_total'];
	$id_produto = $_POST['id_produto'];
	$id_usuario = $_POST['id_usuario'];

	$nums = implode('', range(0, 9));
	$alphaNumeric = $nums;
	$num_pedido = '';
	$len = 9;

	for ($i = 0; $i < $len; $i++) {
		$num_pedido .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
	}

	for ($i = 0; $i < count($nome); $i++) {
		$name = $nome[$i];
		$color = $cor[$i];
		$size = $tamanho[$i];
		$amount = $quantidade[$i];
		$price = $preco[$i];
		$total = $sub_total[$i];
		$id_product = $id_produto[$i];
		$id_user = $id_usuario[$i];

		$pedido->setNumpedido($num_pedido);
		$pedido->setNome($name);
		$pedido->setCor($color);
		$pedido->setTamanho($size);
		$pedido->setQuantidade($amount);
		$pedido->setPreco($price);
		$pedido->setSubtotal($total);
		$pedido->setIdproduto($id_product);
		$pedido->setIdusuario($id_user);

		if ($cadastrar_pedido->insert()) {
			$Alterar_produto->updateStock($amount, $id_product);

			$_SESSION['msg_sucesso'] =
				'<div class="alert alert-success" role="alert">
					Pedido Realizado Com sucesso...
				</div>';
			header('Location: ../Carrinho');
		}
	}
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Meu Carrinho</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <?php if (count($_SESSION['carrinho']) == 0) { ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <p class="text-center">Não Há Produto no Carrinho!</p>
                    </div>

                    <?php } else { ?>

                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Produto</th>
                                    <th scope="col" width="120">Quantidade</th>
                                    <th scope="col" width="120">Preço</th>
                                    <th scope="col" width="120">Sub Total</th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <form action="?acao=up" method="POST">
                                    
                                    <?php
										$db = new Conexao;
										foreach ($_SESSION['carrinho'] as $id_produto => $qtd) {
											$sql  = "SELECT * FROM produtos WHERE id_produto = $id_produto";
											$stmt = $db->Conexao->prepare($sql);
											$stmt->bindParam(1, $id_produto);
											$stmt->execute();
											$ln = $stmt->fetchAll();

											$imagem_destaque = $ln[0]->imagem_destaque;
											$nome = $ln[0]->nome;
											$peso = $ln[0]->peso;
											$cor = $ln[0]->cor;
											$preco = $ln[0]->preco;
											@$sub_total = $ln[0]->preco * $qtd;
											@$total += $sub_total;
											$total_peso += $peso / 1000;
										?>
                                        
                                    <tr>
                                        <td>
                                            <figure class="itemside align-items-center">
                                                <div class="aside"><img src="Upload/<?php echo $imagem_destaque; ?>"
                                                        class="img-sm" alt="" /></div>
                                                <figcaption class="info">
                                                    <a href="#" class="title text-dark"><?php echo $nome; ?></a>
                                                    <p class="text-muted small"><strong>Cor:</strong>
                                                        <?php echo $cor; ?>
                                                        <br><strong>Tamanho:</strong> Canon<br>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </td>

                                        <td class="text-right d-none d-md-block">
                                            <input type="number" name="produto[<?php echo $id_produto; ?>]"
                                                class="form-control" value="<?php echo $qtd; ?>" />
                                        </td>

                                        <td>
                                            <div class="price-wrap">
                                                <var
                                                    class="price">R$<?php echo number_format($preco, 2, ',', ' '); ?></var>
                                                    <small class="text-muted"> $315.20 each </small> 
                                            </div>
                                        </td>

                                        <td>
                                            <div class="price-wrap">
                                                <var
                                                    class="price">R$<?php echo number_format($sub_total, 2, ',', ' '); ?></var>
                                            </div>
                                        </td>

                                        <td class="text-right d-none d-md-block">
                                            <button type="submit" class="btn btn-primary">Atualizar</button>
                                        </td>

                                        <td class="text-right d-none d-md-block">
                                            <a href="?acao=del&produto=<?php echo base64_encode($id_produto); ?>"
                                                class="btn btn-light">Remover</a>
                                        </td>
                                    </tr>
                                    <?php } // foreach 
										?>
                                </form>
                            </tbody>
                        </table>
                    </div>
                    <?php } // else 
					?>


                    <div class="card-body border-top">
                        <a href="../FinalizarCompra" class="btn btn-primary float-md-right">Confirmar Pedido
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>

                        <a href="../Index" class="btn btn-light">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i> Continue Comprando
                        </a>
                    </div>
                </div>

                <div class="alert alert-success mt-3">
                    <p class="icontext">
                        <i class="fas fa-truck"></i>&nbsp;&nbsp;&nbsp;Free Delivery within 1-2 weeks
                    </p>
                </div>
            </aside>


            <aside class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt><strong>Total Pedido:</strong></dt>
                            <dd class="text-right text-dark b">
                                <strong>R$<?php echo number_format($total + $frete, 2, ',', ' '); ?></strong>
                            </dd>
                        </dl>

                        <hr>

                        <p class="text-center mb-3">
                            <img src="Assets/images/payments.png" height="26" alt="payments" />
                        </p>

                        <form action="" method="POST" enctype="multipart/form-data">
                            <?php
							foreach ($_SESSION['carrinho'] as $id_produto => $qtd) {
								$sql  = "SELECT * FROM produtos WHERE id_produto = $id_produto";
								$stmt = $db->Conexao->prepare($sql);
								$stmt->bindParam(1, $id_produto);
								$stmt->execute();
								$ln = $stmt->fetchAll();

								$nome = $ln[0]->nome;
								$cor = $ln[0]->cor;
								$preco = $ln[0]->preco;
								@$sub_total = $ln[0]->preco * $qtd;
								@$total_carrinho += $sub_total;
								$id_usuario = 1;
								$tamanho = 'P';

								echo '
								<input type="hidden" name="nome[]" value="' . $nome . '">
								<input type="hidden" name="cor[]" value="' . $cor . '">
								<input type="hidden" name="tamanho[]" value="' . $tamanho . '">
								<input type="hidden" name="qtd[]" value="' . $qtd . '">
								<input type="hidden" name="preco[]" value="' . $preco . '">
								<input type="hidden" name="sub_total[]" value="' . $sub_total . '">
								<input type="hidden" name="id_produto[]" value="' . $id_produto . '">
								<input type="hidden" name="id_usuario[]" value="' . $id_usuario . '">
								';
							}
							?>
                            <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Confirmar
                                Pedido</button>
                        </form>
                        <a href="../Index" class="btn btn-light btn-block mt-3">Continue Comprando</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <input type="hidden" id="peso" value="<?php echo $total_peso; ?>" />
                        <input type="hidden" id="valor" value="<?php echo $total_carrinho; ?>" />
                        <div class="form-group">
                            <select id="frete" class="form-control" required>
                                <option value="">Escolha o Tipo de Frete</option>
                                <option value="balcao">Receber no Balcão</option>
                                <option value="41106">PAC</option>
                                <option value="40010">SEDEX</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP"
                                    maxlength="9" />
                                <span class="input-group-append">
                                    <button onclick="calculo();" class="btn btn-primary">Calcular Frete</button>
                                </span>
                            </div>
                        </div>

                        <hr>

                        <small class="form-text text-muted text-center"><a
                                href="https://buscacepinter.correios.com.br/app/pedido/index.php" target="_blank"> Não
                                sei meu CEP </a></small>
                    </div>
                </div>

                <div id="retorno">
                    Resposta: Frete + Total 

                </div>

            </aside>
        </div>
    </div>