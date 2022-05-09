<?php

use App\Models\Categorias;

	session_start();
	#$categoria = new Categorias();

	$menu = 0;
	if($menu == 0) {
		include('/Users/Sou Future 4/xampp/htdocs/desafios do curso/Apocalipse/JuizoFinal/Cabecalhos/menu.php');
	} elseif($menu == 1) {
		include('/Users/Sou Future 4/xampp/htdocs/desafios do curso/Apocalipse/JuizoFinal/Cabecalhos/menucliente.php');
	} else {
		include('/Users/Sou Future 4/xampp/htdocs/desafios do curso/Apocalipse/JuizoFinal/Cabecalhos/menuadmin.php');
	}

	include('Rotas.php');
	//	Redenriza o corpo da página.
	#function __autoload($class_name) {
		if(file_exists('/Users/Sou Future 4/xampp/htdocs/desafios do curso/Apocalipse/JuizoFinal/App/Models' . $class_name . '.php')) {
			include('./Models/' . $class_name . '.php');
		} elseif(file_exists('./Controllers/' . $class_name . '.php')) {
			include('./Controllers/' . $class_name . '.php');
		}
	#}

	$rodape = 0;
	if($rodape == 0) {
		include('./Rodapes/rodape.php');
	} elseif($rodape == 1) {
		include('./Rodapes/rodape.php');
	} else {
		include('./Rodapes/rodapeadmin.php');
	}
?>