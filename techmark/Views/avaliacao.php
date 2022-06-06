<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>TechMark - Feeddback</title>
	<link rel="icon" href="image/opencart-brands.svg">
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
	<p>Deixe o seu Feedback!</p>
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
							<h4 class="card-title" style="font-size: 25px;"> Avaliação do pedido: #00001</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="text">Nome:</label>
									<input id="nome" type="text" class="form-control" name="nome" value="" required autofocus>
									<div class="invalid-feedback">
										Preencha o campo
									</div>
								</div>

                                <div class="form-group">
									<label for="text">Endereço de email:</label>
									<input id="nome" type="text" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Preencha o campo
									</div>
								</div>

								<div class="row">
									<div class="form-group col-12" style="margin-top: 5px;">
										<label for="text">Como foi a sua experiência de compra?</label><br>
										<div style="margin-top: 4px;">
											<input type="radio" id="ruim" name="text" value="ruim" required>
											<label for="ruim">Ruim</label>
											<input style="margin-left: 15px;" type="radio" id="boa" name="text" value="boa" required>
											<label for="boa">Boa</label>
											<input style="margin-left: 15px;" type="radio" id="otima" name="text" value="otima" required>
											<label for="otima">Ótima</label>
										</div>
									</div>
								</div>

                                <div class="form-group">
                                    <label for="comentario">Descreva a sua experiência:</label>
                                    <textarea class="form-control" rows="5" id="comment" type="text" required autofocus></textarea>
									<div class="invalid-feedback">
										Preencha esse campo
									</div>
                                  </div>

	

								<div class="form-group m-0">
									<button onclick="cadastarAvalicao()" type="submit" class="btn btn-primary btn-block">
										Enviar
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- Modal -->
    <div class="modal fade" id="modalCadastrarAvaliacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
		
		<div class="footer">
		<p>Copyright &copy; 2022 TechMark | Todos os direitos reservados.</p>
		</div>
	  </footer><!--/Fim rodape-->

	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="js/script.js"></script>
</body>
</html>
