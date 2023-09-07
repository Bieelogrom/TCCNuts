<?php

include('../../components/ADMIN/navbar.php');
include_once "../../Dao/validador_acesso.php";
include_once('../../Dao/usuarioDAO.php');
include_once('../../Model/usuario.php');
include_once('../../Dao/conexãoDAO.php');

$usuarios = new Usuario;
$usuariodao = new usuarioDAO;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/ADMIN/style.css">
    <link rel="stylesheet" href="../../css/ADMIN/Análise.css">


    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../../css/ADMIN/ADM.css">
    <!-- Imports -->
    <!-- BoxIcons CDN links -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="home-section">
        <div class="conteudo-adm">
            <div>
                <table>
                    <thead class="Tabela_Admin">
                        <tr>
                            <th>
                                <p class="colunas">Id</p>
                            </th>
                            <th>
                                <p class="colunas">Nome</p>
                            </th>
                            <th>
                                <p class="colunas">E-Mail</p>
                            </th>
                            <th>
                                <p class="colunas">Ações</p>
                            </th>
                            </th>
                    </thead>
                    <?php
                    foreach ($usuariodao->read() as $usuario) :
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="conteudo"><?= $usuario->getIdUsuario()  ?></p>
                                </td>
                                <td>
                                    <p class="conteudo"><?= $usuario->getNomeUsuario()  ?></p>
                                </td>
                                <td>
                                    <p class="conteudo"><?= $usuario->getEmailUsuario()  ?></p>
                                </td>
                                <td class="acoes">
                                    <button class="btnSuspender" onclick="openModal(0 ,<?= $usuario->getIdUsuario() ?>, 'nomeUsuario')">Suspender</button>
                                    <!--<button class="btnBanir" onclick="openModal(1)">Banir</button>-->
                                    <button class="btnPromover" onclick="openModal(2)">Promover</button>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    endforeach
                    ?>
                </table>
            </div>
        </div>
    </section>

    <div class="modal-containerSuspender">
        <div class="modal">
            <h2>Suspender</h2>
            <hr />
            <form action="../../Controller/usuarioController.php" method="post">
                <span>
                    <input type="hidden" id="nomeUsuario" name="idusuario">
                    <p>Por quanto tempo você deseja suspender o usuário?</p>
                    <select name="tempoSuspensao" id="tempoSuspensao">
                        <option value="1">1 minuto</option>
                        <option value="2">2 minutos</option>
                        <option value="3">3 minutos</option>
                    </select>

                </span>
                <hr />
                <div class="btns">
                    <button class="btnOK" type="submit" name="del">Suspender</button>
                    <button class="btnClose" type="button" onclick="closeModal(0)">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal-containerBanir" id="BanirUser">
        <div class="modal">
            <h2>Banir</h2>
            <hr />
            <span>
                <form action="../../Controller/usuarioController.php" method="post">
                    <input type="text" id="nomeUsuario" name="idusuario">
                    <p>Por quanto tempo você deseja banir o usuário?</p>
                    <select name="tempoSuspensao" id="tempoSuspensao">
                        <option value="">1 dia</option>
                        <option value="">7 dias</option>
                        <option value="">30 dias</option>
                    </select>

                </form>
            </span>
            <hr />
            <div class="btns">
                <button class="btnOK" onclick="closeModal(1)">OK</button>
                <button class="btnClose" onclick="closeModal(1)">Cancelar</button>
            </div>
        </div>
    </div>


    <div class="modal-containerPromover">
        <div class="modal">
            <h2>Promover</h2>
            <hr />

            <hr />
            <div class="btns">
                <button class="btnOK" onclick="closeModal(2)">OK</button>
                <button class="btnClose" onclick="closeModal(2)">Cancelar</button>
            </div>
        </div>
    </div>

    <script>
        const modalSuspender = document.querySelector('.modal-containerSuspender')
        const modalBanir = document.querySelector('.modal-containerBanir')
        const modalPromover = document.querySelector('.modal-containerPromover')

        const opcaoModal = [modalSuspender, modalBanir, modalPromover]

        function openModal(a, $id, $elemento) {
            opcaoModal[a].classList.add('active')
            document.getElementById($elemento).value = $id


        }


        function closeModal(b) {
            opcaoModal[b].classList.remove('active')
        }
    </script>
    <script src="../../js/ADMIN/menu-lateral.js"></script>
</body>

</html>