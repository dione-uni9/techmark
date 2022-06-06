<?php
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TechMark - Pagamento</title>
  <link rel="icon" href="../Assets/image/opencart-brands.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Assets/css/my-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<header>
  <nav class="navbar navnbar-expan-sm">
    <div class="container">
      <a href="index.php" class="logo">
        <h3 style="color: aliceblue;"><i style="margin-right: 2px;" class="fab fa-opencart"></i>CompraCerta</h3>
      </a>
    </div>
  </nav>
</header>
<div class="heading">
  <p>Pagamento</p>
  <hr style="margin-bottom: 60px;">
</div>

<body class="my-payment-page">
  <main class="page">
    <section class="shopping-cart">
      <div class="container">
        <div class="content">
          <div class="row col-12">
            <section style="margin-left: 40px;" class="h-100 col-6">
              <div class="container h-100">
                <div class="row justify-content-center h-100">
                  <div class="card-wrapper">
                    <form method="POST" class="my-login-validation" novalidate="">
                      <div class="row col-12">
                        <div class="form-row col-12" style="margin-top: 4%;">
                          <div class="form-group col-12">
                            <label for="nome-pagamento">Formas de Pagamento</label><br>
                            <a href="#"><i style="color: #faa61a; font-size: 40px;" class="fab fa-cc-visa"></i></a>
                            <a href=""><i style="color: #ff5f00; font-size: 40px;" class="fab fa-cc-mastercard"></i></a>
                            <a href="#"><i style="color: #006fd0; font-size: 40px;" class="fab fa-cc-amex"></i></a>
                            <a href="#"><i style="color: #f3a847; font-size: 40px;"
                                class="fab fa-cc-amazon-pay"></i></a>
                            <a href="#"><i style="color: #1696d0; font-size: 40px;" class="fab fa-cc-paypal"></i></a>
                          </div>
                        </div>

                        <div class="form-row col-12">
                          <div class="form-group col-12">
                            <label for="nome-pagamento">Número do Cartão:</label>
                            <input type="number" class="form-control" id="numero-cartao"
                              placeholder="Digite somente números">
                          </div>
                        </div>

                        <div class="form-group col-12">
                          <label for="nome-pagamento">Nome Impresso no Cartão:</label>
                          <input type="text" class="form-control" id="nome-cartao"
                            placeholder="Digite o nome como impresso no cartão">
                        </div>

                        <div class="form-row col-12">
                          <div class="form-group col-5">
                            <label for="data-validade">Data de Validade:</label>
                            <input type="month" id="data-validade" class="form-control">
                          </div>
                          <div class="form-group col-3">
                            <label for="inputCEP">CVV:</label>
                            <input type="text" class="form-control" id="inputCEP">
                          </div>
                        </div>

                        <div class="form-row col-9">
                          <div class="form-group col-12">
                            <label for="data-validade">OPÇÕES DE PARCELAMENTO</label>
                            <select id="data-validade" class="form-control">
                              <option selected>1 x de R$18.620,79</option>
                              <option>2 x de R$9.310,40 S/Juros</option>
                              <option>3 x de R$6.206,93 S/Juros</option>
                              <option>4 x de R$4.655,20 S/Juros</option>
                              <option>5 x de R$3.724,16 S/Juros</option>
                              <option>6 x de R$3.103,47 S/Juros</option>
                              <option>7 x de R$2.660,11 S/Juros</option>
                              <option>8 x de R$2.327,60 S/Juros</option>
                              <option>9 x de R$2.068,98 S/Juros</option>
                              <option>10 x de R$1.862,08 S/Juros</option>
                            </select>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>

            <div class="row col-5" style="margin-left: 40px;">
              <div class="summary col-12" style="margin-top: 4%;">
                <h3>Resumo</h3>
                <div class="summary-item"><span class="text">Total em Produtos:</span><span
                    class="price">R$18.584,79</span></div>
                <!--<div class="summary-item"><span class="text">Frete</span><span class="price">R$36,00</span></div>-->
                <div style="margin-top: 50%;" class="summary-item"><span style="font-size: 25px;" class="text">Total:
                  </span><span style="color: #298d97; font-size: 26px; font-weight: bold;"
                    class="price">R$18.620,79</span></div>
              </div>
            </div>
          </div>
          <div class="row col-12">
            <div style="margin-left: 50px; margin-top: 120px;" class="col-2">
              <a style="text-decoration: none;" href="index.php"><button style="font-size: 25px;" type="button"
                  class="btn btn-danger btn-lg btn-block">Cancelar</button></a>
            </div>

            <div style="margin: 20px; margin-top: 120px;" class="col-2">
              <a style="text-decoration: none;" href="endereco.php"><button style="font-size: 25px;" type="button"
                  class="btn btn-primary btn-lg btn-block">Voltar</button></a>
            </div>
            
            <div style="margin-left: 320px;  margin-top: 120px;" class="col-3">
              <a style="text-decoration: none;" href="index.php"><button style="font-size: 25px;"
                  class="btn btn-success btn-lg btn-block">TechMark</button></a>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>

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
</body>

</html>