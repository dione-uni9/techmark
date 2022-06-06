<?php
class AvaliacaoService 
{
    private $conexao;
	private $cadastro;

	public function __construct(Conexao $conexao,Cadastro $cadastro){
		$this->conexao = $conexao->conectar();
		$this->cadastro = $cadastro;
	}

    public function create(){
		$query = 'insert into avaliacoes(idPedidoAvaliacao,idNotaAvaliacao,idTextoAvaliacao) values (:idPedidoAvaliacao,:idNotaAvaliacao,:idNotaAvaliacao,:idTextoAvaliacao)';
    
	$stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':idPedidoAvaliacao',$this->cadastro->__get('email'));
    $stmt->bindValue(':idNotaAvaliacao',$this->cadastro->__get('notaavaliacao'));
    $stmt->bindValue(':idTextoAvaliacao',$this->cadastro->__get('comment'));
		$stmt->execute();

	}
}

?>