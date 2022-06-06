<?php

class ProdutoModel
{
    private $id;
    private $nome;
    private $preco;
    private $urlImagem;
    private $categoria;

    public function __construct($nome, $preco, $urlImagem, $categoria){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->urlImagem = $urlImagem;
        $this->categoria = $categoria;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getUrlImagem() {
        return $this->urlImagem;
    }

    public function setUrlImagem($urlImagem) {
        $this->urlImagem = $urlImagem;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public static function getProdutos() 
    {
        return ProdutoService::getProdutos();
    }
}

?>