<?php

class FuncionarioModel
{
    private $idFuncionario;
    private $nomeFuncionario;
    private $emailFuncionario;
    private $senhaFuncionario;
    private $gerenteFuncionario; //Booleano para dizer se o funcionário é o gerente
    private $setorFuncionario;

    public function __construct($idFuncionario, $nomeFuncionario,$emailFuncionario, $senhaFuncionario, $gerenteFuncionario, $setorFuncionario){
        $this->idFuncionario = $idFuncionario;
        $this->nomeFuncionario = $nomeFuncionario;
        $this->emailFuncionario = $emailFuncionario;
        $this->senhaFuncionario = $senhaFuncionario;
        $this->gerenteFuncionario = $gerenteFuncionario;
        $this->setorFuncionario = $setorFuncionario;


    }

    public function getIdFuncionario(){
        return $this->idFuncionario;
    }

    public function setIdFuncionario($idFuncionario){
        return $this->idFuncionario = $idFuncionario;
    }

    public function getNomeFuncionario(){
        return $this->nomeFuncionario;
    }

    public function setNomeFuncionario($nomeFuncionario){
        return $this->nomeFuncionario = $nomeFuncionario;
    }
    
    public function getEmailFuncionario(){
        return $this->emailFuncionario;
    }
    
    public function setEmailFuncionario($emailFuncionario){
        return $this->emailFuncionario = $emailFuncionario;
    }
    
    public function getSenhaFuncionario(){
        return $this->senhaFuncionario;
    }
    
    public function setSenhaFuncionario($senhaFuncionario){
        return $this->senhaFuncionario = $senhaFuncionario;
    }

    public function getGerenteFuncionario(){
        return $this->gerenteFuncionario;
    }
    
    public function setGerenteFuncionario($gerenteFuncionario){
        return $this->gerenteFuncionario = $gerenteFuncionario;
    }
    
    public function getSetorFuncionario(){
        return $this->setorFuncionario;
    }

    public function setSetorFuncionario($setorFuncionario){
        return $this->setorFuncionario = $setorFuncionario;
    }
    

}

?>