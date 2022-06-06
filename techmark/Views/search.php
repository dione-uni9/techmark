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
    <link rel="stylesheet" type="text/css" href="../Assets/css/products-style.css">

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
            letter-spacing: 2px;" href="products.php" class="navbar-brand">
              TechMark
            </a>
            <input style="margin-left: 15px; margin-right: 50px; border-radius: 25px; width: 45%;" class="form-control" type="search" placeholder="Busque aqui seu produto" aria-label="Search">
            <a href="search.php"><i style="margin-right: 20px;" id="lupa" onclick="" class="fas fa-search"></i></a>
            
            
            <li class="nav-item">
              <a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart" style="font-size: 25px; margin-top: 7px;"></i></a>
            </li>

            <li class="nav-item divisor"></li>

            <li class="nav-item">
              <a href="login.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-primary">Entrar</Compre Agora></a>
              
            </li>
            <li class="nav-item">
              <a href="cadastro.php" class="nav-link"><Compre Agora type="Compre Agora" class="btn btn-outline-primary">Inscrever-se</Compre Agora></a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header><!--Fim cabecalho-->
    
    
    

    <div class="container-prod">
           <!--menu-->
           <div class="sidenav">
            <a href="#about">Eletronicos</a>
            <a href="#services">Celulares</a>
            <a href="#clients">Eletrodomésticos</a>
            <a href="#contact">Cama,Mesa e Banho</a>
            <a href="#about">Higiene Pessoal</a>
            <a href="#about">Brinquedos</a>
            <a href="#about">Papelaria</a>
            <a href="#about">Hortifruit</a>
          </div>
        <div class="vertical-line"></div>
        <div class="search-stripe text-center">
              <!---filter-->
              <div class="filter mt-4 d-flex justify-content-between">
                <div class="">
                <label for="ordem"></label>
                <select class="form-select form-select-lg mb-3 mt-2" aria-label=".form-select-lg">
                    <option selected>Ordem alfabética A-Z</option>
                    <option value="1">Ordem alfabética Z-A</option>
                    <option value="2">Mais relevantes</option>
                    <option value="3">Maior preço</option>
                    <option value="3">Menor preço</option>
                    <option value="3">Mais vendidos</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="products-container-search mt-3">
        <!--products list-->
        <div class="product-list container">
            <p> Resultados para <strong>"Iphone 11"</strong></p>
          <div class="products">
            <img src='../Assets/image/img2.jpg' width="200px">
            <a href="#"><button class="btn btn-primary">Adicionar ao carrinho</button></a>
            <h3 class= "item-title">IPhone 6s</h3>
          </div>
          <div class="products">
            <img src='../Assets/image/img3.jpg' width="200px">  
            <a href="#"><button class="btn btn-primary">Adicionar ao carrinho</button></a>
            <h3 class= "item-title">Macbook Air</h3>
          </div>
    
          <div class="products">
            <img src='../Assets/image/img2.jpg' width="200px">
            <a href="#"><button class="btn btn-primary">Adicionar ao carrinho</button></a>
            <h3 class= "item-title">IPhone 6s</h3>  
          </div>
          
          <div class="products">
            <img src='../Assets/image/img2.jpg' width="200px">  
            <a href="#"><button class="btn btn-primary">Adicionar ao carrinho</button></a>
            <h3 class= "item-title">IPhone 6s</h3>  
          </div>

        </div>
          
          </div>
    </div>

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
      
  
  
  
  
  
  
  
  
  
  
  
  
  
  
     
  
  
      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
  </html>