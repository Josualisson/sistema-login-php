<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['login'])){

            if(isset($_POST['acao']) ){
                $login = 'josue';
                $senha = '1234';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //Logado com sucesso
                    $_SESSION['login'] = $login;
                    header('Location: index.php');

                } else {
                    //Algum erro aconteceu 
                    echo 'Dados invávidos!';
                }
            }
            include('login.php');
        } else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('home.php');
        }

    ?>
    
</body>
</html>