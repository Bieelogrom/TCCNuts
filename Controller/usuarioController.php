<?php

include_once "../Dao/conexãoDAO.php";
include_once "../Model/usuario.php";
include_once "../Dao/usuarioDAO.php";

$usuario = new Usuario();
$usuariodao = new usuarioDAO();

$d = filter_input_array(INPUT_POST);

if (isset($_POST['registrar'])) {

    $usuario->setNomeUsuario($d['nome'] . ' ' . $d['sobrenome']);
    $usuario->setTelefoneUsuario($d['phone']);
    $usuario->setEmailUsuario($d['email']);
    $usuario->setDataNascimentoUsuario($d['dataNasc']);

    if ($d['password'] == $d['confirmPassword']) {
        $usuario->setSenhaUsuario($d['password']);

        session_start();

        $_SESSION['nomeUsuario'] = $usuario->getNomeUsuario();
        $_SESSION['Usuarioautenticado'] = 'SIM';

        header('Location: ../Views/siteSerMae/adicionarFoto.php');

        $usuariodao->create($usuario);
    } else {
        header('Location: /index.php?login=erro');
        exit();
    }
} else if (isset($_POST['login'])) {

    $email = filter_input(INPUT_POST, 'loginEmail', FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST['loginSenha']);


    try {
        $sql = "SELECT * FROM tbusuario WHERE emailUsuario = '$email' and senhaUsuario = '$senha'";

        $resultado = conexao::getConexao()->query($sql);
        $logado = $resultado->fetchAll();
        $n = count($logado);



        if ($n == 1) {
            session_start();
            $_SESSION['ID_conta'] = $logado[0]['idUsuario'];
            $_SESSION['nomeUsuario'] = $logado[0]['nomeUsuario'];
            $_SESSION['Usuarioautenticado'] = 'SIM';


            header('Location: ../Views/siteSerMae/home.php');
        } else {
            header('Location: ../index.php?login=erro');
        }
    } catch (PDOException $e) {
        echo "ERRO: " . $e->getMessage();
    }
} else if (isset($_POST['atualizar'])) {

    try {
        session_start();

        $idUsuario = $_SESSION['ID_conta'];
        $nomeUsuario = $_SESSION['nomeUsuario'];

        $usuario->setNomeUsuario($nomeUsuario);
        $usuario->setIdUsuario($idUsuario);

        $usuariodao->update($usuario);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else if (isset($_POST['del'])) {

    $id = trim($_POST['idusuario']);

    try {
        $sqlT = "DELETE FROM tbtelefone WHERE idUsuario = :idUsuario; DELETE FROM tbusuario WHERE idUsuario = :idUsuario";

        $t_sql = conexao::getConexao()->prepare($sqlT);
        $t_sql->bindValue("idUsuario", $id);

        // $sql = "DELETE FROM tbusuario WHERE idUsuario = :idUsuario";

        //$p_sql = conexao::getConexao()->prepare($sql);
        //$p_sql->bindValue("idUsuario", $id);




        header('Location: ../Views/admin/home.php');

        $t_sql->execute();
    } catch (Exception $e) {
        echo "Erro ao Excluir usuario<br> $e <br>";
    }
} else if (isset($_POST['atualizaPerfil'])) {
    session_start();

    $nome = $_SESSION['nomeUsuario'];

    $sql = "SELECT idUsuario FROM tbusuario WHERE nomeUsuario = '$nome'";
    $resultado = conexao::getConexao()->query($sql);
    $logado = $resultado->fetchAll();
    $id = $logado[0]['idUsuario'];

    $_SESSION['ID_conta'] = $id;
    
     if (isset($_FILES["fotoUsuario"]) && $_FILES["fotoUsuario"]["error"] == 0) {

        $diretoriodasfotos = "../img/Perfis/";

        $nomeDaFoto = uniqid() . "" . $_FILES["fotoUsuario"]["name"];

        if (move_uploaded_file($_FILES["fotoUsuario"]["tmp_name"], $diretoriodasfotos . $nomeDaFoto)) {

            $caminho_arquivo = $diretoriodasfotos . $nomeDaFoto;

            $usuario->setfotoDePerfil($nomeDaFoto);

            $_SESSION['fotoUsuario'] = $usuario->getFotoDePerfil();

            header("Location: ../Views/siteSerMae/home.php");

            $usuariodao->informacoesAdicionais($usuario);
        }
    } 
}
