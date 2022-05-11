<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/oi.css/font-awesome.min.oi.css">
</head>
<section class="section-name bg padding-y-sm">
    <div class="container">
        <link rel="stylesheet" href="oi.css">
    </div>
</section>
<section id="main" class="section-name padding-y">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Cadastre-se</h3>
            <br>
        </header>
        <div class="box">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control"
                                required />
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                            </div>
                            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control" maxlength="11"
                                required />
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
                            <br><br>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <input type="date" name="data_nascimento" id="dataNascimento" class="form-control"
                                required="required" />
                            <br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                        </div>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Telefone"
                            maxlength="15" pattern="\(\d{2}\)\s*\d{5}-\d{4}" required />
                        <br><br>
                    </div>
                </div>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                    </div>
                    <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control"
                        maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
                    <br><br>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-eye" onclick="mouseoverPass();"
                                onmouseout="mouseoutPass();" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                        <!--<input type="file" name="perfil" id="imgPerfil" class="form-control">-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <button type="submit" name="btCadastrar" class="btn btn-primary btn-block">Enviar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>