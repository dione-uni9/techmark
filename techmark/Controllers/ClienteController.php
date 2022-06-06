<?php
/*
GET (Finalizar Compra) Return view (endereco.php) para salvar o endereco de entrega passando idPedido como referencia 
 */
class ClienteController
{
  // Criar pedido
  // Vai verificar se já existe um carrinho em aberto,
  // caso não tenha, vai criar um
  public static function createIfNotExists($idCliente) {
    // $userId = $_SESSION["userId"];

    $idCliente = $_SESSION['idCliente'];

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

  public static function getPedidosByUser() {
    // $userId = $_SESSION["userId"];
    $userId = 3;
    
    $pedidoService = new PedidoService();
    $data = $pedidoService -> getPedidosByUser($userId);

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

  public static function getCliente($email)
  {
    $user = ClienteService::getCliente($email);
    return $user;
  }

  public static function getNomeCliente($email)
  {
    $user = ClienteService::getNomeCliente($email);
    return $user;
  }

  public static function getIdCliente($email)
  {
    $user = ClienteService::getIdCliente($email);
    return $user;
  }

  public static function getClientes() {
    $clienteService = new ClienteService();
    $allClientes = $clienteService->getClientes();

    return $allClientes;
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