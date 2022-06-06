<?php

class EnderecoModel
{
    //parametros de endereco: Nome, Sobrenome, CPF, Telefone, 
    //Endereco, Cidade, Estado, CEP, Bairro, Número, Complemento

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr,$value){
        return $this->$attr = $value;
    }
}

?>