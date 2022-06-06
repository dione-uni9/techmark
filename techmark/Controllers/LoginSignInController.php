<?php

    session_start();
class LoginController
{
    public static function login($email)
    {
        $email = $_POST['email'];

        $clienteService = new ClienteService;
        if ($clienteService->checkEmail($_POST['email']) == 'falso') {
            echo '<script> alert("Usuario não existe") </script>';

            echo '<script> window.location.href="login.php"; </script>';
        } else {
            if ($clienteService->checkSenha($_POST['email']) == false) {
                echo '<script> alert("Senha incorreta")</script>';
                echo '<script> window.location.href="login.php"; </script>';
            } else {
                $_SESSION['user'] = $clienteService->getCliente($email);

            }
        }
        
    }

    public static function loginFuncionario($email)
    {
        $email = $_POST['email'];

        $funcionarioService = new FuncionarioService;
        if ($funcionarioService->checkEmail($_POST['email']) == 'falso') {
            echo '<script> alert("Usuario não existe") </script>';

            echo '<script> window.location.href="login.php"; </script>';
        } else {
            if ($funcionarioService->checkSenha($_POST['email']) == false) {
                echo '<script> alert("Senha incorreta")</script>';
                echo '<script> window.location.href="login.php"; </script>';
            } else {
                $_SESSION['user'] = $funcionarioService->getFuncionario($email);

            }
        }
        
    }

    public static function finalizarSessao(){
        unset($_SESSION);
        session_destroy();
      }

    public static function validarLoginCliente() {
        if(!$_SESSION["user"]) {
          header("Location: ../Views/login.php");
        }
      }
}


/*class ControladorConta
{
    public static function processaRequisicao()
    {
        
        if (get_class($_SESSION['user']) == 'Cliente') {

            require_once "View/suaconta.php";
        } else 
        if (get_class($_SESSION['user']) == 'Funcionario') {
            $pedidos = Pedido::listarTodos();
            $pedidosAtendidos = Pedido::listaAtendidos();

            if(!empty($pedidosAtendidos)){
                $carrinhosAtend = array();
                $enderecosAtend = array();
                foreach ($pedidosAtendidos as $ped) {
                    $carrinhosAtend[] = Carrinho::acharCarrinhoPedido($ped->getCarrinho());
                    $enderecosAtend[] = Endereco::acharEnderecoPedido($ped->getCodigoPedido());
                }
            }
            if (!empty($pedidos)) {
                $carrinhos = array();
                $enderecos = array();
                foreach ($pedidos as $ped) {
                    $carrinhos[] = Carrinho::acharCarrinhoPedido($ped->getCarrinho());
                    $enderecos[] = Endereco::acharEnderecoPedido($ped->getCodigoPedido());
                }
            }
            require_once "View/telaFuncionario.php";
        }
    }
    public static function processaRequisicaoLogoff()
    {
        session_unset();
        echo '<script> window.location.href="home";  </script>';
    }

    public static function processaRequisicaoSeguranca()
    {

        require_once "View/telaseguranca.php";
    }
}


class ControladorCadastro
{
    public static function processaRequisicao()
    {
        require_once 'View/telacadastro.php';
    }
    public static function processaRequisicaoCadastro()
    {
        if (!isset($_POST['submitCadEnd'])) {
            $_SESSION['nomeCompleto'] = $_POST['nomeCompleto'];
            $_SESSION['cpf'] = $_POST['cpf'];
            $_SESSION['senha'] = $_POST['senha'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['DD'] = $_POST['DD'];
            $_SESSION['MM'] = $_POST['MM'];
            $_SESSION['AAAA'] = $_POST['AAAA'];
            $_SESSION['gender'] = $_POST['gender'];
            $_SESSION['metodo'] = $_POST['metodo'];
            $_SESSION['numeroDoCartao'] = $_POST['numeroDoCartao'];
            $_SESSION['CVV'] = $_POST['CVV'];
            $_SESSION['mes'] = $_POST['mes'];
            $_SESSION['ano'] = $_POST['ano'];

            require_once "View/addendereco.php";
        } else {
            $email = $_SESSION['email'];
            Usuario::processaCadastro();
            Endereco::cadastraEndereco();
            Pagamento::cadastraPagamento();

            
            session_unset();
            $_SESSION['user'] = Usuario::pegarUsuario($email);
            
           echo '<script> window.location.href="suaconta"; </script>';
        }
    }
    public static function processaRequisicaoAtualizar()
    {
        Usuario::atualizarCadastro();

        $_SESSION['user'] = Usuario::pegarUsuario($_POST['email']);
        echo "<script> window.location.href='telaseguranca' ;</script>";
    }
}*/
