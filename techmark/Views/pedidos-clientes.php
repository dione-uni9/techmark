<?php
session_start();
require_once "../Models/conexao.php";

require_once "../Models/Pedido_Model.php";
require_once "../Models/Pedido_Service.php";
require_once "../Controllers/PedidoController.php";
$idCliente = $_SESSION['idCliente'];
$idPedido = $_SESSION['idPedido'];
var_dump($idCliente);
$pedido = PedidoController::getPedidosByUser($idCliente);

$open = $pedido["open"];
$history = $pedido["history"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Assets/css/my-style.css">

  <!-- Bootstrap início -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Bootstrap fim -->

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="../Assets/js/app.js"></script>
  <title>TechMark</title>
  <link rel="icon" href="../Assets/image/opencart-brands.svg">
  <header>
    <!--Incio cabecalho-->
    <nav class="navbar navbar-expand-md fixed-top navbar-black">
      <div class="container">
        <a style="color: #fff;
            font-size: 24px;
            text-transform: uppercase;
            text-decoration: none;
            font-weight: 700;
            letter-spacing: 2px;" href="index.php" class="navbar-brand"><i style="margin-right: 2px;" class="fab fa-opencart"></i>
          TechMark
        </a>



        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">

          <?php if(isset($_SESSION['user'])) { ?>
                

                <li class="nav-item divisor"></li>
  
                <li class="nav-item">
                  <a style="color: #fff; font-size: 21px; margin-inline-start: 0mm; text-decoration: none; font-weight: 700; letter-spacing: 2px;" href="index.php" class="navbar-brand">Seja Bem-vindo, <?php echo $_SESSION['nomeCliente'] ?></button></a>
                  <div class="row" style="font-size: 13px; color: #fff; font-weight: 800; margin-inline-start: 1mm; margin-inline-end: 100px;">
                      <a href="perfil-cliente.php" class="nav-link col-md-6">Ver perfil <a href="../Views/index.php?logoff=1" class="nav-link col-md-5" style="margin-left: 0%;">Sair</a>
                  </div>
                </li>
                <?php } ?>
          </ul>
        </div>

      </div>
    </nav>
  </header>
  <!--Incio cabecalho-->

  <style>
    .dropbtn {
      color: black;
      padding: 18px;
      font-size: 20px;
      border: none;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: #6699CC;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      color: white;
    }
  </style>
</head>

<body id="page-gerente">
  <section id="cadastro" style="background-color: blanchedalmond; height: 110px;;">

  </section>


  <nav style="background-color: black; height: 30px;" class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

  </nav>

  <ul style="padding-left: 110px;" class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link " href="perfil-cliente.php">Informações Pessoais</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="pedidos-clientes.php">Meus Pedidos</a>
    </li>
  </ul>

  <section class="h-100">
    <div class="container h-100" style="margin-block: 1%;">
      <div class="row">
        <div class="col mb-5">
          <!-- SQL Query SELECT pedidos WHERE """pedidos.idCliente == idCliente AND pedidoAvaliado == FALSE""" simulação -->
          <h2 style="padding-top: -15px; margin-bottom: -30px; margin-top: 30px;">Pedidos em Andamento:</h2>
        </div>
      </div>
      <div class="row justify-content-center h-100">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">N° do Pedido</th>
              <th scope="col">Data</th>
              <th scope="col">Hora</th>
              <th scope="col">Status do Pedido</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            foreach ($open as $pedido) {
              $dataHora = explode(' ', $pedido->getDataDaCompra());
              $hora = $dataHora["1"];
              $data = explode('-', $dataHora["0"]);
              $data = implode('/', array_reverse($data));
          ?>
            <tr>
              <th style="font-size: 25px; color: royalblue;" scope="row">#<?= str_pad($pedido -> getId(), 10, "0", STR_PAD_LEFT) ?></th>
              <td><?= $data ?></td>
              <td><?= $hora ?></td>
              <td><?= $pedido -> getStatus() ?></td>
              <td><a href="avaliacao.php?idPedido=<?= $pedido -> getId() ?>"><button type="button" class="btn btn-warning">Avaliar</button></a></td>
            </tr>
          <?php } ?>

          </tbody>
        </table>


        <hr style="padding: 25px;">

        <div class="row">
          <div class="col mb-8">
            <!-- SQL Query SELECT pedidos WHERE """pedidos.idCliente == idCliente AND Pedido.pedidoAvaliado == TRUE""" simulação -->
            <h2 style="padding-top: -15px; margin-right: 900px;">Históricos de Pedidos:</h2>
          </div>
        </div>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">N° do Pedido</th>
              <th scope="col">Data</th>
              <th scope="col">Hora</th>
              <th scope="col">Status do Pedido</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php 
            foreach ($history as $pedido) {
              $dataHora = explode(' ', $pedido->getDataDaCompra());
              $hora = $dataHora["1"];
              $data = explode('-', $dataHora["0"]);
              $data = implode('/', array_reverse($data));
          ?>
            <tr>
              <th style="font-size: 25px; color: royalblue;" scope="row">#<?= str_pad($pedido -> getId(), 10, "0", STR_PAD_LEFT) ?></th>
              <td><?= $data ?></td>
              <td><?= $hora ?></td>
              <td><?= $pedido -> getStatus() ?></td>
              <td><a href="" class="btn btn-primary">Detalhe</a></td>
              <td><a href="" class="btn btn-success">Refazer Pedido</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="modalRegistraDespesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div id="modal_titulo_div">
          <h5 class="modal-title" id="modal_titulo"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal_conteudo"></div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" id="modal_btn">Voltar</button>
        </div>
      </div>
    </div>
  </div>
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

    <div class="" style="text-align: center; margin-top: 20px; color: rgb(221, 212, 212);">
      <p>Copyright &copy; 2022 TechMark | Todos os direitos reservados.</p>
    </div>
  </footer>
  <!--/Fim rodape-->

  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>