<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>TechMark - Endereço de Pagamento</title>
	<link rel="icon" href="../Assets/image/opencart-brands.svg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../Assets/css/my-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<header>
	<nav class="navbar navnbar-expan-sm">
		<div class="container">
		 <a href="index.php" class="logo"><h3 style="color: aliceblue;"><i style="margin-right: 2px;" class="fab fa-opencart"></i>TechMark</h3></a>
		</div>
	</nav>
</header>
<div class="heading">
	<p>Endereço de Entrega:</p>
	<hr style="margin-bottom: 60px;">
</div>
<body class="my-payment-page">
	<section class="h-100">
		<div class="container h-100" style="margin-block: 1%;">
			<div class="row justify-content-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">

                            <form method="POST" class="my-login-validation" novalidate="">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="nome-pagamento">Nome</label>
                                    <input type="text" class="form-control" value="Benedita " disabled id="nome-endereco" placeholder="Nome" required autofocus>
									<div class="invalid-feedback">
										Qual o seu nome?
									</div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="sobrenome-pagamento">Sobrenome</label>
                                    <input type="text" class="form-control" value="Luana Alves" disabled id="sobrenome-endereco" placeholder="Sobrenome" required autofocus>
									<div class="invalid-feedback">
										Qual seu sobrenome?
									</div>
                                  </div>
                                </div>
								
								<div class="form-row">
									<div class="form-group col-6">
										<label for="email">CPF:</label>
										<input id="cpf-endereco" value="193.156.599-61" disabled type="text" class="form-control" name="cpf" \
										pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
										title="Digite um CPF no formato: xxx.xxx.xxx-xx" required autofocus>
										<div class="invalid-feedback">
											CPF inválido
										</div>
									</div>                                 
										<div class="form-group col-1">
											<label for="phone">Telefone:</label>
											<input value="(44)" disabled type="tel" id="ddd-endereco" name="phone" pattern="[0-9]{2}" class="form-control" required autofocus>
											<div class="invalid-feedback">
												Preencha esse campo (DDD)
											</div>
										</div>
										<div style="margin-top: 33px;" class="form-group col-5">
											<input value="9999-9999" disabled type="tel" id="phone-endereco" name="phone" pattern="[0-9]{5}-[0-9]{4}" class="form-control" required autofocus>
											<div class="invalid-feedback">
												Preencha esse campo(xxxxxxxxx)
											</div>
										</div>
								</div>
                                
								<div class="form-group">
                                  <label for="inputAddress">Endereço</label>
                                  <input value="Rua Ranulfo Alves de Melo" disabled type="text" class="form-control" id="endereco-endereco" placeholder="Rua dos Bobos, nº 0" required autofocus>
								  	<div class="invalid-feedback">
										Endereço inválida
									</div>
                                </div>
                                
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input value="Betim" disabled type="text" class="form-control" id="cidade-endereco" required autofocus>
									<div class="invalid-feedback">
										Preencha esse campo
									</div>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputEstado">Estado</label>
                                    <select disabled id="estado-endereco" class="form-control" required autofocus>
                                      <option selected>MG</option>
                                      <option>...</option>
                                    </select>
									<div class="invalid-feedback">
										Preencha esse campo
									</div>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputCEP">CEP</label>
                                    <input  value="32671-268" disabled type="text" class="form-control" id="cep-endereco"required autofocus>
									<div class="invalid-feedback">
										CEP Inválido
									</div>
                                  </div>
                                </div>

								<div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputCity">Bairro</label>
									  <input value="Chácara" disabled type="text" class="form-control" id="bairro-endereco" required autofocus>
									  <div class="invalid-feedback">
										Preencha esse campo
									</div>
									</div>

									<div class="form-group col-md-2">
										<label for="inputCEP">Número</label>
										<input value="585" disabled type="text" class="form-control" id="numero-endereco" required autofocus>
										<div class="invalid-feedback">
											Preencha esse campo
										</div>
									  </div>

									  <div class="form-group col-md-4">
										<label for="inputCity">Complemento</label>
										<input value="Aqui na rua" disabled type="text" class="form-control" id="complemento-endereco" required autofocus>
										<div class="invalid-feedback">
											Preencha esse campo
										</div>
									  </div>

									  <div class="form-group col-12">
										<div class="custom-checkbox custom-control">
											<input onclick="checkedEndereco()" checked type="checkbox" name="escolha_endereco" id="escolha_endereco" class="custom-control-input"
												required="">
											<label for="escolha_endereco" class="custom-control-label"> Utilizar o meu endereço já cadastrado como endereço para a entrega.
										</div>
									</div>

								</div>
								
								<div class="row col-12">
									<div style="margin-top: 20px;"  class="form-group col-5">
										<a href="cart.php" class="nav-link" ><button type="button" class="btn btn-primary btn-block" style=" font-size: 25px; margin-top: 50px;">
											Voltar
										</button></a>
									</div>

									<div style="margin-left: 600px; margin-top: -85px;"  class="form-group col-5">
										<a href="payment.php" class="nav-link" ><button type="button" class="btn btn-success btn-block" style=" font-size: 25px;">
											Próximo passo
										</button></a>
									</div>
								</div>
                              </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="js/app.js"></script>
</body>
</html>
