<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../Assets/">

    <title>TechMark</title>
    <link rel="icon" href="../Assets/image/opencart-brands.svg">
  </head>
  <body>

    <header ><!--Incio cabecalho-->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-black">
        <div class="container">
          <a style="color: #fff;
          font-size: 24px;
          text-transform: uppercase;
          text-decoration: none;
          font-weight: 700;
          letter-spacing: 2px;" href="index.php" class="navbar-brand"><i style="margin-right: 2px;" class="fab fa-opencart"></i>
            TechMark
          </a>
          <input style="margin-left: 15px; margin-right: 5px; border-radius: 25px; width: 45%;" class="form-control" type="search" placeholder="Busque aqui seu produto" aria-label="Search">
          <a href="resultados_busca.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></a>
          
          

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <!--
                  <form style="margin-top: 9px; margin-right: 50px;" class="form-inline">
                    <input width="500%" class="form-control mr-sm-2" type="search" placeholder="Busque aqui" aria-label="Search">
                    <button href="resultados_busca.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                  </form>-->
              </li>
              
              <li class="nav-item">
                <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart" style="font-size: 25px; margin-top: 15px;"></i></a>
              </li>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a style="color: #fff; font-size: 21px; margin-inline-start: 0mm; text-decoration: none; font-weight: 700; letter-spacing: 2px;" href="index.php" class="navbar-brand">Seja Bem-vindo, Fulano</button></a>
                <div class="row" style="font-size: 13px; font-weight: 800; margin-inline-start: 1mm; margin-inline-end: 100px;">
                    <a href="perfil-cliente.php" class="nav-link col-md-6">Ver perfil <a href="index.php" class="nav-link col-md-5" style="margin-left: 0%;">Sair</a>
                </div>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--Incio cabecalho-->
    <!---->
    <section id="home" class="d-flex"><!--Incio Seção-->
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12 capa">

           <div id="carousel-CompraCerta" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner"><!--Inicio inner-->
              <div class="carousel-item active">
                <h1>Descontos Exclusivos</h1>
                <a href="produtos.php" class="btn btn-lg btn-custom btn btn-roxo">Aproveite!</a>
                <a href="produtos.php" class="btn btn-custom btn-branco">Guia de Compras</a>
              </div>

              <div class="carousel-item">
                <h1>Os melhores Produtos</h1>
                <a href="login.php" class="btn btn-custom btn-branco"><i class="fas fa-shopping-cart"></i> Faça suas compras agora</a>
              </div>
            </div><!--/Fim inner-->

            <!--Controles-->

            <a href="#carousel-CompraCerta" class="carousel-control-prev" data-slide="prev"><i class="fas fa-angle-left"></i></a>
            <a href="#carousel-CompraCerta" class="carousel-control-next" data-slide="next"><i class="fas fa-angle-right"></i></a>


           </div>

          </div>
        </div>
      </div>
    </section><!--/Fim Seção-->

    </div>
  </div>

  <!-- Inner -->
  </div>

    <!--Fim seção de Produtos-->

    <footer><!--Incio rodape-->
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
      </footer><!--/Fim rodape-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>