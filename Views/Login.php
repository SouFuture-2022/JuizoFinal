<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <h2>Entrar</h2>

                        <form method="post">
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="Assets/images/usuario.png" alt="icone de perfil"></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><img src="Assets/images/cadeado.png" alt="icone de senha"></span>
                                    <input type="password" name="email" class="form-control" placeholder="Senha">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <!--<div>
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Lembrar de mim
                                    </label>
                                </div>-->

                                <div>
                                    <a href="#" class="text-decoration-none">Esqueci minha senha</a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn mt-3 w-75 btn-primary" type="button">Entrar</button>
                            </div>
                        </form>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <p>Ainda não tem uma conta?</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="btn w-75 btn-outline-primary">Criar conta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
