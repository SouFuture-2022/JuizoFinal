<?php

$cep_origem    = "61648510";
$cep_destino   = $_POST['cep'];
$peso          = $_POST['peso'];
$valor         = $_POST['valor'];
$tipo_do_frete = $_POST['frete'];

if(empty($tipo_do_frete)){
	?>
	<div class="alert alert-danger mt-3" role="alert">
		<p class="text-center">
			Escolha o Tipo do Frete
		</p>
	</div>
	<?php

} else {
if ($tipo_do_frete == 'balcao') {
    ?>	
	<div class="card mt-3">
		<div class="card-body">
			<div class="alert alert-danger mt-3" role="alert">
				<p class="text-center">
					Receber Pedido no Balção!<br>Valor do Frete: R$00,00<br>
					Prazo: 0 dias
				</p>
			</div>

			<hr>

			<form>
				<dl class="dlist-align">
					<dt>Frete:</dt>
					<dd class="text-right text-danger">+ R$0,00</dd>
				</dl>

				<dl class="dlist-align">
					<dt><strong>Total:</strong></dt>
					<dd class="text-right text-dark b"><strong>R$<?php echo number_format($valor, 2, ',', ' '); ?></strong></dd>
				</dl>

				<a href="../FinalizarCompra" class="btn btn-primary btn-block">Finalizar Compra</a>
			</form>
		</div>
	</div>
	<?php
} else {
    if ($peso <= 20) {
        $altura        = 6;
        $largura       = 20;
        $comprimento   = 20;
    } elseif ($peso > 20 || $peso < 50) {
        $altura        = 6;
        $largura       = 20;
        $comprimento   = 20;
    } elseif ($peso >= 50) {
        $altura        = 6;
        $largura       = 20;
        $comprimento   = 20;
    } else {
	?>
	<div class="alert alert-danger mt-3" role="alert">
		<p class="text-center">
			Error ao Consultar Frete!
		</p>
	</div>
	<?php
    }

    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&sCepOrigem=" . $cep_origem;
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $tipo_do_frete;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";

    $xml = simplexml_load_file($url);
    $frete =  $xml->cServico;

    ?>

	<div class="card mt-3">
		<div class="card-body">
			<div class="alert alert-danger mt-3" role="alert">
				<p class="text-center">
					Valor do Frete: R$<?php echo $frete->Valor; ?><br>
					Prazo: <?php echo $frete->PrazoEntrega; ?> dias
				</p>
			</div>

			<hr>

			<form>
				<dl class="dlist-align">
					<dt>Frete:</dt>
					<dd class="text-right text-danger">+ R$<?php echo $frete->Valor; ?></dd>
				</dl>
				
				<dl class="dlist-align">
					<dt>Sub Total:</dt>
					<dd class="text-right text-dark b"><strong>R$<?php echo number_format($valor, 2, ',', ' '); ?></strong></dd>
				</dl>

				<dl class="dlist-align">
					<dt><strong>Total:</strong></dt>
					<dd class="text-right text-dark b"><strong>R$<?php echo number_format($valor + $frete->Valor, 2, ',', ' '); ?></strong></dd>
				</dl>

				<a href="../FinalizarCompra" class="btn btn-primary btn-block">Finalizar Compra</a>
			</form>
		</div>
	</div>

	<?php }} ?>