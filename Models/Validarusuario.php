<?php
    session_start(); 
    //Incluindo a conex�o com banco de dados   
    include("Conexaodb.php");    
    //O campo usu�rio e senha preenchido entra no if para validar
    if((isset($_POST['nome'])) && (isset($_POST['senha']))) {
		$nome = mysqli_real_escape_string($conn, $_POST['nome']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $senha = md5($senha);

        //Buscar na tabela usuario o usu�rio que corresponde com os dados digitado no formul�rio
        $result_usuario = "SELECT * FROM usuarios WHERE nome = '$nome' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);

    //Encontrado um usuario na tabela usu�rio com os mesmos dados digitado no formul�rio
    if(isset($resultado)) {
        $_SESSION['usuarioId'] = $resultado['id_usuario'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
    if($_SESSION['usuarioNiveisAcessoId'] == "1") {
		header("Location: ../Administracao.php");
    } elseif($_SESSION['usuarioNiveisAcessoId'] == "2") {
		header("Location: ../Cliente.php");
    }
    //N�o foi encontrado um usuario na tabela usu�rio com os mesmos dados digitado no formul�rio
    //redireciona o usuario para a p�gina de login
    } else {
        //V�riavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "<center><font color='#FF0000'> Usu&aacute;rio ou senha Inv&aacute;lido </font></center>";
        header("Location: ../Login.php");
    }
    //O campo usu�rio e senha n�o preenchido entra no else e redireciona o usu�rio para a p�gina de login
    } else {
        $_SESSION['loginErro'] = "<center><font color='#FF0000'> Usu&aacute;rio ou senha inv&aacute;lido </font></center>";
        header("Location: ../Login.php");
    }
