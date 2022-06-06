<?php
/*
GET (Finalizar Compra) Return view (endereco.php) para salvar o endereco de entrega passando idPedido como referencia 
 */
//session_start();

//require_once "../Models/Pedido_Service.php";
class PedidoController
{
  // Criar pedido
  // Vai verificar se já existe um carrinho em aberto,
  // caso não tenha, vai criar um
  public static function createIfNotExists($idCliente) {

    $pedidoService = new PedidoService();
    $pedido = $pedidoService -> getLastUserPedido($idCliente);

    if(($pedido != null) && ($pedido -> getStatus() != "Aberto")) {
      $pedido = $pedidoService -> create(new PedidoModel($idCliente, "Aberto"));
    }

    return $pedido;
  }

  // Excluir Pedido
  public static function deleteWhenEmpty($pedido) {
    $pedidoService = new PedidoService();
    $pedidoItemService = new PedidoItemService();

    $pedidos = $pedidoItemService -> getPedidosItemByIdPedido($pedido);

    if (count($pedidos) == 0) {
      $pedidoService -> delete($pedido);
    }
  }

  public static function getPedidosByUser($idCliente) {
    $idCliente = $_SESSION["idCliente"];
    $pedidoService = new PedidoService();
    $data = $pedidoService -> getPedidosByUser($idCliente);

    $openPedidos = array();
    $otherPedidos = array();
    
    foreach ($data as $pedido) {
      if ($pedido -> getStatus() != "Entregue") {
        array_push($openPedidos, $pedido);
      } else {
        array_push($otherPedidos, $pedido);
      }
    }

    $pedidos= array('open' => $openPedidos, 'history' => $otherPedidos );
    
    return $pedidos;
    
  }

  public static function getPedidos() {
    $pedidoService = new PedidoService();
    $allPedidos = $pedidoService->getPedidos();

    $activePedidos = array();

    foreach ($allPedidos as $pedido) {
      if ($pedido->getStatus() != "Entregue" && $pedido->getStatus() != "Aberto") {
        array_push($activePedidos, $pedido);
      }
    }


    return array('all' => $allPedidos, 'active' => $activePedidos);
  }

  public static function changeStatus($idPedido, $status) {
    $pedidoService = new PedidoService();

    return $pedidoService -> changeStatus($idPedido, $status);
  }


  // Mudar status
  // Muda para o status passado
  // Aberto,  Saiu para entrega, Entregue

  // Listar pedidos
  // Listagem de pedidos baseado no id do usuário

  // Listar todos os pedidos
  // Listagem de todos os pedidos que ainda não chegaram
  // no status final e que não estão em aberto

  // Listar todos os pedidos
  // Listar todos os pedidos existentes
}

?>