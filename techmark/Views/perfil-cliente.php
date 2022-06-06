<?php
session_start();
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
    <link rel="icon" href="Assets/image/opencart-brands.svg">
    <header ><!--Incio cabecalho-->
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
    <section id="cadastro" style="background-color: blanchedalmond; height: 110px;;">

    </section>
    

    <nav style="background-color: black; height: 30px;" class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<!--
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <div class="dropdown">
                <a  class="nav-link dropbtn" href="perfil-cliente.php">Informações Pessoais</a>
              </div>
            </li>

            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropbtn" href="pedidos-cliente.php">Pedidos</a>
              </div>
            </li>
          </ul>
          
        </div>
        -->
        
      </div>

      
    </nav>

    <ul style="padding-left: 180px;" class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="perfil-cliente.php">Informações Pessoais</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pedidos-clientes.php">Meus Pedidos</a>
        </li>
      </ul>

	<section class="h-100">
		<div class="container h-100" style="margin-block: 1%;">
			<div class="row justify-content-center h-100">
				<div class="card-wrapper">
					<div class="card fat">
						<div class="card-body">
            <!-- SQL Query SELECT infoCliente WHERE """idCliente == idCliente -->
                            <form method="" class="my-login-validation" novalidate="">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="nome-pagamento">Nome Completo</label>
                                    <input type="text" class="form-control" disabled id="nome-cliente" placeholder="Martin Gabriel das Neves" required autofocus>
									<div class="invalid-feedback">
										Qual o seu nome?
									</div>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="sobrenome-pagamento">E-mail</label>
                                    <input type="email" class="form-control" id="email-cliente" placeholder="martingabrieldasneves-76@ddfnet.com.br" disabled required autofocus>
									<div class="invalid-feedback">
										Qual seu sobrenome?
									</div>
                                  </div>
                                </div>
								
								<div class="form-row">
									<div class="form-group col-4">
										<label for="cpf">CPF:</label>
										<input type="text" class="form-control" id="cpf-cliente" name="cpf-cliente" \
										pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ placeholder="xxxxxxxx" disabled
										 required autofocus>
										<div class="invalid-feedback">
											CPF inválido
										</div>
									</div>  
                                        
                                    <div class="form-group col-3">
                                        <label for="date">Data de nascimento:</label>
                                        <input class="form-control" id="date-cliente" type="date" disabled required>
                                        <div class="invalid-feedback">
                                            Data de aniversário inválido
                                        </div>
                                    </div>

										<div class="form-group col-1">
											<label for="phone">Telefone:</label>
											<input type="tel" id="ddd-cliente" name="phone" placeholder="71" disabled pattern="[0-9]{2}" class="form-control" required autofocus>
											<div class="invalid-feedback">
												Preencha esse campo (DDD)
											</div>
										</div>
										<div style="margin-top: 33px;" class="form-group col-4">
											<input type="tel" id="phone-cliente" name="phone" placeholder="9 999-9999" disabled pattern="[0-9]{5}-[0-9]{4}" class="form-control" required autofocus>
											<div class="invalid-feedback">
												Preencha esse campo(xxxxxxxxx)
											</div>
										</div>
								</div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label for="nome-pagamento">Senha</label>
                                      <input type="password" class="form-control" id="senha-cliente" disabled placeholder="xxxxxxx" required autofocus>
                                      <div class="invalid-feedback">
                                          Senha preencha o campo
                                      </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="sobrenome-pagamento">Confirme sua Senha</label>
                                      <input type="email" class="form-control" id="confirma-senha-cliente" placeholder="xxxxxxx" disabled required autofocus>
                                      <div class="invalid-feedback">
                                          Senha inválida
                                      </div>
                                    </div>
                                  </div>
                                
								<div class="form-group">
                                  <label for="inputAddress">Endereço</label>
                                  <input type="text" class="form-control" id="endereco-cliente" placeholder="Rua dos Bobos, nº 0" disabled required autofocus>
								  	<div class="invalid-feedback">
										Endereço inválida
									</div>
                                </div>
                                
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" class="form-control" id="cidade-cliente" placeholder="salvador" disabled required autofocus>
									<div class="invalid-feedback">
										Preencha esse campo
									</div>
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputEstado">Estado</label>
                                    <select id="estado-cliente" class="form-control" disabled required autofocus>
                                      <option selected>Escolher...</option>
                                      <option>...</option>
                                    </select>
									<div class="invalid-feedback">
										Preencha esse campo
									</div>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputCEP">CEP</label>
                                    <input type="text" class="form-control" placeholder="40000-000" disabled id="cep-cliente"required autofocus>
									<div class="invalid-feedback">
										CEP Inválido
									</div>
                                  </div>
                                </div>

								<div class="form-row">
									<div class="form-group col-md-6">
									  <label for="inputCity">Bairro</label>
									  <input type="text" class="form-control" id="bairro-cliente" placeholder="Costa Azul" disabled required autofocus>
									  <div class="invalid-feedback">
										Preencha esse campo
									</div>
									</div>

									<div class="form-group col-md-2">
										<label for="inputCEP">Número</label>
										<input type="text" class="form-control" placeholder="06" disabled id="numero-cliente" required autofocus>
										<div class="invalid-feedback">
											Preencha esse campo
										</div>
									  </div>

									  <div class="form-group col-md-4">
										<label for="inputCity">Complemento</label>
										<input type="text" class="form-control" id="complemento-cliente" disabled placeholder="Aqui na rua" required autofocus>
										<div class="invalid-feedback">
											Preencha esse campo
										</div>
									  </div>

									
								</div>
								
								<div class="row col-12">
									<div style="margin-left: 200px;"  class="form-group col-3">
										<a onclick="excluirPerfil()" href="#" class="nav-link" ><button  type="button" class="btn btn-danger btn-block" style=" font-size: 25px; margin-top: 50px; margin-left: 430px;">
											Excluir Perfil
										</button></a>
									</div>

									<div style="margin-left: 530px; margin-top: -84px;"  class="form-group col-3">
										<a href="#" class="nav-link" ><button onclick="alterarPerfil()" type="button" class="btn btn-warning btn-block" style=" font-size: 25px; margin-left: 330px;">
											Alterar
										</button></a>
									</div>
								</div>

                
                <div style="margin-left: -350px; margin-top: -84px;"  class="form-group col-3">
										<a href="#" class="nav-link" ><button onclick="salvarPerfil()" type="button" class="btn btn-success btn-block" style=" font-size: 25px; margin-left: 330px;">
											Salvar
										</button></a>
								</div>

                
                              </form>
						</div>
					</div>
				</div>
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
    <script src="./js/app.js"></script>

  </body>
</html>