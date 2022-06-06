<?php
class CarrinhoService 
{
  public function create($carrinho) {
    $userId = $carrinho->getUserId();
    $status = $carrinho->getStatus();
    $dataDaCompra = $carrinho->getDataDaCompra();
    $pedidoAvaliado = $carrinho->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "INSERT INTO carrinhos(userId, status, dataDaCompra, pedidoAvaliado) VALUES (:userId, :status, :dataDaCompra, :pedidoAvaliado)";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":userId", $userId);
      $stmt -> bindParam(":status", $status);
      $stmt -> bindParam(":dataDaCompra", $dataDaCompra);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();

      $id = $conexao -> lastInsertId();
      $carrinho->setId($id);
    
      return $carrinho;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function delete($carrinho) {
    $id = $carrinho->getId();

    try {
      $conexao =Conexao::conectar();
      $sql = "DELETE FROM carrinhos WHERE idCarrinho = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();
    
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function update($carrinho) {
    $id = $carrinho->getId();
    $userId = $carrinho->getUserId();
    $status = $carrinho->getStatus();
    $dataDaCompra = $carrinho->getDataDaCompra();
    $pedidoAvaliado = $carrinho->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "UPDATE carrinhos SET userId=:userId, status=:status, dataDaCompra=:dataDaCompra, pedidoAvaliado=:pedidoAvaliado WHERE idCarrinho = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":userId", $userId);
      $stmt -> bindParam(":status", $status);
      $stmt -> bindParam(":dataDaCompra", $dataDaCompra);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();
    
      return $carrinho;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getCarrinhos() {
    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM carrinhos";
      $stmt = $conexao -> prepare($sql);

      $stmt -> execute();
    
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getCarrinhosByUser($cliente) {
    $userId = $cliente->getId();

    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM carrinhos WHERE userId = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();
    
      return $stmt->fetchAll();
    } catch (PDOException $e) {
      return null;
    }
  }

  public function avaliar($carrinho) {
    $id = $carrinho->getId();
    $pedidoAvaliado = $carrinho->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "UPDATE carrinhos SET pedidoAvaliado=:pedidoAvaliado WHERE idCarrinho = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();
    
      return $carrinho;
    } catch (PDOException $e) {
      return null;
    }
  }
}