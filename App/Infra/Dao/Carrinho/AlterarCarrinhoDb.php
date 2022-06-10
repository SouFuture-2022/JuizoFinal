<?php /*
namespace App\Infra\Dao\Carrinho;

class AlterarCarrinho{
    public function editar($id_produto, $color = null, $quantidade = null ){
        foreach ($_SESSION['carrinho'] as $key => $value){
            $a = $_SESSION['carrinho'];
            if (!$color == null){
                if (in_array($value ,$a[$key])){
                    $_SESSION['carrinho'][$key][1] = $color;
                }
            }
            if (!$quantidade == null){
                if (in_array($value ,$a[$key])){
                    $_SESSION['carrinho'][$key][2] = $color;
                }
            }
        } 
    }
}*/