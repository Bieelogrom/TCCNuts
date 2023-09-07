<?php 
//iniciar um session


/*$usuarios_app = array(
    array('id' => 1, 'loginNome' => 'admin@teste.com.br', 'loginSenha' => '123'), 
    array('id' => 2, 'loginNome' => 'user@teste.com.br', 'loginSenha' => '12'),

);*/


  
        include_once('conexão.php');

        $nome = trim($_POST['loginNome']);
        $senha = trim($_POST['loginSenha']);

        $sql = "SELECT * FROM tbusuario WHERE nomeUsuario = '$nome' and senhaUsuario = '$senha'";

        $resultado = $conn->query($sql);
        $usuario = $resultado->fetchAll();
        $n = count($usuario);
        
        // print_r($sql);
        // print_r($result);

        if ($n == 1){
            session_start();
            $_SESSION['ID_conta'] = $usuario[0]['idUsuario'];
            $_SESSION['nomeUsuario'] = $usuario[0]['nomeUsuario'];
            $_SESSION['autenticado'] = 'SIM';
            header('Location: ../usuaria/login.php');
        }else if($nome=="admin" and $senha="123"){
            header('Location: ../admin/admin.php');
        }
        else{
            header('Location: ../usuaria/loginCadastro/index.php?login=erro');
        }
        




/*$usuario_autenticado = false;

foreach($usuarios_app as $user){
    if($user['loginNome'] == $_POST['loginNome'] && $user['loginSenha'] == $_POST['loginSenha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    //echo "Usuário autenticado";
        $_SESSION['autenticado']="SIM";

        header('Location: ../usuaria/login.php');
}else{
    //echo "Erro na autenticação do usuário";
        $_SESSION['autenticado']="NÃO";

        header('Location: ../usuaria/loginCadastro/index.php?login=erro');
}*/




?>