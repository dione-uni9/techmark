<?php
/*
Controller para a "products.php"

POST SQL Query (Adicionar ao carrinho) INSERT produto no carrinho OR
 IF produto já esta no carrinho, qtdProduto ++  

GET SQL Query SELECT por categoria
*/
require_once "../Models/conexao.php";
require_once "../Models/PedidoItem_Model.php";
require_once "../Models/PedidoItem_Service.php";
class ProdutosController
{

  public static function listarProdutos() {
    $produtoService = new ProdutoService();

    $produtos = $produtoService -> getProdutos();
    return $produtos;
  }

  public static function listarProdutosByCategoria($categoria) {
    $produtoService = new ProdutoService();

    $produtos = $produtoService -> getProdutosByCategoria($categoria);
    return $produtos;
  }

  
}

?>