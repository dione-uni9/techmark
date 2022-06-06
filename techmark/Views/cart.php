<?php
if(!isset($_SESSION)){
session_start();
}
require_once "../Models/conexao.php";

require_once "../Models/Pedido_Model.php";
require_once "../Models/Pedido_Service.php";
require_once "../Controllers/PedidoController.php";

require_once "../Models/PedidoItem_Model.php";
require_once "../Models/PedidoItem_Service.php";
require_once "../Controllers/PedidosItemController.php";
$idCliente=$_SESSION['idCliente'];
$pedido = PedidoController::createIfNotExists($idCliente);
$idPedido = $pedido->getId();
$_SESSION['idPedido'] = $idPedido;
// Precisa armazenar id na session

$pedidoItems = PedidosItemController::listPedidoItems($pedido);

if ($_POST) {
  if ($_POST["acao"] == "addItem") {
    $preco = $_POST["preco"];
    $idProduto = $_POST["idProduto"];

    $pedidoItem = new PedidoItemModel($idProduto, $preco, 1, $idPedido);

    PedidosItemController::addItem($pedidoItem);
  } else if ($_POST["acao"] == "removeItem") {
    $pedidoItem = $pedidoItems[$_POST["itemIndex"]];

    $idPedidoItem = $pedidoItem["idPedidoItem"];
    $idProduto = $pedidoItem["idProduto"];
    $preco = $pedidoItem["precoPedido"];
    $quantidade = $pedidoItem["quantidadePedido"];

    $pedidoItem = new PedidoItemModel($idProduto, $preco, $quantidade, $idPedido);
    $pedidoItem -> setId($idPedidoItem);

    PedidosItemController::removeItem($pedidoItem);
    PedidoController::deleteWhenEmpty($pedido);
  } else if ($_POST["acao"] == "changeQuantity") {
    $idPedidoItem = $_POST["idPedidoItem"];
    $quantidade = $_POST["quantity"];

    $pedidoItem = new PedidoItemModel('', '', $quantidade, '');
    $pedidoItem -> setId($idPedidoItem);
    
    PedidosItemController::updateQuantity($pedidoItem);
  }

  header("Refresh:0");
}


// print "<pre>";
// print_r($pedidoItems);
// print "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TechMark - Meu carrinho</title>
  <link rel="icon" href="../Assets/image/opencart-brands.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Assets/css/my-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<header>
  <nav class="navbar navnbar-expan-sm">
    <div class="container">
      <a href="index.php" class="logo">
        <h3 style="color: aliceblue;"><i style="margin-right: 2px;" class="fab fa-opencart"></i>TechMark</h3>
      </a>
    </div>
  </nav>
</header>
<div class="heading-cart">
  <h5 style="text-align: center;">Meu Carinho:</h5>
  <p class="heading-cart-text">Confira os itens adicionados</p>
  <hr>
</div>

<body>
  <main class="page">
    <section class="shopping-cart dark">
      <div class="container">
        <!-- SQL Query SELECT produtosNoCarrinho WHERE """Carrinho pertence a Cliente""" simulação -->
        <div class="content">
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="items">

                <?php foreach ($pedidoItems as $index => $pedidoItem) {
                  $preco = number_format($pedidoItem["precoPedido"], 2, ',', '.');
                ?>
                  <div class="product">
                    <div class="row">
                      <div class="col-3">
                        <img class="img-fluid mx-auto d-block image" src="<?= $pedidoItem['urlimagemProduto'] ?>">
                      </div>
                      <div class="col-8">
                        <div class="info">
                          <div class="row">
                            <div class="col-5 product-name">
                              <div class="product-name">
                                <a href="#"><?= $pedidoItem["nomeProduto"] ?></a>
                              </div>
                            </div>
                            <div class="col-md-4 quantity">
                              <label for="quantity">Quantidade:</label>

                              <form action="cart.php" method="post">
                              <input type="hidden" name="acao" value="changeQuantity">
                                <input type="hidden" name="idPedidoItem" value="<?= $pedidoItem['idPedidoItem'] ?>">
                                <input id="quantity" type="number" name="quantity" value="<?= $pedidoItem['quantidadePedido'] ?>" min="1" class="form-control quantity-input">
                                <button type="submit">Salvar</button>
                              </form>

                              <form action="cart.php" method="POST">
                                <input type="hidden" name="acao" value="removeItem">
                                <input type="hidden" name="itemIndex" value="<?= $index ?>">
                                <button type="submit" class="lixeira" href=""><i class="fas fa-trash"></i></button>
                              </form>

                            </div>
                            <div class="col-md-3 price">
                              <span>R$<?= $preco ?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>

              </div>
            </div>
            <div class="col-lg-4">
              <div class="summary">
                <h3>Resumo</h3>
                <?php
                $precoTotal = 0;
                foreach ($pedidoItems as $pedidoItem) {
                  $preco = number_format($pedidoItem["quantidadePedido"] * $pedidoItem["precoPedido"], 2, ',', '.');
                  $precoTotal += ($pedidoItem["quantidadePedido"] * $pedidoItem["precoPedido"]);
                ?>
                  <div class="summary-item"><span class="text"><?= $pedidoItem["nomeProduto"] ?></span><span class="price">R$<?= $preco ?></span></div>

                <?php }
                $precoTotal = number_format($precoTotal, 2, ',', '.');
                ?>
                <div style="margin-top: 230px;" class="summary-item"><span style="font-size: 25px;" class="text">Total</span><span style="color: #298d97; font-size: 30px; font-weight: bold;" class="price">R$<?= $precoTotal ?></span></div>
                <hr>
              </div>
            </div>

            <div style="margin: 50px;" class="col-md-4">

              <a style="text-decoration: none;" href="produtos.php"><button style="font-size: 25px;" type="button" class="btn btn-info btn-lg btn-block">Continuar comprando</button></a>

            </div>
            <form action="./admin-funcionario/PageFuncionario.php" method="post">
              <input type="hidden" name="idPedido" value="<?= $_SESSION['idPedido'] ?>">
              <input type="hidden" name="acao" value="Comprar">
            <div style="margin-left: 220px; margin-top: 50px;" class="col-md-4">
              <a style="text-decoration: none;" href="endereco.php"><button style="font-size: 25px;" type="button" class="btn btn-success btn-lg btn-block">Finalizar compra</button></a>
            </div>
            </form>

          </div>
        </div>
      </div>
    </section>
  </main>
  <!--
    <div class="collapse navbar-collapse" id="nav-principal">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="favoritos.php" alt="Favoritos" class="nav-link"><i class="far fa-heart" style="font-size: 25px; margin-top: 7px;"></i></a>
        </li>
        
        <li class="nav-item">
          <a href="carrinho.php" class="nav-link"><i class="fas fa-shopping-cart" style="font-size: 25px; margin-top: 7px;"></i></a>
        </li>

        <li class="nav-item divisor"></li>
    </div> 
-->
  <footer>
    <!--Incio rodape-->
    <div class="container">
      <div class="row col-12">
        <div class="col-3">
          <h3 style="color: aliceblue;">TechMark</h3>
        </div>
        <div class="col-2">
          <h4>Conheça-nos</h4>
          <ul class="navbar-nav">
            <li><a href="">Sobre</a></li>
            <li><a href="">Informações Corporativas</a></li>
            <li><a href="">Carreira</a></li>
            <li><a href="">Novidades</a></li>
          </ul>
        </div>
        <div class="col-2">
          <h4>COMUNIDADES</h4>
          <ul class="navbar-nav">
            <li><a href="">Desenvolvedores</a></li>
            <li><a href="">Marcas</a></li>
          </ul>
        </div>
        <div class="col-2">
          <h4>Termo e condições de uso</h4>
          <ul class="navbar-nav">
            <li><a href="">Ajudas</a></li>
            <li><a href=""></a></li>
            <li><a href="">Política de Privacidade</a></li>
          </ul>
        </div>
        <div class="col-3">
          <h4>Formas de Pagamento</h4>
          <ul class="row">
            <li style="color: aliceblue; font-size: 34px;"><i class="fab fa-cc-visa"></i></li>
            <li style="color: aliceblue; font-size: 34px;"><i class="fab fa-cc-mastercard"></i></li>
            <li style="color: aliceblue; font-size: 34px;"><i class="fab fa-paypal"></i></li>
            <li style="color: aliceblue; font-size: 34px;"><i class="fas fa-money-bill-alt"></i></li>
            <li style="color: aliceblue; font-size: 34px;"><i class="fas fa-barcode"></i></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="footer">
      <p>Copyright &copy; 2022 TechMark | Todos os direitos reservados.</p>
    </div>
  </footer>
  <!--/Fim rodape-->
</body>

</html>