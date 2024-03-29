<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <section class="padding-y">
    <div class="container">

        <header class="section-heading">
            <h3 class="section-title">Produtos Favoritados</h3>
        </header>

        <div class="row">                
<?php

use App\Infra\Dao\Favoritos\ListarFavoritosDb;
use App\Infra\Dao\Produto\ListarProdutoDb;
use App\Infra\Dao\Favoritos\RemoverFavoritosDb;

$id_usuario = base64_decode($_GET['a']);
if (isset($_GET['a'])){
    $favoritos = new ListarFavoritosDb;
    $dados = $favoritos->Find($id_usuario);
    foreach ($dados as $key => $valor){
        $b = $dados[$key];
            foreach ($b as $key => $valor){
                $id_produto = $valor;
                $produto = new ListarProdutoDb;
                $prod = $produto->find($id_produto);
                foreach ($prod as $key => $value){  
                    $c = $prod[$key];
                    $d = '';
                    foreach ($c as $key => $value)
                    {
                        if ($value == null){
                            $value = 'none';
                        }
                        $d = $d . "$value/";
                    
                    $array = explode('/',$d);
                    
                }
}?> 

    <div class="col-lg-3 col-md-6 col-sm-6">
        <figure class="card card-product-grid">
            <?php $id_produto = $array[0];?>
            <div class="img-wrap">
                <img src="Assets/images/<?php echo $array[2]; ?>"> 
            </div>
            <figcaption class="info-wrap border-top">
                <div class="price-wrap">
                    <span class="price">$<?php echo $array[7]; ?></span> 
                </div> 
                <p class="title mb-2"><?php echo $array[11]; ?> - <?php echo $array[5]; ?></p> 

                <a href="#" class="btn btn-primary">Adicionar</a>
                <form method="post">
                <button name="delete" class="btn btn-light btn-icon"><i class="fa fa-heart"></i> </button>
            </form> </figcaption>
        </figure>
        </div> 
<?php }}  ?>

                    </div>
</section>
<?php
 
    if(isset($_POST['delete'])){
    $del = new RemoverFavoritosDb;
    $delete = $del->delete($id_usuario, $id_produto);
    $teste = base64_encode($id_usuario);
    echo "<script> alert('Produto removido da tabela de favoritos') ; window.location='http://Localhost:8000/Favoritos?a=$teste'</script>";
}
 } else {
        echo "<script> alert('Entre na sua conta para ver a tabela de favoritos') ; window.location='http://Localhost:8000/'</script>";
    }
?>