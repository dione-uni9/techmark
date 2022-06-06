<?php

require '../Models/conexao.php';
require '../Models/Funcionario_Service.php';
require '../Models/Carrinho_Service.php';
require '../Models/Cliente_Service.php';
require '../Views/cadastro.php';

$acao = isset($_GET['acao']) ? $_GET['acao']: $acao;

/*
GETs envolvendo SQL Query e POST de Consulta(Funcionários)
-- Nome, Email, Setor de Atuação*/
if($acao == 'read_funcionarios'){

	$cadastro = new Cadastro();
	$conexao = new Conexao();
	
	$cadastroService = new FuncionarioService($conexao,$cadastro);
	$cadastrosRecebidos = $cadastroService->read();

    return $cadastrosRecebidos;

}


/* GETs envolvendo SQL Query e POST de Consulta(Pedidos)
-- Nº Pedido, Data, Situação do pedido(andamento)
 */

if($acao == 'read_pedidos'){

	$cadastro = new Cadastro();
	$conexao = new Conexao();
	
	$cadastroService = new CarrinhoService($conexao,$cadastro);
	$cadastrosRecebidos = $cadastroService->getCarrinhos();

    return $cadastrosRecebidos;

}


/* GETs envolvendo SQL Query e POST de Consulta(Clientes)
-- Nome, CPF, Email e Telefone
 */

if($acao == 'read_clientes'){

	$cadastro = new Cadastro();
	$conexao = new Conexao();
	
	$cadastroService = new CadastroService($conexao,$cadastro);
	$cadastrosRecebidos = $cadastroService->read();

    return $cadastrosRecebidos;

}

?>