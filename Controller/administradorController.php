<?php 

include_once "../Dao/conexãoDAO.php";
include_once "../Model/administrador.php";
include_once "../Model/usuario.php";

$Administrador = new Administrador();




$d = filter_input_array(INPUT_POST);

if(isset($_POST['login'])){
    $email = $_POST['emailadmin'];
    $senha = $_POST['senhaadmin'];

    try{
        $adm = "SELECT * FROM tbadmin WHERE emailAdmin = '$email' and senhaAdmin = '$senha'";


        $resultado = conexao::getConexao()->query($adm);
        $logadoADM = $resultado->fetchAll();
        $a = count($logadoADM);


        //echo $a;



        if ($a == 1){
            session_start();
            $_SESSION['idAdmin'] = $logadoADM[0]['idAdmin'];
            $_SESSION['nomeAdmin'] = $logadoADM[0]['nomeAdmin'];
            $_SESSION['Adminautenticado'] = 'SIM';
        
            header('Location: ../Views/admin/home.php');
            

        }else{
            header('Location: ../index.php?login=erro');
        }
    }catch(PDOException $e){
        echo "ERRO: " . $e->getMessage();
    }
}








?>