<?php
session_start();

	$altura = "210";
	$largura = "210";

	$_SESSION['retorno_imagem'] = "Altura pretendida: $altura - largura pretendida: $largura <br>";

	switch($_FILES['imagem']['type']):
		case 'image/jpeg';
		case 'image/pjpeg';
			$imagem_temporaria = imagecreatefromjpeg($_FILES['imagem']['tmp_name']);	
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);

			echo "largura original: $largura_original - Altura original: $altura_original <br>";

			$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
			$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);	
			imagejpeg($imagem_redimensionada, 'Img-Redimensionada/' . $_FILES['imagem']['name']);

			$_SESSION['retorno_imagem'] = "<a href='Img-Redimensionada/" .$_FILES['imagem']['name']. "' download='myimage'><img src='Img-Redimensionada/" .$_FILES['imagem']['name']. "'></a>";
			$_SESSION['retorno_texto'] = "<ol><li> Clique na imagem para baixar. </li><li><a href='Cadastrarproduto.php'> Clique em Cadastrar Produto </a></li></ol>";
		header("Location: http://minhalojinha.6te.net/Redimensionar-Imagem.php");
		break;

		//Caso a imagem seja extensão PNG cai nesse CASE
		case 'image/png':
		case 'image/x-png';
			$imagem_temporaria = imagecreatefrompng($_FILES['imagem']['tmp_name']);
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);

			$_SESSION['retorno_imagem'] = "Largura original: $largura_original - Altura original: $altura_original <br> ";

			/* Configura a nova largura */
			$nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);
			/* Configura a nova altura */
			$nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);
			/* Retorna a nova imagem criada */
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			//função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
			imagepng($imagem_redimensionada, 'Img-Redimensionada/' . $_FILES['imagem']['name']);

			$_SESSION['retorno_imagem'] = "<a href='Img-Redimensionada/" .$_FILES['imagem']['name']. "' download='myimage'><img src='Img-Redimensionada/" .$_FILES['imagem']['name']. "'></a>";
			$_SESSION['retorno_texto'] = "<ol><li> Clique na imagem para baixar. </li><li><a href='Cadastrarproduto.php'> Clique em Cadastrar Produto </a></li></ol>";		 
		header("Location: http://minhalojinha.6te.net/Redimensionar-Imagem.php");
		break;
	endswitch;
