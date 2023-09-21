<?php

include('../../components/ADMIN/navbar.php');

include_once "../../Dao/validador_acesso.php";

include_once "../../dao/conexãoDAO.php";
include_once "../../dao/UsuarioDAO.php";

$usuariodao = new usuarioDAO;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM | SERMÃE</title>
    <link rel="stylesheet" href="../../css/ADMIN/style.css">

    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../components/ADMIN/style.css">
    <link rel="stylesheet" href="../../css/ADMIN/Dashboard.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <section class="home-section">
        <div class="conteudo-adm">
            <div class="main-dashboard">
                <h2>Observe e analise cada passo do sistema!</h2>
                <p>Administração</p>
            </div>

            <div class="feedback-users">

                <div class="card_cadastros">
                    <img src="" alt="">
                    <div>
                        <h1 class="card_texto">Usuários Cadastradas</h1>
                        <h2 class="card_valor"><?= $usuariodao->listaCadastros() ?></h2>
                    </div>
                </div>

                <div class="card_suspensos">
                    <img src="" alt="">
                    <div>
                        <h1 class="card_texto">Usuários Suspensos</h1>
                        <h2 class="card_valor"><?= $usuariodao->listaCadastros() ?></h2>
                    </div>
                </div>

                <div class="card_banidos">
                    <img src="" alt="">
                    <div>
                        <h1 class="card_texto">Usuários banidos</h1>
                        <h2 class="card_valor"><?= $usuariodao->listaCadastros() ?></h2>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <script src="../../Components/ADMIN/menu-lateral.js"></script>
</body>
</html>

