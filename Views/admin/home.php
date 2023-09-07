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
                <div class="facilidade-app">
                    <div class="descricao">
                        <p>Quantidade de usuarias</p>
                        <span>cadastradas</span>
                    </div>
                    <div class="box">
                        <div class="box-circle">
                            <svg>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                            </svg>
                        </div>
                        <div class="number-aprovação">
                            <h2><?php echo $usuariodao->listaCadastros() ?></h2>
                        </div>
                    </div>
                </div>
                
                
                

                <div class="aprovacao-app">
                    <div class="descricao">
                        <p>Aprovação do App</p>
                        <span>Pelas Usuarias</span>
                    </div>
                    <div class="box">
                        <div class="box-circle">
                            <svg>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                            </svg>
                        </div>
                        <div class="number-aprovação">
                            <h2>50%</h2>
                        </div>
                    </div>
                </div>
                

                <div class="elogios-app">
                    <div class="descricao">
                        <p>Elogios diários</p>
                        <span>Pelas Usuarias</span>
                    </div>
                    <div class="box">
                        <div class="box-circle">
                            <svg>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                                <circle cx="60" cy="80" r="45" fill="#1c1c1c" stroke="#a683ff" stroke-width="9"></circle>
                            </svg>
                        </div>
                        <div class="number-elogio">
                            <h2><?php ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../Components/ADMIN/menu-lateral.js"></script>
</body>
</html>

