<!--?php
    session_start();

    $logar = $_SESSION['logar'] ?? false;

    if($logar){
        require_once __DIR__ . "./includes/Cabecalhos/menucliente.php";
    
    } else {
        require_once __DIR__ . "./includes/Cabecalhos/menu.php";
    }

?>-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<section>
    
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
                <div class="card-body">
                    <h2 class="text-primary mb-1"> Nossos Contatos</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <option selected>Horarios De Funcionamento</option>
                        <ul>
                            <li>08:00 ás 12:00</li>
                            <li>13:00 ás 17:00</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <option selected>Cotatos</option>
                        <ul>
                            <li>+55 (85) 9.0000.0000</li>
                            <li>+55 (00) 3333.0000</li>
                            <li>info@lojademooficial.com</li>
                        </ul>
                    </div>
             </div> 
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <div class="card shadow p-3 mb-5 bg-body rounded w-50 p-3">
            <div class="card-body">
                    <h2 class="text-primary mb-3"> Envie-nos uma mensagem </h2>
                 
                    <div class="row mb-3">
                        <div class="d-flex justify-content-center">
                            <textarea name="" id="" cols="70" rows="5" placeholder="Essa mensagem vai ser enviada para o nosso email: empresatestpjse@gmail.com"></textarea>
                        </div>
                    </div>    
                <div class="row">
                    <div class="">
                        <button class="btn btn-primary w-25" type="button">Enviar</button>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</section>
<!--
<section class="section-name bg padding-y-sm">
    <div class="container">
        <header class="section-heading">
            <h3 class="section-title">Contate-nos</h3>
        </header>
    </div>
</section>

<section class="section-name padding-y">
    <div class="container">
        <article class="card mb-4">
            <div class="box">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Horário de Funcionamento</li>
                            <li>08:00hs ás 12:00hs</li>
                            <li>13:00hs ás 17:00hs</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>+55 (00) 9.0000-0000 </li>
                            <li>+55 (00) 3336-1234</li>
                            <li>info@lojademooficial.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
