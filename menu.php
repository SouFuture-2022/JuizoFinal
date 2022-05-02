<?php include('Models/Conexaodb.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Minha Lojinha </title>
  <!-- Icone na aba do navegador -->
  <link rel="shortcut icon" href="Template/img/logo-marca.jpg">
  <!-- Bootstrap core CSS -->
  <link href="Template/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="Template/css/shop-homepage.css" type="text/css" rel="stylesheet">
  <link href="Template/css/zoom-imagem.css" type="text/css" rel="stylesheet">
  <link href="Template/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Index.php"> Minha Lojinha </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="Index.php"> Home </a></li>
          <li class="nav-item"><a class="nav-link" href="Sobre.php"> Sobre </a></li>
          <li class="nav-item"><a class="nav-link" href="Contato.php"> Contato </a></li>
          <li class="nav-item"><a class="nav-link" href="Cadastrarusuario.php"> Cadastrar </a></li>
          <li class="nav-item active"><a class="nav-link" href="Login.php"> Login </a></li>
        </ul>
		<form action="" method="POST" class="form-inline my-2 my-lg-0">
		  <input class="form-control mr-sm-2" type="search" name="busca_produto" placeholder="Busque pelo Produto" aria-label="Buscar">
		  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"> Buscar </button>
		</form>
		<a class="nav-link" href="Carrinho.php" style="color: white;" title="Vizualizar Carrinho">
		<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
		</svg>
		</a>
		<a class="nav-link" href="whatsapp://send?text=Acesse - http://minhalojinha.6te.net/ - Melhor loja virtual para você fazer suas compras de forma rápida e pática! Acesse já!" style="color: white;" title="Compartilhar">
		<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-share" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
		</svg></a>
      </div>
    </div>
  </nav>

 <!-- Page Content -->
  <div class="container">
    <div class="row">

	<?php include('Models/Buscarproduto.php'); include('Categorias.php'); ?>