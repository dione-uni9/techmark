<?php

class Conexao{

	//Conexão no formato de classe
	

	public static function conectar(){
		$host = 'localhost';
		$dbname = 'u366947458_web';
		$user = 'u366947458_root';
		$pass = 'd283*&(ibd8hgFK';

		try{

			//construtor
			$conexao = new PDO("mysql:host=$host;dbname=$dbname",
				"$user","$pass"
			);
			$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conexao;

		} catch(PDOException $e){
			echo 'Mensagem de erro: '.$e->getMessage();
		}
	}

}


?>