<?php 

include_once ("../../Dao/validador_acesso.php");



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css//siteSerMae/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--link swiper-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <title>serMãe</title>
</head>
<body>

    <!--navBar-->
    <?php
    include('../../components/siteSerMae/navBar.php');   
    ?>
    <!--navBar-->

    <!--Main-->
    <main>
    <div class="container main-container">


    <!--Main left inicio-->
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
    <!--Main left fim-->



    <!--Main middle inicio-->
    <div class="main-middle">
                    <div class="middle-container">

                <!--stories inicio-->
                
                <!--stories fim-->

               <!--post input-->
               <form class="add-post input-post" method="post" action="../../Controller/usuarioController.php">
              
                <input type="text" placeholder="Alterar seu nome: " id="add-post" name="nome">
                <input type="submit" class="btn btn-primary" name="atualizar">
               </form>

               <?php echo $_SESSION['nomeUsuario'] ?>

               <!--Inicio do Feed-->
               
                    <!--Feed IMG-->
                   
                    <!--Feed ação aria-->
                

                    <!--liked by-->
                

                    <!--caption-->
                

                    <!--Comentários-->
                
            
                    <!--Feed Top-->
                
               <!--Final do Feed-->

                    </div>
    </div>
    <!--Main middle fim-->



    <!--Main right inicio-->

                    <!--final melhores amigos-->

                    
                    <!--inicio comunidades-->
                
                    <!--final comunidades-->
    </div>
    <!--Main right fim-->

            </div>
        </main>
    <!--Main-->




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



    <script src="./../../js/siteSerMae/site.js"></script>

    <!--link JS swiper story-->
    <script type="module">
        import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'
        let swiper = new Swiper(".mySwiper", {
         slidesPerView: 6,   
         spaceBetween: 5,
        })
    </script>
    <!--link JS swiper story-->

</body>
</html>