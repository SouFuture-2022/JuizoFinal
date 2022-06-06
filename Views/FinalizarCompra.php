<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../Assets/css/inputs.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<section>
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="card shadow p-3 mb-3 bg-body rounded">
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="fs-4">Endereço</div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label>CEP</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label>Cidade</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label>Bairro</label>
                                                <input type="text" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label>Rua</label>
                                                <input type="text"  class="form-control" required > 
                                            </div>                
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col">
                                                <label for="">Número</label>
                                                <input type="text" class="form-control text-muted">
                                            </div>
                                            <div class="col">
                                                <label>Informações adicionais</label>
                                                <input type="text" class="form-check form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="fs-4">Forma de pagamento</div> 
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col">
                                                <form action="">
                                                    <div class="row d-flex justify-content-between mt-3 mb-3">
                                                        <div class="col">
                                                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                                                <p class="form-check-label">Cartão de Crédito</p> 
                                                            </label>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                                                <p class="form-check-label">Cartão de Débito</p>
                                                            </label>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                                                <p class="form-check-label">Tranferencia Bancaria</p>
                                                            </label>
                                                        </div>
                                                        <div class="col">
                                                            <label class="form-check" data-toggle="collapse" data-target="#pay_payme">
                                                                <input class="form-check-input" name="payment-option" type="radio" value="option2">
                                                                <p class="form-check-label">PayPal - Pague seguro</p>
                                                            </label>
                                                        </div> 
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <button class="btn btn-primary w-50">Ir para finalizar compra</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="fs-4">Finalizar compra</div>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label>Nome no Cartão</label>
                                                <input type="textmuted" name="creditCardHolderName" id="creditCardHolderName" placeholder="Nome igual ao escrito no cartão"class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label>Número do cartão</label>
                                                <input type="text" name="numCartao" id="numCartao" class="form-control" required> 
                                            </div>                                       
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="">Expiração:</label>
                                                <input type="date" class="form-control text-muted">
                                            </div>
                                            <div class="col">
                                                <label>CVV do cartão</label>
                                                            <input type="number" class="form-check form-control" name="cvvCartao" id="cvvCartao" maxlength="3" required>       
                                                        </div>                                
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <button class="subscribe btn btn-primary btn-block w-50" type="button">Confirmar</button>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

