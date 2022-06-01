<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>SouFuture</title>
</head>

<body>

    <div class="container">
<<<<<<< HEAD:Views/Logout.php
        <?php
=======
        <?php require $view;  ?>


        <?php #require $header;
        ?>
        <?php #require $view;  
        ?>
        <?php #require $rodape;  
        ?>
>>>>>>> 8f4234cd3dfa15036e6bdaddedc2a35cc3f98c12:Views/Master.php

        use App\Models\SessionLogin;

        if (isset($_GET['Logout'])){
            $logout = new SessionLogin();
            $logout ->logout();
        }

?>  
    </div>
</body>