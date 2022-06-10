<link href="/Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="/Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="/Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="/App/Services/css/personalizado.css" rel="stylesheet">

<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
    <div class="d-flex justify-content-center"><img src="/Assets/images/logo.png" class="float-center" height="49">
    </div>
    <div class="container">
        <header class="section-heading">
        </header><!-- sect-heading -->
    </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y ">
    <div class="container">

        <body>
            <!--<button onclick="pagamento()">Pagar</button>-->
            <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
            <span id="msg"></span>
            <form name="formPagamento" action="" id="formPagamento">
                <span id="msg"></span>
                <label>Tipo de Pagamento</label>
                <input type="radio" name="paymentMethod" id="paymentMethod" value="creditCard"> Cartão de Crédito
                <input type="radio" name="paymentMethod" id="paymentMethod" value="boleto"> Boleto
                <input type="radio" name="paymentMethod" id="paymentMethod" value="eft"> Débito Online <br><br>

                <label>Banco</label>
                <select name="bankName" id="bankName" class="select-bank-name">
                    <option value="">Selecione</option>
                </select>

                <h2>Dados do Cartão</h2>
                <label>Número do cartão</label>
                <input type="text" name="numCartao" id="numCartao" required>
                <span class="bandeira-cartao"></span><br><br>

                <label>CVV do cartão</label>
                <input type="text" name="cvvCartao" id="cvvCartao" maxlength="3" value="123" required><br><br>

                <input type="hidden" name="bandeiraCartao" id="bandeiraCartao">

                <label>Mês de Validade</label>
                <input type="text" name="mesValidade" id="mesValidade" maxlength="2" value="12" required><br><br>

                <label>Ano de Validade</label>
                <input type="text" name="anoValidade" id="anoValidade" maxlength="4" value="2030" required><br><br>

                <label>Quantidades de Parcelas</label>
                <select name="qntParcelas" id="qntParcelas" class="select-qnt-parcelas">
                    <option value="">Selecione</option>
                </select><br><br>

                <input type="hidden" name="valorParcelas" id="valorParcelas">

                <label>CPF do dono do Cartão</label>
                <input type="text" name="creditCardHolderCPF" id="creditCardHolderCPF" placeholder="CPF sem traço"
                    value="22111944785" required><br><br>

                <label>Nome no Cartão</label>
                <input type="text" name="creditCardHolderName" id="creditCardHolderName"
                    placeholder="Nome igual ao escrito no cartão" value="Jose Comprador" required><br><br>

                <input type="hidden" name="tokenCartao" id="tokenCartao">

                <input type="hidden" name="hashCartao" id="hashCartao">

                <h2>Endereço do dono do cartão</h2>

                <label>Logradouro</label>
                <input type="text" name="billingAddressStreet" id="billingAddressStreet" placeholder="Av. Rua"
                    value="Av. Brig. Faria Lima" required><br><br>

                <label>Número</label>
                <input type="text" name="billingAddressNumber" id="billingAddressNumber" placeholder="Número"
                    value="1384" required><br><br>
                </input>
                <label>Complemento</label>
                <input type="text" name="billingAddressComplement" id="billingAddressComplement"
                    placeholder="Complemento" value="5o andar"><br><br>

                <label>Bairro</label>
                <input type="text" name="billingAddressDistrict" id="billingAddressDistrict" placeholder="Bairro"
                    value="Jardim Paulistano"><br><br>

                <label>CEP</label>
                <input type="text" name="billingAddressPostalCode" id="billingAddressPostalCode"
                    placeholder="CEP sem traço" value="01452002" required><br><br>

                <label>Cidade</label>
                <input type="text" name="billingAddressCity" id="billingAddressCity" placeholder="Cidade"
                    value="Sao Paulo" required><br><br>

                <label>Estado</label>
                <input type="text" name="billingAddressState" id="billingAddressState" placeholder="Sigla do Estado"
                    value="SP" required><br><br>

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

                <h2>Dados do Comprador</h2>

                <label>Nome</label>
                <input type="text" name="senderName" id="senderName" placeholder="Nome completo" value="Jose Comprador"
                    required><br><br>

                <label>CPF</label>
                <input type="text" name="senderCPF" id="senderCPF" placeholder="CPF sem traço" value="22111944785"
                    required><br><br>

                <label>Telefone</label>
                <input type="text" name="senderAreaCode" id="senderAreaCode" placeholder="DDD" value="11" required>
                <input type="text" name="senderPhone" id="senderPhone" placeholder="Somente número" value="56273440"
                    required><br><br>

                <label>E-mail</label>
                <input type="email" name="senderEmail" id="senderEmail" placeholder="E-mail do comprador"
                    value="c66860546910556664625@sandbox.pagseguro.com.br" required><br><br>

                <h2>Endereço de Entrega</h2>
                <input type="hidden" name="shippingAddressRequired" id="shippingAddressRequired" value="true">

                <label>Logradouro</label>
                <input type="text" name="shippingAddressStreet" id="shippingAddressStreet" placeholder="Av. Rua"
                    value="Av. Brig. Faria Lima"><br><br>

                <label>Número</label>
                <input type="text" name="shippingAddressNumber" id="shippingAddressNumber" placeholder="Número"
                    value="1384"><br><br>

                <label>Complemento</label>
                <input type="text" name="shippingAddressComplement" id="shippingAddressComplement"
                    placeholder="Complemento" value="5o andar"><br><br>

                <label>Bairro</label>
                <input type="text" name="shippingAddressDistrict" id="shippingAddressDistrict" placeholder="Bairro"
                    value="Jardim Paulistano"><br><br>

                <label>CEP</label>
                <input type="text" name="shippingAddressPostalCode" id="shippingAddressPostalCode"
                    placeholder="CEP sem traço" value="01452002"><br><br>

                <label>Cidade</label>
                <input type="text" name="shippingAddressCity" id="shippingAddressCity" placeholder="Cidade"
                    value="Sao Paulo"><br><br>

                <label>Estado</label>
                <input type="text" name="shippingAddressState" id="shippingAddressState" placeholder="Sigla do Estado"
                    value="SP"><br><br>

                <input type="hidden" name="shippingAddressCountry" id="shippingAddressCountry" value="BRL">

                <label>Frete</label>
                <input type="radio" name="shippingType" value="1"> PAC
                <input type="radio" name="shippingType" value="2"> SEDEX
                <input type="radio" name="shippingType" value="3" checked> Sem frete<br><br>

                <label>Valor Frete</label>
                <input type="text" name="shippingCost" id="senderCPF" placeholder="Preço do frete. Ex: 2.10"
                    value="0.00"><br><br>

                <input type="submit" name="btnComprar" id="btnComprar" value="Comprar">
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
            <script src="/App/Services/js/personalizado.js"></script>
        </body>
    </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->