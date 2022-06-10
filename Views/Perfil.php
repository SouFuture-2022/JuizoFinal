<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <section>
        <div class="container d-flex justify-content-center">
            <div class="card shadow p-3 mb-5 bg-body rounded w-75"> 
                <div class="card-body">
                    <form>
                        <!--LEMBRANDO: esses campos ja devem estar preenchidos com informações pre estabelecidas do usuário-->
                        <div class="row"> 
                            <div class="col"> 
                                <div class="row mb-2"> 
                                    <div class="col"> 
                                        <label class="form-label">Nome completo</label> 
                                        <input class="form-control" type="text"> 
                                    </div>
                                    <div class="col"> 
                                        <label class="form-label">Nome de usuário</label> 
                                        <input class="form-control" type="text"> 
                                    </div> 
                                </div>
                                <div class="row mb-2">
                                    <div class="col"> 
                                        <label class="form-label">Email</label> 
                                        <input class="form-control" type="email"> 
                                    </div> 
                                    <div class="col"> 
                                        <label class="form-label">Telefone</label> 
                                        <input class="form-control" type="number"> 
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col"> 
                                        <label class="form-label">Endereço</label> 
                                        <input class="form-control" type="text"> 
                                    </div>
                                </div>  
                            </div>
                            <aside class="col"> 
                                <div class="text-lg-center mt-3"> 
                                    <img class="img-lg mb-3 img-avatar" style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1654867048~exp=1654867648~hmac=76210e703ed248ca16d6deae7c5a6b92158dc877595772123bc88ccb9b4a2cad" alt="Foto de usuário"> 
                                    <div class="row d-flex align-items-center">
                                        <div class="col w-50">
                                            <a class="btn btn-primary" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                                </svg>
                                                Atualizar
                                            </a>
                                            <a class="btn btn-sm btn-outline-danger" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div> 
                                </div> 
                            </aside>
                        </div>
                        <br> 
                        <button class="btn btn-primary" type="submit">Salvar mudanças</button> 
                    </form> <hr class="my-4"> 
                    <div class="row">
                        <div class="col me-5"> 
                            <div class="bg-light w-25 p-3">
                                <div class="row mb-2">
                                    <div class="col d-flex justify-content-center">
                                        Remover conta
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <a class="btn btn-outline-danger w-75" href="#">Desativar</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>