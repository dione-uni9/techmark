<!DOCTYPE html>
<html lang="pt-br">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>TechMark - Cadastre-se</title>
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
				<h3 style="color: aliceblue;"><i style="margin-right: 2px;" class="fab fa-opencart"></i>TechMark</h3>
			</a>
		</div>
	</nav>
</header>
<div class="heading">
	<h4 style="margin-bottom: 20px; letter-spacing: 0em; font-size: 30px; ">Crie uma Conta rápido</h4>
	<p>Preencha o formulário abaixo</p>
	<hr>
</div>

<body class="my-login-page">
	<?php 
	
	$acao = '';
	require "../Controllers/ClienteController.php";

	
	?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<h3 style="color: aliceblue;">TechMark</h3>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><i class="fas fa-user"></i>Cadastre-se</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="../Controllers/ClienteController.php?acao=create">
								<div class="row col-12">
								<div class="form-group col-6">
									<label for="name">Nome completo:</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										Qual o seu nome?
									</div>
								</div>

								<div class="form-group col-6">
									<label for="email">Endereço de email:</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Seu email é inválido
									</div>
								</div>
								</div>
								<div class="row col-12">
								<div class="form-group col-6">
									<label for="password">Senha:</label>
									<input id="password" type="password" class="form-control" name="password" required
										data-eye>
									<div class="invalid-feedback">
										Senha inválida
									</div>
								</div>

								<div class="form-group col-6">
									<label for="password">Confirme sua Senha:</label>
									<input id="confirm_password" type="password" class="form-control"
										name="confirm_password" required data-eye>
									<div class="invalid-feedback">
										Senha inválida
									</div>
								</div>
								</div>
								<div class="row col-12">
								<div class="form-group col-5">
									<label for="cpf">CPF:</label>
									<input type="text" class="form-control" name="cpf"
										pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}"
										title="Digite um CPF no formato: xxx.xxx.xxx-xx" required>
									<div class="invalid-feedback">
										CPF inválido
									</div>
								</div>

								<div class="form-group col-4" style="margin-left: 60px;">
									<label for="date">Data de nascimento:</label>
									<input class="form-control" id="date" type="date" name="date" required>
									<div class="invalid-feedback">
										Data de aniversário inválido
									</div>
								</div>
								</div>
								<div class="row col-12">
								
								
								<div class="form-row col-6">
									<div class="form-group col-2">
										<label for="ddd">Telefone:</label>
										<input type="tel" id="ddd" name="ddd" pattern="[0-9]{2}" class="form-control"
											required>

									</div>
									<div class="form-group col-10">
										<input style="width: 95%; margin-top: 28px;" type="tel" id="phone" name="phone"
											pattern="[0-9]{5}-[0-9]{4}" class="form-control" required>
									</div>
									<div class="invalid-feedback">
										Qual o seu telefone? Ex: 71 99999-9999
									</div>
								</div>
								<div class="form-group col-4" style="margin-left: 15px; margin-top: 0px;">
									<label for="sex">Sexo:</label><br>
									<input type="radio" id="masculino" name="sexo" value="masculino" required>
									<label for="masculino">Masculino</label>
									<input style="margin-left: 15px;" type="radio" id="feminino" name="sexo" value="feminino" required>
									<label for="feminino">Feminino</label>
								</div>
								</div>

								<div class="form-group">
									<label for="inputAddress">Endereço</label>
									<input type="text" class="form-control" name="rua" id="inputAddress" placeholder="Rua dos Bobos, nº 0" required autofocus>
										<div class="invalid-feedback">
										  Endereço inválida
									  </div>
								  </div>
								  
								  <div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputCity">Cidade</label>
									  <input type="text" class="form-control" name="cidade" id="inputCity" required autofocus>
									  <div class="invalid-feedback">
										  Preencha esse campo
									  </div>
									</div>
									<div class="form-group col-md-4">
									  <label for="inputEstado">Estado</label>
									  <select id="inputEstado" name="estado" class="form-control" required autofocus>
										<option selected>Escolher...</option>
										<option>...</option>
									  </select>
									  <div class="invalid-feedback">
										  Preencha esse campo
									  </div>
									</div>
									<div class="form-group col-md-2">
									  <label for="inputCEP">CEP</label>
									  <input type="text" class="form-control" name="cep" id="inputCEP"required autofocus>
									  <div class="invalid-feedback">
										  CEP Inválido
									  </div>
									</div>
								  </div>
  
								  <div class="form-row">
									  <div class="form-group col-md-6">
										<label for="inputCity">Bairro</label>
										<input type="text" class="form-control" name="bairro" id="inputCity" required autofocus>
										<div class="invalid-feedback">
										  Preencha esse campo
									  </div>
									  </div>
  
									  <div class="form-group col-md-2">
										  <label for="inputCEP">Número</label>
										  <input type="text" class="form-control" name="numero" id="inputCEP" required autofocus>
										  <div class="invalid-feedback">
											  Preencha esse campo
										  </div>
										</div>
  
										<div class="form-group col-md-4">
										  <label for="inputCity">Complemento</label>
										  <input type="text" class="form-control" name="complemento" id="inputCity" required autofocus>
										  <div class="invalid-feedback">
											  Preencha esse campo
										  </div>
										</div>

								<div class="row col-12" style="margin-top: 20px; margin-bottom: 10px;">
								<div class="form-group col-6">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="wts" id="wts" class="custom-control-input">
										<label for="wts" class="custom-control-label">Receber notificações por whatsapp
											<i style="color: red;" class="fas fa-exclamation"></i></a></label>
									</div>
								</div>

								<div class="form-group col-6">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="termo" id="termo" class="custom-control-input"
											required="">
										<label for="termo" class="custom-control-label">Eu concordo com os <a
												href="#">Termos e Condições</a></label>
										<div class="invalid-feedback">
											Você deve concordar com nossos Termos e Condições
										</div>
									</div>
								</div>
								</div>
								<div class="form-group" style="width: 500px; margin-left: 120px;">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div style="margin: auto;" class="mt-2 text-center">
									Já tem uma conta? <a href="login.php">Conecte-se</a>
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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>

</html>