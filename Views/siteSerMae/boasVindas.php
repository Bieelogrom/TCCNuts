<?php

include_once ("../../Dao/validador_acesso.php");


?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/siteSerMae/boasVindas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Seja Bem-vinda!</title>
</head>
<body>

<main class="main-1">
        <section class="corpo">

        <div class="div-user">
            <img class="imagem" src="../../img/siteSerMae/bemvinda/serMãe.png" width="500px" height="400px" alt="">
        </div>

        <form action="">
        <div class="perfil-user">
            <h1 class="text-1">Está quase lá!</h1>
            <!--dropDown-->
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Escolha seu perfil</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li class="active">Mãe</li>
                    <li>Mãe solo</li>
                    <li>Tentante</li>
                    <li>Gestante</li>
                </ul> 
            </div>

            <button class="button-ok" type="submit">Próximo</button>
        </div>
        </form>

        </section>
    </main>

<script src="../../js/siteSerMae/bemVinda.js"></script>
</body>
</html>