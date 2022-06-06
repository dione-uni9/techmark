<?php
/*
Controller referente a pedidos-clientes.php

GET Return View(avaliacao.php) quando "Avaliar" é pressionado

POST (Refazer Pedido) duplicar pedido alterando id do carrinho e do pedido para um novo 
Return view (cart.php) com pedido refeito

GET (Detalhe) return View (DetalhePedido.php) exibindo itens do pedido de acordo com o idPedido
*/


class PedidosItemController
{
  // Adicionar item
  // Adiciona um novo item ao pedido de id informado
  public static function addItem($pedidoItem) {
    $pedidoItemService = new PedidoItemService();

    $pedidoItemExists = $pedidoItemService->getPedidosItemByIdPedidoAndIdIProduto($pedidoItem);

    if($pedidoItemExists->getId() != null) {
      $pedidoItemExists -> setQuantidade(($pedidoItemExists -> getQuantidade()) + 1);
      
      $pedidoItem = $pedidoItemService -> update($pedidoItemExists);
    } else {
      $pedidoItem = $pedidoItemService -> create($pedidoItem);
    }
    
    return $pedidoItem;
  }

  // Remover item
  // Remove um item do pedido
  public static function removeItem($pedidoItem) {
    $pedidoItemService = new PedidoItemService();
    $pedidoItemService -> delete($pedidoItem);
  }

  // Atualizar item
  // Atualiza a quantidade do produto
  public static function updateQuantity($pedidoItem)
  {
    $pedidoItemService = new PedidoItemService();
    $pedidoItemService->updateQuantity($pedidoItem);
  }

  // Listar
  // Lista o item do carrinho
  // Fazer o JOIN com tabela de produtos
  public static function listPedidoItems($pedido) {
    $pedidoItemService = new PedidoItemService();
    $pedidoItems = $pedidoItemService -> getPedidosItemByIdPedido($pedido);

    return $pedidoItems;
  }
}


?>