<?php
session_start();

$idPedido = $_GET["idPedido"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TechMark - Meu carrinho</title>
  <link rel="icon" href="../../Assets/image/opencart-brands.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../Assets/css/my-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<header>
  <!--Incio cabecalho-->
  <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-black">
    <div class="container">
      <a style="color: #fff;
        font-size: 24px;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 700;
        letter-spacing: 2px;" href="setorPreparacao.php" class="navbar-brand"><i style="margin-right: 2px;" class="fab fa-opencart"></i>
        TechMark
      </a>



      <div class="collapse navbar-collapse" id="nav-principal">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a style="color: #fff; font-size: 21px; margin-inline-start: 0mm; text-decoration: none; font-weight: 700; letter-spacing: 2px;" href="setorPreparacao.php" class="navbar-brand">Olá, Fulano</button></a>
            <div class="row" style="font-size: 13px; font-weight: 800; margin-inline-start: 1mm; margin-inline-end: 100px;">
              <a style="color: #6699CC;" href="../private/loginAdm.php" class="nav-link col-md-5" style="margin-left: 0%;">Sair</a>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</header>

<body>

  <main class="page">

    <section class="shopping-cart dark">
      <section id="cadastro" style="background-color: blanchedalmond; height: 110px;;">

      </section>


      <nav style="background-color: black; height: 30px;" class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

      </nav>

      <div class="container">
        <div class="row">
          <div class="col mb-5">
            <h2 style="padding-top: -15px; margin-bottom: -30px; margin-top: 30px;">Preparar Pedido N° #00001:</h2>
          </div>
        </div>
        <div class="content">
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="items">
                <div class="product">
                  <div class="row">
                    <div class="col-3">
                      <img class="img-fluid mx-auto d-block image" src="../../Assets/image/img1.jpg">
                    </div>
                    <div class="col-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-5 product-name">
                            <div class="product-name">
                              <a href="#">Smartwatch</a>
                              <div class="product-info">
                                <div>Display: <span class="value">1.4 polegadas</span></div>
                                <div>Memória RAM: <span class="value">1GB</span></div>
                                <div>Armazenamento: <span class="value">4GB</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantidade:</label>
                            <input id="quantity" type="number" value="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>R$7.120,00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="../../Assets/image/img2.jpg">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Iphone 6 Plus</a>
                              <div class="product-info">
                                <div>Display: <span class="value">5.9 polegadas</span></div>
                                <div>Memória RAM: <span class="value">4GB</span></div>
                                <div>Armazenamento: <span class="value">64GB</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantidade:</label>
                            <input id="quantity" type="number" value="1" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>R$8,000,00</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="product">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="img-fluid mx-auto d-block image" src="../../Assets/image/img3.jpg">
                    </div>
                    <div class="col-md-8">
                      <div class="info">
                        <div class="row">
                          <div class="col-md-5 product-name">
                            <div class="product-name">
                              <a href="#">Notebook Acer</a>
                              <div class="product-info">
                                <div>Display: <span class="value">13 polegadas</span></div>
                                <div>Memória RAM: <span class="value">8GB</span></div>
                                <div>Armazenamento: <span class="value">500GB</span></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 quantity">
                            <label for="quantity">Quantidade:</label>
                            <input id="quantity" type="number" value="2" class="form-control quantity-input">
                          </div>
                          <div class="col-md-3 price">
                            <span>R$3.500,79</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">

              <div class="">
                <div style="margin-top: 13.3%; margin-left: 25%;" class="col-md-6 quantity">
                  <label style="font-size: 25px;" for="quantity">Separado:</label>
                </div>
                <div style="margin-top: 0.4%;" class="form-check">
                  <input style="margin-left: 40%;" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
                <div style="margin-top: 50%;" class="form-check">
                  <input style="margin-left: 40%;" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
                <div style="margin-top: 100%;" class="form-check">
                  <input style="margin-left: 40%;" class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>

              </div>
            </div>

            <form action="PageFuncionario.php" method="post">
              <input type="hidden" name="idPedido" value="<?= $idPedido ?>">
              <input type="hidden" name="acao" value="Preparar">

              <div style="margin-left: 730px; margin-top: 50px; margin-bottom: 40px;" class="col-md-4">
                <button style="font-size: 25px;" type="submit" class="btn btn-success btn-lg btn-block">Finalizar</button>
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