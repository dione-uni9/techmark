<?php

class PedidoItemModel
{
    private $id;
    private $idProduto;
    private $preco;
    private $quantidade;
    private $idPedido;

    public function __construct($idProduto, $preco, $quantidade, $idPedido) {
        $this->idProduto = $idProduto;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->idPedido = $idPedido;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }
    
    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getIdPedido() {
        return $this->idPedido;
    }

    public function setIdPedido($idPedido) {
        $this->idPedido = $idPedido;
    }

}

?>