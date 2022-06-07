<?php
$_SESSION['carrinho'] = $_SESSION['carrinho'] ?? [[0]]; 
if (isset($_GET['produto'])){
	$existe = false;
	if (isset($_SESSION['carrinho'][0]['produto'])){
		
		foreach($_SESSION['carrinho'] as $key => $value){
			if ($_GET['produto'] == $_SESSION['carrinho'][$key]['produto']){
				$existe = true;
			}
			else{
				if(!$existe){
					$_SESSION['carrinho'][$key+1] = ['produto'=>$_GET['produto']];
				}
			}
		}
	}else{
		$_SESSION['carrinho'] = [['produto'=>$_GET['produto']]];
	}
}
print_r($_SESSION['carrinho']);
?>