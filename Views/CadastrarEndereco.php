<?php

	$endereco = new Enderecos();

	if(isset($_POST['btCadastrar'])) {
		$numero = $_POST['numero'];
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$uf = $_POST['uf'];
		$id_usuario = '1';

		$endereco->setNumero($numero);
		$endereco->setCep($cep);
		$endereco->setRua($rua);
		$endereco->setBairro($bairro);
		$endereco->setCidade($cidade);
		$endereco->setUf($uf);
		$endereco->setIdusuario($id_usuario);

		if($endereco->insert()) {
			$_SESSION['msg_sucesso'] = 
			'<div class="alert alert-success" role="alert">
				<i class="fa fa-check-circle" aria-hidden="true"></i> Cadastro Realizado Com sucesso...
			</div>';
			header('Location: ../Index');
		}
	}
?>
<!--ESSA PAGINA, POR ENQUANTO, SO FUNCIONA SE FOR UTILIZADA COMO UMA BOX. SENÃO, VAI PRECISAR SER REFATORADA.-->
<section class="section-name bg padding-y-sm">
    <div class="d-flex justify-content-center">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Endereços</h3>
        </header>
    </div>
</section>


<div class="d-flex justify-content-center">
    <div class="box">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>CEP</label>-->
                        <input type="text" name="cep" id="cep" placeholder="CEP" maxlength="9"
                            onblur="pesquisacep(this.value);" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>Rua</label>-->
                        <input type="text" name="rua" id="rua" placeholder="Rua" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>Numero</label>-->
                        <input type="text" name="numero" id="numero" placeholder="N°" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>Bairro</label>-->
                        <input type="text" name="bairro" id="bairro" placeholder="Bairro" class="form-control"
                            required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>Cidade</label>-->
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column pb-2">
                    <div class="form-group">
                        <!--<label>UF</label>-->
                        <input type="text" name="uf" id="uf" placeholder="UF" class="form-control" required />
                    </div>
                </div>
            </div>
            <div class="form-group d-flex flex-column">
                <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
            </div>
        </form>
    </div>
</div>