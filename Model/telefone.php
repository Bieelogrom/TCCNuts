<?php 

class telefone {

private $idTelefone;
private $numTelefone;

public function getnumTelefone(){
    return $this->numTelefone;
}

public function setnumTelefone($numTelefone){
    $this->numTelefone = $numTelefone;
}

public function getidTelefone(){
    return $this->idTelefone;
}

public function setidTelefone($idTelefone){
    $this->idTelefone = $idTelefone;
}



}






?>