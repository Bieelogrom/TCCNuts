<?php 


class usuarioDAO{

    public function create(Usuario $usuario){
    try {

        $sql = "INSERT INTO tbusuario (nomeUsuario, emailUsuario, dataNascUsuario, senhaUsuario) VALUES (:nome, :email, :dataNasc, :senha); ";
        $sqlT = "INSERT INTO tbtelefone (numTelefone, idUsuario) VALUES (:phone, LAST_INSERT_ID()); ";

        $query = conexao::getConexao()->prepare($sql);
        $query->bindValue(':nome', $usuario->getNomeUsuario());
        $query->bindValue(':email', $usuario->getEmailUsuario());
        $query->bindValue(':dataNasc', $usuario->getDataNascimentoUsuario());
        $query->bindValue(':senha', $usuario->getSenhaUsuario());



        $queryT = conexao::getConexao()->prepare($sqlT);
        $queryT->bindValue(':phone', $usuario->getTelefoneUsuario());

        
        $query->execute();
        $queryT->execute();

        
    }catch(PDOException $e){
        echo "Erro na inserção: " . $e->getMessage();
    }}

    public function read(){
        try{
            $sql = "SELECT * FROM tbusuario";
            $query = conexao::getConexao()->query($sql);
            $lista = $query->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $I) {
                $f_lista[] = $this->listaUsuarios($I);
            }
            
            return $f_lista;
        }catch(PDOException $e){
            echo "Erro na busca: " . $e->getMessage();
        }

    }

    public function update(Usuario $usuario){


        try{

         $nome = $_SESSION['nomeUsuario'];
            $id = $_SESSION['ID_conta'];

            $sql = "UPDATE tbusuario set nomeUsuario = :nome WHERE idUsuario = :id";

         $updateSql = conexao::getConexao()->prepare($sql);
            $updateSql->bindValue(':nome', $nome);
            $updateSql->bindValue(':id', $id);
            return $updateSql->execute();

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function listaCadastros(){

        try{
            $querySelect = "SELECT * FROM tbUsuario";
            $resultado = conexao::getConexao()->query($querySelect);
            $cadastros = $resultado->fetchAll();
            $qntd = count($cadastros);
            return $qntd;

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function informacoesAdicionais(Usuario $usuario) {
        try{

            $id = $_SESSION['ID_conta'];
            $foto = $usuario->getFotoDePerfil();


            $sql = "UPDATE tbusuario set fotoUsuario = :foto WHERE idUsuario = :id";
            $stmt = conexao::getConexao()->prepare($sql);
            $stmt ->bindParam(':foto', $foto);
            $stmt ->bindParam(':id', $id);



            if($stmt->execute()){
                header(" ../Views/siteSerMae/home.php");

            }else{
                echo "Erro ao salvar foto de perfil.";
            }




        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function listaUsuarios($row){
        $usuario = new Usuario();
        $usuario->setIdUsuario($row['idUsuario']);   
        $usuario->setNomeUsuario($row['nomeUsuario']);   
        $usuario->setEmailUsuario($row['emailUsuario']);
        //$usuario->setTelefoneUsuario($row['telefoneUsuario']);
        //$usuario->setDataNascimentoUsuario($row['dataNascimentoUsuario']);   
        $usuario->setSenhaUsuario($row['senhaUsuario']);
    
        return $usuario;
    
    }
}
