<link href="/App/Services/css/personalizado.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../Assets/css/inputs.css">

<section class="section-name padding-y ">
    <div class="container card">
        <div class="card-body">
            <body>
                <!--<button onclick="pagamento()">Pagar</button>-->
                <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
                <span id="msg"></span>
                <form name="formPagamento" action="" id="formPagamento">
                    <span id="msg"></span>
                    <h2 class="text-primary mt-3 mb-3">Tipo de Pagamento</h2>
                    <div class="form-check">
                        <div class="row d-flex justify-content-center mb-3">
                            <div class="col">
                                <input type="radio" class="form-check-input" name="paymentMethod" id="paymentMethod" value="creditCard">Cartão de Crédito
                            </div>
                            <div class="col">
                                <input type="radio" class="form-check-input" name="paymentMethod" id="paymentMethod" value="boleto">Boleto
                            </div>
                            <div class="col">
                                <input type="radio" class="form-check-input" name="paymentMethod" id="paymentMethod" value="eft">Débito Online
                            </div>  
                        </div>
                    </div>

                    <select name="bankName" id="bankName" class="select-bank-name form-select w-25 mb-3">
                        <option value="">Selecione o banco</option>
                    </select>
    
                    <h2 class="text-primary mb-3">Dados do Cartão</h2>
                    <label>Número do cartão</label>
                    <input type="number" name="numCartao" id="numCartao" class="form-control w-25 mb-3" required>
                    <span class="bandeira-cartao"></span>
    
                    <label>CVV do cartão</label>
                    <input type="number" name="cvvCartao" id="cvvCartao" maxlength="3" class="form-control w-25 mb-3" required>
    
                    <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">
    
                    <label>Mês de Validade</label>
                    <input type="number" name="mesValidade" id="mesValidade" maxlength="2"class="form-control w-25 mb-3" required>
    
                    <label>Ano de Validade</label>
                    <input type="number" name="anoValidade" id="anoValidade" maxlength="4" class="form-control w-25 mb-3" required>
    
                    <label>Quantidades de Parcelas</label>
                    <select name="qntParcelas" id="qntParcelas" class="select-qnt-parcelas form-select w-25 mb-3">
                        <option value="">Selecione</option>
                    </select>
    
                    <input type="hidden" name="valorParcelas" id="valorParcelas">
    
                    <label>CPF do dono do Cartão</label>
                    <input type="number" name="creditCardHolderCPF" id="creditCardHolderCPF" placeholder="CPF sem traço"
                    class="form-control w-25 mb-3" required>
    
                    <label>Nome no Cartão</label>
                    <input type="text" name="creditCardHolderName" id="creditCardHolderName"
                        placeholder="Nome igual ao escrito no cartão" class="form-control w-25 mb-3" required>
    
                    <input type="hidden" name="tokenCartao" id="tokenCartao">
    
                    <input type="hidden" name="hashCartao" id="hashCartao">
    
                    <h2 class="text-primary mb-3">Endereço do dono do cartão</h2>
    
                    <label>Logradouro</label>
                    <input type="text" name="billingAddressStreet" id="billingAddressStreet" placeholder="Av. Rua"
                    class="form-control w-25 mb-3" required>
    
                    <label>Número</label>
                    <input type="number" name="billingAddressNumber" id="billingAddressNumber" placeholder="Número"
                    class="form-control w-25 mb-3" required>
                    </input>
                    <label>Complemento</label>
                    <input type="text" name="billingAddressComplement" id="billingAddressComplement"
                        placeholder="Complemento" class="form-control w-25 mb-3">
    
                    <label>Bairro</label>
                    <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" placeholder="Bairro"
                    class="form-control w-25 mb-3">
    
                    <label>CEP</label>
                    <input type="number" name="billingAddressPostalCode" id="billingAddressPostalCode"
                        placeholder="CEP sem traço" class="form-control w-25 mb-3" required>
    
                    <label>Cidade</label>
                    <input type="text" name="billingAddressCity" id="billingAddressCity" placeholder="Cidade"
                    class="form-control w-25 mb-3" required>
    
                    <label>Estado</label>
                    <input type="text" name="billingAddressState" id="billingAddressState" placeholder="Sigla do Estado"
                    class="form-control w-25 mb-3" required>
    
                    <input type="hidden" name="billingAddressCountry" id="billingAddressCountry" value="BRL">
    
                    <input type="hidden" name="receiverEmail" id="receiverEmail" value="<?php echo EMAIL_LOJA; ?>">
    
                    <input type="hidden" name="currency" id="currency" value="<?php echo MOEDA_PAGAMENTO; ?>">
    
                    <input type="hidden" name="notificationURL" id="notificationURL" value="<?php echo URL_NOTIFICACAO; ?>">
                    <?php
                    $query_car = "SELECT SUM(valor_venda * qnt_produto) AS total_venda, carrinho_id FROM carrinhos_produtos WHERE carrinho_id = 1";
    
                    $resultado_car = $conn->prepare($query_car);
                    $resultado_car->execute();
    
                    $row_car = $resultado_car->fetch(PDO::FETCH_ASSOC);
    
                    $total_venda = number_format($row_car['total_venda'], 2, '.', '');
    
                    ?>
    
                    <input type="hidden" name="reference" id="reference" value="<?php echo $row_car['carrinho_id'] ?>">
    
                    <input type="hidden" name="amount" id="amount" value="<?php echo $total_venda; ?>">
    
                    <input type="hidden" name="hashCartao" id="hashCartao">
    
                    <h2 class="text-primary mb-3">Dados do Comprador</h2>
    
                    <label>Nome</label>
                    <input type="text" name="senderName" id="senderName" placeholder="Nome completo"
                    class="form-control w-25 mb-3" required>
    
                    <label>CPF</label>
                    <input type="text" name="senderCPF" id="senderCPF" placeholder="CPF sem traço"
                    class="form-control w-25 mb-3" required>
    
                    <label>Telefone</label>
                    <input type="text" name="senderAreaCode" id="senderAreaCode" placeholder="DDD" maxlength="2" class="form-control w-25 mb-3" required>
                    <input type="text" name="senderPhone" id="senderPhone" class="form-control w-25 mb-3" placeholder="Somente número"
                        required>
    
                    <label>E-mail</label>
                    <input type="email" name="senderEmail" id="senderEmail" placeholder="E-mail do comprador"
                    class="form-control w-25 mb-3" required><br><br>
    
                    <h2 class="text-primary">Endereço de Entrega</h2>
                    <input type="hidden" name="shippingAddressRequired" id="shippingAddressRequired" value="true">
    
                    <label>Logradouro</label>
                    <input type="text" name="shippingAddressStreet" id="shippingAddressStreet" class="form-control w-25 mb-3" placeholder="Av. Rua">
    
                    <label>Número</label>
                    <input type="text" name="shippingAddressNumber" id="shippingAddressNumber" class="form-control w-25 mb-3" placeholder="Número">
    
                    <label>Complemento</label>
                    <input type="text" name="shippingAddressComplement" id="shippingAddressComplement" class="form-control w-25 mb-3"
                        placeholder="Complemento">
    
                    <label>Bairro</label>
                    <input type="text" name="shippingAddressDistrict" id="shippingAddressDistrict" class="form-control w-25 mb-3" placeholder="Bairro">
    
                    <label>CEP</label>
                    <input type="text" name="shippingAddressPostalCode" id="shippingAddressPostalCode" class="form-control w-25 mb-3"
                        placeholder="CEP sem traço">
    
                    <label>Cidade</label>
                    <input type="text" name="shippingAddressCity" id="shippingAddressCity" placeholder="Cidade" class="form-control w-25 mb-3">
    
                    <label>Estado</label>
                    <input type="text" name="shippingAddressState" id="shippingAddressState" class="form-control w-25 mb-3" placeholder="Sigla do Estado">  
    
                    <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">
    
                    <label>Frete</label>
                    <br>
                    <input type="radio" name="shippingType" value="1"> PAC
                    <input type="radio" name="shippingType" value="2"> SEDEX
                    <input type="radio" name="shippingType" value="3" checked> Sem frete<br><br>
    
                    <label>Valor Frete</label>
                    <input type="text" name="shippingCost" id="senderCPF" placeholder="Preço do frete. Ex: 2.10"
                    class="form-control w-25 mb-3">
    
                    <input type="submit" name="btnComprar" id="btnComprar" value="Comprar" class="btn btn-primary">
                </form>
    
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
                <script src="/App/Services/js/personalizado.js"></script>
            </body>
        </div>
        
    </div>
</section>
