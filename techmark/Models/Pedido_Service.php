<?php
require_once 'Pedido_Model.php';
require_once 'conexao.php';
class PedidoService 
{
  public function create($pedido) {
    $userId = $pedido->getUserId();
    $status = $pedido->getStatus();
    $dataDaCompra = $pedido->getDataDaCompra();
    $pedidoAvaliado = $pedido->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "INSERT INTO pedidos(userId, status, dataDaCompra, pedidoAvaliado) VALUES (:userId, :status, :dataDaCompra, :pedidoAvaliado)";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":userId", $userId);
      $stmt -> bindParam(":status", $status);
      $stmt -> bindParam(":dataDaCompra", $dataDaCompra);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();

      $id = $conexao -> lastInsertId();
      $pedido->setId($id);
    
      return $pedido;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function delete($pedido) {
    $id = $pedido->getId();

    try {
      $conexao =Conexao::conectar();
      $sql = "DELETE FROM pedidos WHERE idPedido = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();
    
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }

  public function update($pedido) {
    $id = $pedido->getId();
    $userId = $pedido->getUserId();
    $status = $pedido->getStatus();
    $dataDaCompra = $pedido->getDataDaCompra();
    $pedidoAvaliado = $pedido->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "UPDATE pedidos SET userId=:userId, status=:status, dataDaCompra=:dataDaCompra, pedidoAvaliado=:pedidoAvaliado WHERE idPedido = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":userId", $userId);
      $stmt -> bindParam(":status", $status);
      $stmt -> bindParam(":dataDaCompra", $dataDaCompra);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();
    
      return $pedido;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getPedidos() {
    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM pedidos";
      $stmt = $conexao -> prepare($sql);

      $stmt -> execute();
      
      $pedidos = array();

      while ($data = $stmt->fetch()) {
        $pedido = new PedidoModel($data["userId"], $data["status"]);
        $pedido->setId($data["userId"]);
        $pedido->setDataDaCompra($data["dataDaCompra"]);
        $pedido->setPedidoAvaliado($data["pedidoAvaliado"]);

        array_push($pedidos, $pedido);
      }

      return $pedidos;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getPedidosByPedidoId($pedido) {
    $id = $pedido->getId();

    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM pedidos WHERE idPedido = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);

      $stmt -> execute();

      $data = $stmt->fetch();

      $pedido = new PedidoModel($data["userId"], $data["status"]);
      $pedido -> setId($data["userId"]);
      $pedido -> setDataDaCompra($data["dataDaCompra"]);
      $pedido -> setPedidoAvaliado($data["pedidoAvaliado"]);
    
      return $pedido;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getPedidosByUser($idCliente) {
    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM pedidos WHERE userId = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $idCliente);

      $stmt -> execute();

      $pedidos = array();

      while ($data = $stmt->fetch()) {        
        $pedido = new PedidoModel($data["userId"], $data["status"]);
        $pedido->setId($data["idPedido"]);
        $pedido->setDataDaCompra($data["dataDaCompra"]);
        $pedido->setPedidoAvaliado($data["pedidoAvaliado"]);

        array_push($pedidos, $pedido);
      }
    
      return $pedidos;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function getLastUserPedido($idCliente) {
    try {
      $conexao =Conexao::conectar();
      $sql = "SELECT * FROM pedidos WHERE userId = :id ORDER BY dataDaCompra DESC LIMIT 1";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $idCliente);

      $stmt -> execute();

      $data = $stmt->fetch();

      $pedido = new PedidoModel($data["userId"], $data["status"]);
      $pedido -> setId($data["idPedido"]);
      $pedido -> setDataDaCompra($data["dataDaCompra"]);
      $pedido -> setPedidoAvaliado($data["pedidoAvaliado"]);
      
      return $pedido;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function avaliar($pedido) {
    $id = $pedido->getId();
    $pedidoAvaliado = $pedido->getPedidoAvaliado();

    try {
      $conexao =Conexao::conectar();
      $sql = "UPDATE pedidos SET pedidoAvaliado=:pedidoAvaliado WHERE idPedido = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":pedidoAvaliado", $pedidoAvaliado);

      $stmt -> execute();
    
      $data = $this->getPedidosByPedidoId($pedido);

      return $data;
    } catch (PDOException $e) {
      return null;
    }
  }

  public function changeStatus($id, $status) {

    try {
      $conexao =Conexao::conectar();
      $sql = "UPDATE pedidos SET status=:status WHERE idPedido = :id";
      $stmt = $conexao -> prepare($sql);
      $stmt -> bindParam(":id", $id);
      $stmt -> bindParam(":status", $status);

      $stmt -> execute();
    
      return true;
    } catch (PDOException $e) {
      return false;
    }
  }
}