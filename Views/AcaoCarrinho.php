<?php
//
$_SESSION['carrinho'] = $_SESSION['carrinho'] ?? [[0]]; 
if (isset($_GET['produto'])){
	$existe = false;
	if (array_key_exists('produto',$_SESSION['carrinho'][0]) >=1 ){
		foreach($_SESSION['carrinho'] as $key => $value){
			if ($_GET['produto'] == $_SESSION['carrinho'][$key]['produto']){
				$existe = true;
				$_SESSION['carrinho'][$key]['quantidade'] += 1; 
			}
		}
		if(!$existe){
			array_push($_SESSION['carrinho'],['produto'=>$_GET['produto'],'quantidade'=>1]);
			$existe = true;
		}
	}else{
		$_SESSION['carrinho'] = [['produto'=>$_GET['produto'],'quantidade'=>1]];
	}
}
print_r($_SESSION['carrinho']);	
?>