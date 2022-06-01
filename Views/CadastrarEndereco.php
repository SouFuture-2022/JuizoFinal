<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<section>
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                <h2 class="text-primary">Cadastrar Endereços</h2>
            </div>
            <form method="post">
                <div>
                    <div class="mb-3">
                        <input type="text" name="cep" placeholder="CEP" class="form-control">
                    </div>
                    <!--AO USUÁRIO DIGITAR O CEP, ESSE CAMPO É PREENCHIDO SOZINHO-->
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="estado" placeholder="Estado" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="cidade" placeholder="Cidade" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="bairro" placeholder="Bairro" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="rua" placeholder="Rua" class="form-control">
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" name="numero" placeholder="Número" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="infoadicionais" placeholder="Informações adicionais" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn w-75 btn-primary">Cadastrar</button> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!--<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastrar Endereços</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="numero" value="000" id="numero" placeholder="N°"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="cep" value="000000-000" id="cep" placeholder="CEP" maxlength="9"
                                onblur="pesquisacep(this.value);" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="rua" value="Teste" id="rua" placeholder="Rua" class="form-control"
                                required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="bairro" value="Teste" id="bairro" placeholder="Bairro"
                                class="form-control" required />
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="cidade" value="Teste" id="cidade" placeholder="Cidade"
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="uf" value="CE" id="uf" placeholder="UF" class="form-control"
                                required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>