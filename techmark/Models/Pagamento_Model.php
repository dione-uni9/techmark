<?php

class PagamentoModel
{
    private $numeroCartao;
    private $nomeTitular;
    private $dataValidade;
    private $CVV;
    private $nVezesParcelamento;

    public function __construct($numeroCartao, $nomeTitular, $dataValidade, $CVV, $nVezesParcelamento) {
        $this->numeroCartao = $numeroCartao;
        $this->nomeTitular = $nomeTitular;
        $this->dataValidade = $dataValidade;
        $this->CVV = $CVV;
        $this->nVezesParcelamento = $nVezesParcelamento;
    }

    public function getNumeroCartao() {
        return $this->numeroCartao;
    }

    public function setNumeroCartao($numeroCartao) {
        $this->numeroCartao = $numeroCartao;
    }

    public function getNomeTitular() {
        return $this->nomeTitular;
    }

    public function setNomeTitular($nomeTitular) {
        $this->nomeTitular = $nomeTitular;
    }

    public function getDataValidade() {
        return $this->dataValidade;
    }

    public function setDataValidade($dataValidade) {
        $this->dataValidade = $dataValidade;
    }

    public function getCVV() {
        return $this->CVV;
    }

    public function setCVV($CVV) {
        $this->CVV = $CVV;
    }

    public function getNVezesParcelamento() {
        return $this->NVezesParcelamento;
    }

    public function setNVezesParcelamento($nVezesParcelamento) {
        $this->nVezesParcelamento = $nVezesParcelamento;
    }
}

?>