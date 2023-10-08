<?php 



class Usuario{
    protected $idUsuario;
    protected $nomeUsuario;
    protected $apelidoUsuario;
    protected $emailUsuario;
    protected $telefoneUsuario;
    protected $senhaUsuario;
    protected $nascUsuario;
    protected $fotoUsuario;
    protected $capaUsuario;
    protected $statusConta;
    protected $nivelConta;
    protected $tipoConta;




    


	/**
	 * @return mixed
	 */
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	
	/**
	 * @param mixed $idUsuario 
	 * @return self
	 */
	public function setIdUsuario($idUsuario): self {
		$this->idUsuario = $idUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	
	/**
	 * @param mixed $nomeUsuario 
	 * @return self
	 */
	public function setNomeUsuario($nomeUsuario): self {
		$this->nomeUsuario = $nomeUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getApelidoUsuario() {
		return $this->apelidoUsuario;
	}
	
	/**
	 * @param mixed $apelidoUsuario 
	 * @return self
	 */
	public function setApelidoUsuario($apelidoUsuario): self {
		$this->apelidoUsuario = $apelidoUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getEmailUsuario() {
		return $this->emailUsuario;
	}
	
	/**
	 * @param mixed $emailUsuario 
	 * @return self
	 */
	public function setEmailUsuario($emailUsuario): self {
		$this->emailUsuario = $emailUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTelefoneUsuario() {
		return $this->telefoneUsuario;
	}
	
	/**
	 * @param mixed $telefoneUsuario 
	 * @return self
	 */
	public function setTelefoneUsuario($telefoneUsuario): self {
		$this->telefoneUsuario = $telefoneUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSenhaUsuario() {
		return $this->senhaUsuario;
	}
	
	/**
	 * @param mixed $senhaUsuario 
	 * @return self
	 */
	public function setSenhaUsuario($senhaUsuario): self {
		$this->senhaUsuario = $senhaUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNascUsuario() {
		return $this->nascUsuario;
	}
	
	/**
	 * @param mixed $nascUsuario 
	 * @return self
	 */
	public function setNascUsuario($nascUsuario): self {
		$this->nascUsuario = $nascUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getFotoUsuario() {
		return $this->fotoUsuario;
	}
	
	/**
	 * @param mixed $fotoUsuario 
	 * @return self
	 */
	public function setFotoUsuario($fotoUsuario): self {
		$this->fotoUsuario = $fotoUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCapaUsuario() {
		return $this->capaUsuario;
	}
	
	/**
	 * @param mixed $capaUsuario 
	 * @return self
	 */
	public function setCapaUsuario($capaUsuario): self {
		$this->capaUsuario = $capaUsuario;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getStatusConta() {
		return $this->statusConta;
	}
	
	/**
	 * @param mixed $statusConta 
	 * @return self
	 */
	public function setStatusConta($statusConta): self {
		$this->statusConta = $statusConta;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getNivelConta() {
		return $this->nivelConta;
	}
	
	/**
	 * @param mixed $nivelConta 
	 * @return self
	 */
	public function setNivelConta($nivelConta): self {
		$this->nivelConta = $nivelConta;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTipoConta() {
		return $this->tipoConta;
	}
	
	/**
	 * @param mixed $tipoConta 
	 * @return self
	 */
	public function setTipoConta($tipoConta): self {
		$this->tipoConta = $tipoConta;
		return $this;
	}
}
?>