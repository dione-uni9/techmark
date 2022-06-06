<?php

class ProdutoService 
{
  public function create($produto) {
    $nome = $produto->getNome();
    $preco = $produto->getPreco();
    $urlImagem = $produto->getUrlImagem();
    $categoriaId = $produto->getCategoria();

    try {
      $conexao = Conexao::conectar();
      $sql = "INSERT INTO produtos(nomeProduto, precoProduto, urlimagemProduto, idCategoriaProduto) 
              VALUES (:nome, :preco, :urlImagem, :categoria)";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":nome", $nome);
      $stmt -> bindParam(":preco", $preco);
      $stmt -> bindParam(":urlImagem", $urlImagem);
      $stmt -> bindParam(":categoria", $categoriaId);

      $stmt -> execute();

      $id = $conexao -> lastInsertId();
      $produto->setId($id);

      return $produto;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function delete($produto) {
    $id = $produto->getId();

    try {
      $conexao = Conexao::conectar();
      $sql = "DELETE FROM produtos WHERE idProduto = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();

      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function update($produto) {
    $id = $produto->getId();
    $nome = $produto->getNome();
    $preco = $produto->getPreco();
    $urlImagem = $produto->getUrlImagem();
    $categoriaId = $produto->getCategoria();

    try {
      $conexao = Conexao::conectar();
      $sql = "UPDATE produtos SET nomeProduto=:nome, precoProduto=:preco, urlimagemProduto=:urlImagem, CategoriaProduto=:categoria WHERE idProduto = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":nome", $nome);
      $stmt -> bindParam(":preco", $preco);
      $stmt -> bindParam(":urlImagem", $urlImagem);
      $stmt -> bindParam(":categoria", $categoriaId);

      $stmt -> execute();

      return $produto;
    } catch (PDOException $e) {
      return null;
    }
  }

  public static function getProdutos() {
    try {
      $conexao = Conexao::conectar();
      $sql = $conexao->prepare("SELECT * FROM supermercadoweb.produtos");

      $sql -> execute();
      $sql->setFetchMode(PDO::FETCH_ASSOC);

      $produtos = array();
      $i = 0;

      while ($data = $sql -> fetch(PDO::FETCH_ASSOC)) {
        $currentProduto = new ProdutoModel($data['nomeProduto'], $data['precoProduto'], $data['urlimagemProduto'], $data['CategoriaProduto']);
        $currentProduto->setId($data['idProduto']);

        $produtos[$i] = $currentProduto;
        $i++;
        //array_push($produtos, $currentProduto);
      }
      
      return $produtos;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function getProdutosByCategoria($categoria) {
    try {
      $conexao = Conexao::conectar();
      $sql = "SELECT * FROM produtos WHERE CategoriaProduto = :categoria";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":categoria", $categoria);

      $stmt -> execute();

      $produtos = array();

      while ($data = $stmt -> fetch()) {
        $currentProduto = new ProdutoModel($data["nomeProduto"], $data["precoProduto"], $data["urlimagemProduto"], $data["CategoriaProduto"]);
        $currentProduto->setId($data["idProduto"]);

        array_push($produtos, $currentProduto);
      }
      
      return $produtos;
    } catch (PDOException $e) {
      return null;
    }
  }  

  public function getProduto($produto) {
    $id = $produto->getId();

    try {
      $conexao = Conexao::conectar();
      $sql = "SELECT * FROM produtos WHERE idProduto = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();
    
      $data = $stmt -> fetch();

      $produto = new ProdutoModel($data["nomeProduto"], $data["precoProduto"], $data["urlimagemProduto"], $data["CategoriaProduto"]);
      $produto->setId($data["idProduto"]);

      return $produto;
    } catch (PDOException $e) {
      return null;
    }
  }
}