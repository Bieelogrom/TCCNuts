<?php

include_once ("../../Dao/validador_acesso.php");


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/siteSerMae/home.css">
    <link rel="stylesheet" href="../../css/siteSerMae/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Perfil - Ser Mãe</title>
    <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    
</head>
<body>

    <!--navBar-->
    <?php
    include('../../components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

    <main>

    <div class="container main-container">
    <div class="main-left">

    <!--inicio Boas vindas-->
    <?php
    include('../../components/siteSerMae/boasVindas.php')
    ?>
    <!--final Boas vindas-->

    <!--start aside bar-->
    <?php
    include('../../components/siteSerMae/menu.php')
    ?>
    <!--end aside bar-->
    </div>


    <div class="header__wrapper">
        <header></header>
        <div class="cols__container">
            <div class="left__col">
                <div class="img__container">
                    <img src="./../../img/siteSerMae/perfil/icon.jpg" alt="Marina Alonzo"/>
                    <span></span>
                    </div>
                        <h2>Marina Alonzo</h2>
                        <p>Lara - 2 aninhos e Thomas - 35 semanas</p>
                        <p>mari.lonzo@gmail.com</p>

                         <ul class="about">
                            <li><span>8</span> Postagens</li>
                            <li><span>40</span> Amigas</li>
                            <li><span>4</span> Favoritas</li>
                        </ul>

                        <div class="content">
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                Eius est odio fuga sequi distinctio atque, 
                                officiis voluptatibus, magnam iusto dignissimos aliquam!
                                Enim quo aperiam veritatis. Aliquid voluptatum at aut a!
                            </p>

                            <ul>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-instagram"></i></li>
                                <li><i class="fab fa-facebook"></i></li>
                                <li><i class="fab fa-linkedin"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="right__col">
                        
                     
                        <div class="photos">
                            <img src="./../../img/siteSerMae/perfil/feed1.png" alt="Foto">
                            <img src="./../../img/siteSerMae/perfil/feed2.png" alt="Foto">
                            <img src="./../../img/siteSerMae/perfil/feed3.png" alt="Foto">
                            <img src="./../../img/siteSerMae/perfil/feed4.png" alt="Foto">
                            <img src="./../../img/siteSerMae/perfil/feed5.png" alt="Foto">
                            <img src="./../../img/siteSerMae/perfil/feed6.png" alt="Foto">
                        </div>
                    </div>
                </div>
            </div>


    </main>
    </div>


    



    <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../components/siteSerMae/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../components/siteSerMae/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->

<script src="../../js/siteSerMae/site.js"></script>
</body>
</html>