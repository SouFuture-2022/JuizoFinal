<link href="/Assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/all.min.css" rel="stylesheet" type="text/css">
<link href="/Assets/css/ui.css" rel="stylesheet" type="text/css" />
<link href="/Assets/css/ocultar-exibir.css" type="text/css" rel="stylesheet">
<link href="/Assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<link href="/Assets/css/avaliacao-estrelas.css" rel="stylesheet" type="text/css" />
<!-- ========================= SECTION  ========================= -->
<section class="section-name bg padding-y-sm">
    <div class="d-flex justify-content-center"><img src="/Assets/images/logo.png" class="float-center"
                                height="49"></div>
    <div class="container">
        <header class="section-heading">
        </header><!-- sect-heading -->
    </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name padding-y ">
    <div class="container">
        <!-- ============================ COMPONENT PAYMENT  ================================= -->
        <div class="card shadow p-3 mb-5 bg-body rounded">
           
            <div class="card-body">
                <h4 class="card-title mb-4">Forma de pagamento </h4>
                <form role="form">
                    <div class="form-group">
                        <label for="username">Nome do titular:</label>
                        <input type="text" class="form-control" name="username" placeholder="Ex. Tamas Pinheiro"
                            required="">
                    </div> <!-- form-group.// -->

                    <div class="form-group">
                        <label for="cardNumber">Numero do cartão:</label>
                        <div class="input-group">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="cardNumber" placeholder="">
                        </div> <!-- input-group.// -->
                    </div> <!-- form-group.// -->
                    <div class="row">
                        <div class="col-md flex-grow-0">
                            <div class="form-group">
                                <label><span class="hidden-xs">Expiração</span> </label>
                                <div class="form-inline" style="min-width: 220px">
                                    <select class="form-control" style="width:100px">
                                        <option>MM</option>
                                        <option>01 - Janeiro</option>
                                        <option>02 - Fevereiro</option>
                                        <option>03 - Fevereiro</option>
                                    </select>
                                    <span style="width:20px; text-align: center"> / </span>
                                    <select class="form-control" style="width:100px">
                                        <option>AA</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label data-toggle="tooltip" title=""
                                    data-original-title="3 digits code on back side of the card">CVV
                                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                                    </svg>
                                </label>
                                <input class="form-control" required="" type="text">
                            </div> <!-- form-group.// -->
                        </div>
                    </div> <!-- row.// -->
                    <button class="subscribe btn btn-primary btn-block" type="button"> Confirmar </button>
                </form>


                <article class="accordion" id="accordion_pay">
                    <div class="card">
                        <header class="card-header">
                            <img src="/Assets/images/btn-paypal.png" class="float-right"
                                height="24">
                            <label class="form-check collapsed" data-toggle="collapse" data-target="#pay_paynet">
                                <input class="form-check-input" name="payment-option" checked type="radio"
                                    value="option2">
                                <h6 class="form-check-label">
                                    Paypal
                                </h6>
                            </label>
                        </header>
                        <div id="pay_paynet" class="collapse show" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-center text-muted">Conecte sua conta PayPal e use-a para pagar sua
                                    Contas. Você será redirecionado para PayPal para adicionar suas informações de faturamento.</p>
                                <p class="text-center">
                                    <br><br>
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="/Assets/images/credito.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                <h6 class="form-check-label"> Cartão de Crédito </h6>
                            </label>
                        </header>
                        <div id="pay_payme" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="alert alert-success">Algumas informações ou instruções</p>
                                <form class="form-inline">
                                    <input type="text" class="form-control mr-2" placeholder="xxxx-xxxx-xxxx-xxxx"
                                        name="">
                                    <input type="text" class="form-control mr-2" style="width: 100px"
                                        placeholder="dd/yy" name="">
                                    <input type="number" maxlength="3" class="form-control mr-2" style="width: 100px"
                                        placeholder="cvc" name="">
                                    <button class="btn btn btn-success">Button</button>
                                </form>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                    <div class="card">
                        <header class="card-header">
                            <img src="/Assets/images/transferencia.png" class="float-right"
                                height="24">
                            <label class="form-check" data-toggle="collapse" data-target="#pay_card">
                                <input class="form-check-input" name="payment-option" type="radio" value="option1">
                                <h6 class="form-check-label"> Transferencia Bancaria </h6>
                            </label>
                        </header>
                        <div id="pay_card" class="collapse" data-parent="#accordion_pay">
                            <div class="card-body">
                                <p class="text-muted">Algumas instruções sobre como pagar</p>
                                <p>
                                    Bank of America, número da conta: 12345678912346 <br>
                                    IBAN: 12345, SWIFT: 987654
                                </p>
                            </div> <!-- card body .// -->
                        </div> <!-- collapse .// -->
                    </div> <!-- card.// -->
                </article>
                <!-- accordion end.// -->


                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Informações de entrega</h4>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="js-check box active">
                                        <input type="radio" name="dostavka" value="option1" checked>
                                        <h6 class="title">Entrega</h6>
                                        <p class="text-muted">Vamos entregar pela DHL Kargo</p>
                                    </label> <!-- js-check.// -->
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="js-check box">
                                        <input type="radio" name="dostavka" value="option1">
                                        <h6 class="title">Retirada</h6>
                                        <p class="text-muted">Venha ao nosso escritório para algum lugar </p>
                                    </label> <!-- js-check.// -->
                                </div>
                            </div> <!-- row.// -->


                            <div class="row">
                                
                                <div class="form-group col-sm-4">
                                    <label>Cidade*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                
                                <div class="form-group col-sm-3">
                                    <label>Bairro*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                
                                <div class="form-group col-sm-4">
                                    <label>Rua*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                 
                                <div class="form-group col-sm-2">
                                    <label>complemento*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Casa*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label>Caixa Postal*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                                
                                <div class="form-group col-sm-4">
                                    <label>Numero*</label>
                                    <input type="text" placeholder="Digite aqui" class="form-control">
                                </div>
                            
                            </div> <!-- row.// -->  
                        </form>
                    </div> <!-- card-body.// -->
                </article> <!-- card.// -->

            </div> <!-- card-body.// -->
        </div> <!-- card .// -->
        <!-- ============================ COMPONENT FEEDBACK END.// ================================= -->
    </div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ======================= -->