<?php
session_start();
require_once "../Models/conexao.php";

require_once "../Models/Produto_Model.php";
require_once "../Models/Produto_Service.php";
require_once "../Controllers/ProdutosController.php";


if (empty($_GET)) {
  $produtos = ProdutosController::listarProdutos();
} else {
  $categoria = $_GET["categoria"];
  $produtos = ProdutosController::listarProdutosByCategoria($categoria);
}

// print "<pre>";
// print_r($produtos);
// print "</pre>";

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
    <link rel="stylesheet" type="text/css" href="../Assets/css/products-style.css">
    <link rel="stylesheet" type="text/css" href="../Assets/css/estilo.css">
    
    <title>TechMark</title>
    <link rel="icon" href="../Assets/image/opencart-brands.svg">
</head>

<body id="products" style="background: white">
  <header ><!--Incio cabecalho-->
    <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-black">
      <div class="container">
        <a style="color: #fff; 
        font-size: 24px;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 700;
        letter-spacing: 2px;" href="index.php" class="navbar-brand easy">
         <i style="margin-right: 2px;" class="fab fa-opencart"></i>TechMark
        </a>
        <input style="margin-left: 15px; margin-right: 5px; border-radius: 25px; width: 45%;" class="form-control" type="search" placeholder="Busque aqui seu produto" aria-label="Search">
        <a href="search.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></a>


        
        <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <!--
              <li class="nav-item">
                  <form style="margin-top: 9px; margin-right: 50px;" class="form-inline">
                    <input width="500%" class="form-control mr-sm-2" type="search" placeholder="Busque aqui" aria-label="Search">
                    <Compre Agora href="resultados_busca.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></Compre Agora>
                  </form>
              </li>-->
              <?php if (!isset($_SESSION['user'])) { ?>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="login.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-primary">Entrar</Compre Agora></a>
                
              </li>
              <li class="nav-item">
                <a href="cadastro.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-outline-primary">Inscrever-se</Compre Agora></a>
              </li>
              <?php } else { ?>
                <li class="nav-item">
                <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart" style="font-size: 25px; margin-top: 15px;"></i></a>
              </li>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a style="color: #fff; font-size: 21px; margin-inline-start: 0mm; text-decoration: none; font-weight: 700; letter-spacing: 2px;" href="index.php" class="navbar-brand">Seja Bem-vindo, <?php echo $_SESSION['nomeCliente'] ?></button></a>
                <div class="row" style="font-size: 13px; font-weight: 800; margin-inline-start: 1mm; margin-inline-end: 100px;">
                    <a href="perfil-cliente.php" class="nav-link col-md-6">Ver perfil <a href="../Views/index.php?logoff=1" class="nav-link col-md-5" style="margin-left: 0%;">Sair</a>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>

      </div>
    </nav>
  </header><!--Fim cabecalho-->
    
    

    <div class="container-prod">
           <!--menu-->
      <div class="sidenav">
      <br>
        <a href="produtos.php">Todos os produtos</a>
        <a href="produtos.php?categoria=eletronicos">Eletrônicos</a>
        <a href="produtos.php?categoria=eletrodomesticos">Eletrodomésticos</a>
        <a href="produtos.php?categoria=higienepessoal">Higiene Pessoal</a>
        <a href="produtos.php?categoria=bebidas">Bebidas</a>
        <a href="produtos.php?categoria=pereciveis">Hortifruit</a>
        <a href="produtos.php?categoria=produtosdelimpeza">Produtos de limpeza</a>
      </div>

          

      <div class="products-container pt-2" style="text-align: center;">
      <?php 
        if(isset($produtos)) {
          shuffle($produtos);
        }

        foreach ($produtos as $produto) { 
          $preco = number_format($produto->getPreco(), 2, ',', '.');
        ?>
        <div class="products text-center">
          <img src="<?= $produto->getUrlImagem() ?>" width="200px">
          <form action="cart.php" method="post">
            <input type="hidden" name="acao" value="addItem">
            <input type="hidden" name="preco" value="<?= $produto->getPreco() ?>">
            <input type="hidden" name="idProduto" value="<?= $produto->getId() ?>">
            <button type="submit" style="margin: 10px auto;" class="btn btn-primary">Adicionar ao carrinho</button>
          </form>
          <h3 class="item-title"><?= $produto->getNome() ?></h3>
          <p class="">R$ <?= $preco ?></p>
        </div>          
        <?php } ?> 
      </div>
    </div>

    <footer style="margin-top: 100%"><!--Incio rodape-->
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <h3 style="color: aliceblue;">TechMark</h3>
            </div>
            <div class="col-md-2">
             <h4>Conheça-nos</h4>
             <ul class="navbar-nav">
               <li><a href="">Sobre</a></li>
               <li><a href="">Informações Corporativas</a></li>
               <li><a href="">Carreira</a></li>
               <li><a href="">Novidades</a></li>
             </ul>
            </div>
            <div class="col-md-2">
              <h4>COMUNIDADES</h4>
             <ul class="navbar-nav">
               <li><a href="">Desenvolvedores</a></li>
               <li><a href="">Marcas</a></li>
             </ul>
            </div>
            <div class="col-md-2">
              <h4>Termo e condições de uso</h4>
             <ul class="navbar-nav">
               <li><a href="">Ajudas</a></li>
               <li><a href=""></a></li>
               <li><a href="">Política de Privacidade</a></li>
             </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <h4>Formas de Pagamento</h4>
                <li style="color: aliceblue; font-size: 40px;"><i class="fab fa-cc-visa"></i></li>
                <li  style="color: aliceblue; font-size: 40px;"><i class="fab fa-cc-mastercard"></i></li>
                <li  style="color: aliceblue; font-size: 40px;"><i class="fab fa-paypal"></i></li>
                <li  style="color: aliceblue; font-size: 40px;"><i class="fas fa-money-bill-alt"></i></li>
                <li  style="color: aliceblue; font-size: 40px;"><i class="fas fa-barcode"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </footer><!--/Fim rodape-->
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     
  
  
      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>