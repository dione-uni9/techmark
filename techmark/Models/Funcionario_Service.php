<?php
class FuncionarioService{

	public function getFuncionarios() {
		try {
		  $conexao =Conexao::conectar();
		  $sql = "SELECT * FROM funcionarios";
		  $stmt = $conexao -> prepare($sql);
	
		  $stmt -> execute();
		  
		  $funcionarios = array();
	
		  while ($data = $stmt->fetch()) {
			$funcionario = new FuncionarioModel($data["idFuncionario"], $data["nomeFuncionario"], $data["emailFuncionario"], $data["senhaFuncionario"], $data['ehGerente'], $data['setorFuncionario']);
			$funcionario->setIdFuncionario($data["idFuncionario"]);
			$funcionario->setNomeFuncionario($data["nomeFuncionario"]);
			$funcionario->setEmailFuncionario($data["emailFuncionario"]);
			$funcionario->setSenhaFuncionario($data["senhaFuncionario"]);
			$funcionario->setGerenteFuncionario($data["ehGerente"]);
			$funcionario->setSetorFuncionario($data["setorFuncionario"]);
	
			array_push($funcionarios, $funcionario);
		  }
	
		  return $funcionarios;
		} catch (PDOException $e) {
		  return null;
		}
	  }

	  public static function checkEmail($email)
	  {
		try {
            $conexao = Conexao::conectar();

            $sql = $conexao->prepare("SELECT u.idFuncionario, u.senhaFuncionario from supermercadoweb.Funcionarios as u where u.emailFuncionario = :email ");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $query =  $sql->fetch(PDO::FETCH_ASSOC);



            if ($query == false) {
                return 'falso';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function checkSenha($email)
	  {
		try {
            $conexao = Conexao::conectar();

            $sql = $conexao->prepare("SELECT u.senhaFuncionario from supermercadoweb.funcionarios as u where u.emailFuncionario = :email ");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $query =  $sql->fetch(PDO::FETCH_ASSOC);

            if ($query['senhaFuncionario'] !== $_POST['password']) {
                return false;
            } else return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getFuncionarioById($userId)
	  {
		try {
			$conexao = Conexao::conectar();
			$sql = $conexao->prepare("SELECT * from supermercadoweb.funcionarios as u where u.idFuncionario = :id");
			$sql->bindParam("idFuncionario", $id);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			$data = $sql->fetch(PDO::FETCH_ASSOC);
			$Funcionario = new FuncionarioModel($data['idFuncionario'], $data['nomeFuncionario'], $data['emailFuncionario'], $data['senhaFuncionario'], $data['ehGerente'], $data['setorFuncionario']);

			$id = $Funcionario->getIdFuncionario();
			$user = new FuncionarioModel(
				$Funcionario->getNomeFuncionario(),
				$Funcionario->getEmailFuncionario(),
				$Funcionario->getSenhaFuncionario(),
				$Funcionario->getGerenteFuncionario(),
				$Funcionario->getSetorFuncionario(),
				$id,
				//Carrinho::acharCarrinho($id)
			);

			return $user;
		} catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getFuncionario($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.funcionarios as u where u.emailFuncionario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $Funcionario = new FuncionarioModel($data['idFuncionario'], $data['nomeFuncionario'], $data['emailFuncionario'], $data['senhaFuncionario'], $data['ehGerente'], $data['setorFuncionario']);

			$id = $Funcionario->getIdFuncionario();
			$user = new FuncionarioModel(
				$Funcionario->getNomeFuncionario(),
				$Funcionario->getEmailFuncionario(),
				$Funcionario->getSenhaFuncionario(),
				$Funcionario->getGerenteFuncionario(),
				$Funcionario->getSetorFuncionario(),
				$id,
			);

            return $user;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getNomeFuncionario($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.funcionarios as u where u.emailFuncionario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $Funcionario = new FuncionarioModel($data['idFuncionario'], $data['nomeFuncionario'], $data['emailFuncionario'], $data['senhaFuncionario'], $data['ehGerente'], $data['setorFuncionario']);

			$nome = $Funcionario->getNomeFuncionario();
			/*$id = $Funcionario->getIdFuncionario();
			$user = new FuncionarioModel(
				$Funcionario->getNomeFuncionario(),
				$Funcionario->getEmailFuncionario(),
				$Funcionario->getSenhaFuncionario(),
				$Funcionario->getGerenteFuncionario(),
				$Funcionario->getSetorFuncionario(),
				$id,
				//Carrinho::acharCarrinho($id)
			);*/
			$_SESSION['nomeFuncionario'] = $nome;
            return $_SESSION['nomeFuncionario'];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getIdFuncionario($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.funcionarios as u where u.emailFuncionario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $Funcionario = new FuncionarioModel($data['idFuncionario'], $data['nomeFuncionario'], $data['emailFuncionario'], $data['senhaFuncionario'], $data['ehGerente'], $data['setorFuncionario']);

			$id = $Funcionario->getIdFuncionario();
			/*$id = $Funcionario->getIdFuncionario();
			$user = new FuncionarioModel(
				$Funcionario->getNomeFuncionario(),
				$Funcionario->getEmailFuncionario(),
				$Funcionario->getSenhaFuncionario(),
				$Funcionario->getGerenteFuncionario(),
				$Funcionario->getSetorFuncionario(),
				$id,
				//Carrinho::acharCarrinho($id)
			);*/
			$_SESSION['idFuncionario'] = $id;
            return $_SESSION['nomeFuncionario'];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getEhGerente($email)
	  {
		try {
			$conexao = Conexao::conectar();
			$sql = $conexao->prepare("SELECT * from supermercadoweb.funcionarios as u where u.emailFuncionario = :email");
			$sql->bindParam(":email", $email);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			$data = $sql->fetch(PDO::FETCH_ASSOC);
			$Funcionario = new FuncionarioModel($data['idFuncionario'], $data['nomeFuncionario'], $data['emailFuncionario'], $data['senhaFuncionario'], $data['ehGerente'], $data['setorFuncionario']);

			$ehGerente = $Funcionario->getGerenteFuncionario();

			$_SESSION['ehGerente'] = $ehGerente;
            return $_SESSION['ehGerente'];
		} catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }


}


?>