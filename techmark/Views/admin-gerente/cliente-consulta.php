<?php
session_start();
require_once "../../Models/conexao.php";

require_once "../../Models/Cliente_Model.php";
require_once "../../Models/Cliente_Service.php";
require_once "../../Controllers/ClienteController.php";

$clientes = ClienteController::getClientes()/* ["all"] */;

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
    <link rel="stylesheet" type="text/css" href="../../Assets/css/my-style.css">
    
    
		<!-- Bootstrap início -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Bootstrap fim -->

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script src="../js/app.js"></script>
    <title>TechMark</title>
    <link rel="icon" href="image/opencart-brands.svg">
    <header ><!--Incio cabecalho-->
    <nav class="navbar navbar-expand-md fixed-top navbar-black">
        <div class="container">
          <a style="color: #fff;
          font-size: 24px;
          text-transform: uppercase;
          text-decoration: none;
          font-weight: 700;
          letter-spacing: 2px;" href="PaginaGerente.php" class="navbar-brand"><i style="margin-right: 2px;" class="fab fa-opencart"></i>
            TechMark
          </a>
          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <?php if (!isset($_SESSION['user'])) { ?>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="login.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-primary">Entrar</Compre Agora></a>
                
              </li>
              <li class="nav-item">
                <a href="cadastro.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-outline-primary">Inscrever-se</Compre Agora></a>
              </li>
              <?php } else { ?>
                

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a style="color: #fff; font-size: 21px; margin-inline-start: 0mm; text-decoration: none; font-weight: 700; letter-spacing: 2px;" href="index.php" class="navbar-brand">Seja Bem-vindo, <?php echo $_SESSION['nomeFuncionario'] ?></button></a>
                <div class="row" style="font-size: 13px; font-weight: 800; margin-inline-start: 1mm; margin-inline-end: 100px;">
                    <a href="perfil-cliente.php" class="nav-link col-md-6">Ver perfil <a href="../Views/index.php?logoff=1" class="nav-link col-md-5" style="margin-left: 0%;">Sair</a>
                </div>
              </li>
              <?php } ?>

        </div>
    </header><!--Incio cabecalho-->

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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #6699CC;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  color: white;
}
    </style>
  </head>

  <body id="page-gerente">
  <section id="cadastro" style="height: 60px;">

    </section>

    <nav style="background-color: black; height: 30px;" class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <ul style="padding-left: 115px; margin-bottom: 10px; margin-top: -30px;" class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link" href="PaginaGerente.php">Funcionários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="pedidos-consulta.php">Pedidos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="cliente-consulta.php">Clientes</a>
      </li>
    </ul>

    <div class="container">
      <div class="row">
        <div class="col mb-5">
          <h2 >Consulta de Cliente:</h2>
          <hr>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Nome do Cliente" id="nome-cliente" />
        </div>

        <div class="col-md-4">
          <input type="text" class="form-control" id="cpf-funcionario" \
          pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ placeholder="Digite o CPF"/>
        </div>
        
        <div class="col-md-2">
          <select class="form-control" id="sexo-funcionario">
            <option value="">Sexo</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
          </select>
        </div>

        <div class="col-md-2 d-flex justify-content-end">
          <button type="button" class="btn btn-primary" onclick="pesquisarDespesa()">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>

        <div class="row">
          <div class="col">
            <table class="table" >
              <thead>
                <tr>
                  <th>Nome do Cliente</th>
                  <th>CPF</th>
                  <th>Sexo</th>
                </tr>
              </thead>
  
              <tbody id="listaDespesas">
              <?php
                  foreach ($clientes as $cliente) {
                    $nomeCliente = $cliente->getNomeUsuario();
                    $cpfCliente = $cliente->getCpfUsuario();
                    $sexoCliente = $cliente->getSexoUsuario();
                    if($sexoCliente == 1){
                      $sexoCliente = "Masculino";
                    } else $sexoCliente = "Feminino";
                  ?>
                    <tr>
                        <td><?= $nomeCliente ?></td>
                        <td><?= $cpfCliente ?></td>
                        <td><?= $sexoCliente ?></td>
                    </tr>
            <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      

    </div>

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
      
      <div class="" style="text-align: center; margin-top: 20px; color: rgb(221, 212, 212);">
      <p>Copyright &copy; 2022 TechMark | Todos os direitos reservados.</p>
      </div>
      </footer><!--/Fim rodape-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
  </body>
</html>