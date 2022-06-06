<?php

session_start();

require_once "../../Models/conexao.php";
require_once "../../Models/Funcionario_Model.php";
require_once "../../Models/Funcionario_Service.php";
require_once "../../Controllers/LoginSignInController.php";
require_once "../../Controllers/FuncionarioController.php";

if ($_POST) {
  if ($_POST["acao"] == "login") {
	$option = $_POST["option"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    if($option === "Gerente"){
		$login = LoginController::loginFuncionario($email);
		$ehgerente = FuncionarioController::ehGerente($email);
		$nomeUser = FuncionarioController::getNomeFuncionario($email);
    	$idUser= FuncionarioController::getIdFuncionario($email);
		if($ehgerente){
			header("Location: ../admin-gerente/PaginaGerente.php");
		} else {echo '<script> alert("Acesso Negado 01!") </script>';}
    }else if ($option === "Funcionário") {
		$login = LoginController::loginFuncionario($email);
		$ehgerente = FuncionarioController::ehGerente($email);
		$nomeUser = FuncionarioController::getNomeFuncionario($email);
    	$idUser= FuncionarioController::getIdFuncionario($email);
		if(!$ehgerente){
		header("Location: ../admin-funcionario/PageFuncionario.php");} else {echo '<script> alert("Acesso Negado 03!") </script>';}
    } else echo '<script> alert("Acesso Negado 02!") </script>';
}
}

if(isset($_GET['logoff']) == 1){

 $logoff = LoginController::finalizarSessao();
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>TechMark - Login Administrativo</title>
	<link rel="icon" href="image/opencart-brands.svg">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../Assets/css/my-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<header>
	<nav class="navbar navnbar-expan-sm">
		<div class="container">
		 <a href="../index.php" class="logo"><h3 style="color: aliceblue;"><i style="margin-right: 2px;" class="fab fa-opencart"></i>TechMark</h3></a>
		</div>
	</nav>
</header>

<script>
	var id;
	function test(){
		id = document.getElementById('inputEstado').value

		if(id === 'Gerente'){
			window.location.href = '../admin-gerente/PaginaGerente.php'
		}else if(id === 'Funcionário'){
			window.location.href = '../admin-funcionario/PageFuncionario.php'
		}else{
			window.location.href = '#'
		}
	}
	
	</script>


<div class="heading">
	<p>Área de Acesso para Funcionários</p>
	<hr>
</div>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<h3 style="color: aliceblue;">TechMark</h3>
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"><i class="fas fa-user"></i> Entre com os seus dados:</h4>
							<form method="post" class="my-login-validation" novalidate="" action="loginAdm.php">
							<input type="hidden" name="acao" value="login">
								<div class="my-login-validation">
								<div class="form-group">
                                    <label for="inputEstado">Tipo de Acesso</label>
                                    <select name="option" id="inputEstado" class="form-control" required autofocus>
                                      <option selected>Escolher...</option>
                                      <option>Gerente</option>
									  <option>Funcionário</option>
                                    </select>
								</div>

								<div class="form-group">
									<label for="email">Endereço de email:</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email inválido
									</div>
								</div>

								<div class="form-group">
									<label for="password">Senha:
										<a style="float: right; margin-left: 560px;" href="../ForgottenPassword.php" class="float-right">
											Esqueceu sua senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Senha inválida
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Lembre de mim</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block" onclick="test()">
										Login
									</button></a>
								</div>
							</div>
							<!--</form>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer><!--Incio rodape-->
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

	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>
