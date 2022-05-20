<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <?php

        use App\Models\SessionLogin;

        if (isset($_GET['Logout'])){
            $logout = new SessionLogin();
            $logout ->logout();
           {$_SESSION['login'] = false;}
        }

?>   <a href='/' class='btn w-75 btn-outline-primary' name='logout'>Voltar</a>

    </div>
</body>
</html>