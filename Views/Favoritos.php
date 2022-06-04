<?php

use App\Infra\Dao\Favoritos\ListarFavoritosDb;
use App\Infra\Dao\Produto\ListarProdutoDb;

$id_usuario = $_GET['a'];
if (isset($_GET['a'])){
    $favoritos = new ListarFavoritosDb;
    echo "Tabela de Favoritos <br>";
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
}?>            <div class="col-lg-3 col-md-6 col-sm-6">
<figure class="card card-product-grid">
    <div class="img-wrap">
        <img src="Assets/images/<?php echo $array[2]; ?>"> 
    </div>
    <figcaption class="info-wrap border-top">
        <div class="price-wrap">
            <span class="price">$<?php echo $array[7]; ?></span> 
        </div> 
        <p class="title mb-2"><?php echo $array[11]; ?> - <?php echo $array[5]; ?></p> 

        <a href="#" class="btn btn-primary">Adicionar</a>

        <a href="#" class="btn btn-light btn-icon"> <i class="fa fa-heart"></i> </a>
    </figcaption>
</figure>
</div>
<?php
}}
 } else {
        echo "<script> alert('Entre na sua conta para ver a tabela de favoritos') ; window.location='http://Localhost:8000/'</script>";
    }?>