<?php

class BuscaModel
{
    public $produtoBusca;

    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr,$value){
        return $this->$attr = $value;
    }
}

?>