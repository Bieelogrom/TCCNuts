<?php

include('../../components/ADMIN/navbar.php');
include_once "../../Dao/validador_acesso.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/ADMIN/cadastrar-adm.css">

    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../css/ADMIN/ADM.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <h2>Cadastrar</h2>

            <form action="#" method="post">

                <div class="foto-adm">
                    <img src="#" alt="Foto adm" class="foto-adm">

                    <div class="img-group">
                        <label for="">Defina uma foto de perfil</label>
                        <input type="file">
                    </div>
                </div>

                <!-- Nome & Email -->
                <div class="group-family">
                    <div class="input-group">
                        <label for="">Nome</label>
                        <input type="text">
                    </div>
                    <div class="input-group">
                        <label for="">Email</label>
                        <input type="email">
                    </div>
                </div>

                <!-- Telefone & CPF -->
                <div class="group-family">
                    <div class="input-group">
                        <label for="">Telefone</label>
                        <input type="tel">
                    </div>
                    <div class="input-group">
                        <label for="">CPF</label>
                        <input type="text">
                    </div>
                </div>


                <!-- Senha & Confirmar senha -->
                <div class="group-family">
                    <div class="input-group">
                        <label for="">Senha</label>
                        <input type="password">
                    </div>
                    <div class="input-group">
                        <label for="">Confirmar senha</label>
                        <input type="password">
                    </div>
                </div>

                <div class="btn-cadastrar">
                    <input type="submit" value="Cadastrar">
                </div>
                

            </form>
        </div>
    </section>

    <script src="../../js/ADMIN/menu-lateral.js"></script>
</body>
</html>