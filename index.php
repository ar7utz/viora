<?php
    include_once "config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/tela_inicial.css">
        <title>Agenda Viora</title>
    </head>

    <body>
        <div class="container" id="menu">
            <div id="h1">
                <h1>Agenda Viora</h1>
            </div>

            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                </ul>
            </nav>
            <nav id="menu2">
                <ul>
                    <li><a href="<?= arquivo('modulos/login/login.php') ?>">Login</a></li>
                    <li><a href="<?= arquivo('modulos/cadastro/cadastro.php') ?>">Cadastre-se</a></li>
                </ul>
            </nav>

        </div>

        <div id="fi">
            <!--fisrt impression-->
            <h4>A plataforma que vai te fazer ganhar tempo!</h4>
            <hr>
        </div>
        <div id="img">
            <img src="" alt="">
        </div>

        <div id="ap">
            <!--about project-->
            <h4>Projeto realizado pelos alunos Artur e Flávio, que visaram numa</h4>
            <hr>
            <h4>plataforma que ajude e otimize o tempo de quem precisa estar em contato</h4>
            <hr>
            <h4>rápido e frequente, em vários meios diferentes, com as pessoas, sem a necessidade</h4>
            <hr>
            <h4>de salvar números e editar os contatos.</h4>
        </div>
    </body>
</html>