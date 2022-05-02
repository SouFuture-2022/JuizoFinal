<?php
	// A sessão precisa ser iniciada em cada página diferente
	if (!isset($_SESSION)) session_start();
	// Verifica se não há a variável da sessão que identifica o usuário
	if (!isset($_SESSION['usuarioId'])) {
	// Destrói a sessão por segurança
	session_destroy();
	// Redireciona o visitante de volta pro login
	echo "<script> alert('É necessário está logado para acessar está página.'); window.location='Index.php'</script>";
	exit;
	}

include('Models/Conexaodb.php'); ?>

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
  <link href="Template/css/dropdown-menu.css" type="text/css" rel="stylesheet">
  <link href="Template/css/zoom-imagem.css" type="text/css" rel="stylesheet">
  <link href="Template/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="Administracao.php"> Minha Lojinha </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="Administracao.php"> Home </a></li>
		  <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"> Cadastrar </a><!-- target="_blank" -->
			  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="Cadastrarcategoria.php"> Categoria </a>
				  <a class="dropdown-item" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#redimensionarModal"> Produto </a>
				  <a class="dropdown-item" href="Cadastrarfrete.php"> Frete </a>
				  <div class="dropdown-divider"></div>
				  <!-- <a class="dropdown-item" href="cadastro-limite-minino-estoque.php"> Limite Mínino de Estoque </a> -->
				  <!-- <a class="dropdown-item" href="cadastro-status.php"> Cadastrar Status </a> -->
			  </div>
		  </li>
		  <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"> Filtrar </a><!-- target="_blank" -->
			  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="Listarcategorias.php"> Categorias </a>
				  <a class="dropdown-item" href="Listarprodutos.php"> Produtos </a>
				  <a class="dropdown-item" href="Listarfretes.php"> Fretes </a>
				  <div class="dropdown-divider"></div>
				  <!-- <a class="dropdown-item" href="listar-status.php"> Verificar Status </a> -->
			  </div>
		  </li>
		<!-- Controle de Estoque -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink">
            <svg width="20" height="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
			</svg>
			<?php
			$contarDados = mysqli_query($conn, "SELECT COUNT(*) AS id_produto FROM produtos WHERE qtd <= 5");
			while($escrever = mysqli_fetch_array($contarDados)) { ?>
				<span class="badge badge-danger"><?php echo $escrever['id_produto']; ?>+ </span><?php } ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="Gerenciarestoque.php"> Estoque </a>
            <a class="dropdown-item" href="Gerenciarestoque.php"> Gerenciar Estoque </a>
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="#"> Relatórios </a> -->
          </div>
        </li>
          <li class="nav-item active"><a class="nav-link" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#logoutModal"> Sair </a></li>
		</ul>
		<a class="nav-link" href="whatsapp://send?text=Acesse - http://minhalojinha.6te.net/ - Veja a loja virtual que estou usando com todo um suporte necessário e vários benefícios para possuir uma! Cadastre-se já (00)0.0000-0000!" style="color: white;" title="Compartilhar">
		<svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-share" fill="currentColor" xmlns="http://www.w3.org/2000/svg" title="Compartilhar">
		<path fill-rule="evenodd" d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
		</svg></a>
      </div>
    </div>
  </nav>

 <!-- Page Content -->
  <div class="container">
    <div class="row">
	<?php include('Models/Buscarproduto.php'); ?>

	<div class="col-lg-3">
        <h1 class="my-4"> Categorias </h1>
        <div class="list-group">
			<a href="Listarcategorias.php" class="list-group-item"> Verificar Categoria </a>
			<a href="administracao.php" class="list-group-item"> Seja bem vindo(a) <?php echo $_SESSION['usuarioNome']; ?></a>
		</div>
    </div>