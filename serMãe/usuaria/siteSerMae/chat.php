<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css//siteSerMae/home.css">
    <link rel="stylesheet" href="../../css//siteSerMae/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chat - serMãe</title>
</head>
<body>

   <!--navBar-->
   <?php
    include('../../components/navBar.php');   
    ?>
    <!--navBar-->

<!--Main-->
<main>
<div class="container main-container">

     <!--Main left inicio-->
     <div class="main-left">
                    <!--inicio Boas vindas-->
                    <?php
                    include('../../components/boasVindas.php')
                    ?>
                    <!--final Boas vindas-->

                    <!--start aside bar-->
                    <?php
                    include('../../components/menu.php')
                    ?>
                    <!--end aside bar-->
    </div>
    <!--Main left fim-->


<!--inicio chat box-->

<!--final chat box-->

    
    <!--Inicio popup aria-->
    <!--final perfil-popUp-->
    <?php
    include('../../components/perfilPopup.php')
    ?>
    <!--inicio perfil-popUp-->

    <!--inicio adicionar post-->
    <?php
    include('../../components/adicionarPost.php')
    ?>
    <!--final adicionar post-->
    <!--Final popup aria-->

</main>
<!--Main-->

<script src="./../../js/siteSerMae/site.js"></script>
<script src="./../../js/siteSerMae/chat.js"></script>
</body>
</html>