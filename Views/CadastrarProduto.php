<?php

	//$produto = new Produtos();
	//$categoria = new Categorias();

	if(isset($_POST['btCadastrar'])) {
		$extensao = strtolower(substr($_FILES['imagem_destaque']['name'], -4));
		$imagem_destaque = md5(time()).$extensao;
		$diretorio = $_SERVER['DOCUMENT_ROOT'] . '/Uploads/ProdutosDestaque/';

		move_uploaded_file($_FILES['imagem_destaque']['tmp_name'], $diretorio.$imagem_destaque);

		$nome = $_POST['nome'];
		$habilitar_cor = $_POST['habilitar_cor'];
		$habilitar_tamanho = $_POST['habilitar_tamanho'];
		$preco = $_POST['preco'];
		$quantidade = $_POST['quantidade'];
		$peso = $_POST['peso'];
		$un_medida = 'g';
		$descricao = $_POST['descricao'];
		$id_categoria = $_POST['id_categoria'];

		$produto->setNome($nome);
		$produto->setImagem($imagem_destaque);
		$produto->setHabilitarcor($habilitar_cor);
		$produto->setHabilitartamanho($habilitar_tamanho);
		$produto->setPreco($preco);
		$produto->setQuantidade($quantidade);
		$produto->setPeso($peso);
		$produto->setUnmedida($un_medida);
		$produto->setDescricao($descricao);
		$produto->setIdcategoria($id_categoria);

		if($produto->insert()) {
			include('Includes/MsgSucesso.php');
		}
	}
?>

<section class="section-name bg padding-y-sm">
	<div class="container">
	<header class="section-heading">
		<h3 class="section-title">Cadastrar Produto</h3>
	</header>
	</div>
</section>

<section class="section-name padding-y">
	<div class="container">
		<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-md-6">
						<input type="text" name="nome" id="nome" placeholder="Nome do Produto" class="form-control" required />
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" name="id_categoria" required >
								<option value="">Categoria</option>
								<?php foreach($categoria->findAll() as $key => $value) { ?>
								<option value="<?php echo $value->id_categoria; ?>"><?php echo $value->nome_categoria; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="file" name="imagem_destaque" id="imagemDestaque" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="preco" id="preco" placeholder="Preço" class="form-control money" onKeyPress="return(MascaraMoeda(this,'.','.',event))" required />
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" name="habilitar_cor" required >
								<option value="">Habilitar Cor</option>
								<option value="S">Sim</option>
								<option value="N">Não</option>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<select class="form-control" name="habilitar_tamanho" required >
								<option value="">Habilitar Tamanho</option>
								<option value="S">Sim</option>
								<option value="N">Não</option>
							</select>						
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" class="form-control" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="peso" id="peso" placeholder="Peso" class="form-control" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<span class="caracteres">1.000</span> Restantes
					<textarea name="descricao" id="descricao" placeholder="Desccrição" class="form-control" rows="3"></textarea>
					<small class="form-text text-muted"><p class="text-danger">Máximo de caracteres 1.000 letras</p></small>
				</div>
				<div class="form-group">
					<button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</section>