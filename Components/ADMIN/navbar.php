<?php 
    include('../../Dao/validador_acesso.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Menu Lateral -->
    <div class="sidebar open">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo-name">serMãe</span>
        </div>
        

        <ul class="nav-links">
            <li>
                <a href="../../Views/ADMIN/home.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-envelope'></i>
                    <span class="link-name">Mensagens</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bxs-report'></i>
                    <span class="link-name">Denuncias</span>
                </a>
            </li>

            <li>
                <a href="../../Views/admin/analise.php">
                    <i class='bx bxs-bar-chart-alt-2'></i>
                    <span class="link-name">Analises</span>
                </a>
            </li>

            <li>
                <a href="../../Views/admin/cadastrar-adm.php">
                    <i class='bx bxs-user-plus'></i>
                    <span class="link-name">Cadastrar ADM</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Configurações</span>
                </a>
            </li>
        

        <li>
        <div class="profile-details">
            <div class="profile-content">
                <img src="../../img/ADMIN/perfil.png" alt="Foto ADM">
            </div>
            <div class="name-job">
                <div class="profile-name"><?php echo $_SESSION['nomeAdmin']; ?></div>
                <div class="job">ADM</div>
            </div>
            <a href="../../Dao/logoff.php">
            <i class='bx bx-log-out'></i>
            </a>
        </div>
        </li>
    </ul>
    </div>

    <script src="./menu-lateral.js"></script>
</body>
</html>