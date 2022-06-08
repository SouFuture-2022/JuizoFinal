<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="/Assets/css/inputs.css">
<!--Essa section só é apresentada quando o cliente nao tem nada adicionado no carrinho-->
<?php 
session_start();
$_SESSION['logar'] = $_SESSION['logar'] ?? false;
if ($_SESSION['logar'] and $_SESSION['carrinho'] == [[0]]){ ?>
<section>
    <div class="container col-lg-4 col-md-6 mt-5">
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
</section> <?php }?>
<?php if ($_SESSION['logar'] == false){ var_dump($_SESSION['logar']) ;?>
<!--Essa section é apresentada caso o usuário não seja logado-->

<section>
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
</section><?php } ?>


<?php
//
require_once __DIR__ . "./AcaoCarrinho.php";
use App\Infra\Dao\Produto\ListarProdutoDb;
if ($_SESSION['logar'] == true and array_key_exists('produto',$_SESSION['carrinho'][0])){ ?>
    <!--Essa section é apresentada para os usuários que tem produtos adicionados aos seus carrinhos-->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="content-body">
                    <h2 class="card-title mb-4 text-primary">Meu carrinho</h2>

                    <?php
                    $listar_produto = new ListarProdutoDb;
                    foreach($_SESSION['carrinho'] as $key => $value){
                        $produto = $value['produto'];
                        $dados = $listar_produto->find($produto);
                        $cont = 0;
                        $quantidade = $_SESSION['carrinho'][$key]['quantidade'];
                        
                        foreach ($dados as $key => $value) {
                            $cont+= 1;

                            $b = $dados["$key"];
                            $a = '';
                            foreach ($b as $key => $value) {
                                if ($value == null) {
                                    $value = 'none';
                                }
                                $a = $a . "$value/";
                            }
                            $array = explode('/', $a);echo "<br>";
                            echo "<br> //"; print_r($array); echo " // <br>";
                            print_r($_SESSION['carrinho']);
                            
                                        
                                
                            
                    ?>
                    <hr>
                    <article class="row">
                        <div class="col">
                            <figure class="itemside me-lg-5">
                                <div class="aside"><img src="../Assets/images/<?php echo "$array[2]"; ?>" class="img-sm img-thumbnail" style="width: 60px;"></div>
                                <figcaption class="info">
                                    <a href="#" class="title"><?php echo $array[11]; ?></a>
                                    <p class="text-muted"><?php echo $array[1]; ?>, <?php echo $array[5]; ?>...</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div style="width: 120px;">
                            <!--A quantidade ja vai estar pré estabelecida.-->
                            <form action="/Carrinho" method="POST">
                            <p><strong>Quantidade</strong></p>
                            <input type="number" name="quantidade" value="<?php echo $quantidade; ?>" class="form-control"> 
                            <input type="submit"  name="ok" >
                            </form>
                        </div>
                        <?php   
                            if (isset($_POST['ok'])){
                                $_SESSION['carrinho'][$key]['quantidade'] = $_POST['quantidade'];
                            }
                        ?>
                        <div class="col-lg-2 col-sm-4 col-6">             
                            <p><strong>Preço</strong></p> 
                            <small class="text-muted"><?php echo $array[7]; ?></small> 
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
                    </article> <?php }} ?>
                    
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
    </div>
    </div>
<?php } ?>