<?php
class ClienteService{

   //CRUD
	public function create(){
		$query = 'insert into Clientes(name,email,password,cpf,date,ddd,phone,sexo,rua,cidade,estado,cep,bairro,numero,complemento) values (:nomeUsuario,:emailUsuario,:senhaUsuario,:cpf,:date,:ddd,:phone,:sexo,:rua,:cidade,:estado,:cep,:bairro,:numero,:complemento)';
    
	$stmt = $this->conexao->prepare($query);
    $stmt->bindValue(':nomeUsuario',$this->cadastro->__get('name'));
    $stmt->bindValue(':emailUsuario',$this->cadastro->__get('email'));
    $stmt->bindValue(':senhaUsuario',$this->cadastro->__get('password'));
    $stmt->bindValue(':cpf',$this->cadastro->__get('cpf'));
    $stmt->bindValue(':date',$this->cadastro->__get('date'));
    $stmt->bindValue(':ddd',$this->cadastro->__get('ddd'));
    $stmt->bindValue(':phone',$this->cadastro->__get('phone'));
    $stmt->bindValue(':sexo',$this->cadastro->__get('sexo'));
    $stmt->bindValue(':rua',$this->cadastro->__get('rua'));
    $stmt->bindValue(':cidade',$this->cadastro->__get('cidade'));
    $stmt->bindValue(':estado',$this->cadastro->__get('estado'));
    $stmt->bindValue(':cep',$this->cadastro->__get('cep'));
    $stmt->bindValue(':bairro',$this->cadastro->__get('bairro'));
    $stmt->bindValue(':numero',$this->cadastro->__get('numero'));
    $stmt->bindValue(':complemento',$this->cadastro->__get('complemento'));
		$stmt->execute();

	}

	public function read(){
		$query = 'select 
		name,email,password,cpf,date,ddd,phone,sexo,rua,cidade,estado,cep,bairro,numero,complemento
		from 
		Clientes';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function update(){
		
		$query = "update Clientes SET name = :nomeUsuario, email = :emailUsuario,senha = :senhaUsuario,cpf = :cpf , date = :date, ddd = :ddd, phone = :phone, sexo = :sexo, rua = :rua, cidade = :cidade , estado = :estado, cep = :cep, bairro = :bairro, numero = :numero, complemento = :complemento
        WHERE id= :id";
		$stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nomeUsuario',$this->cadastro->__get('name'));
        $stmt->bindValue(':emailUsuario',$this->cadastro->__get('email'));
        $stmt->bindValue(':senhaUsuario',$this->cadastro->__get('password'));
        $stmt->bindValue(':cpf',$this->cadastro->__get('cpf'));
        $stmt->bindValue(':date',$this->cadastro->__get('date'));
        $stmt->bindValue(':ddd',$this->cadastro->__get('ddd'));
        $stmt->bindValue(':phone',$this->cadastro->__get('phone'));
        $stmt->bindValue(':sexo',$this->cadastro->__get('sexo'));
        $stmt->bindValue(':rua',$this->cadastro->__get('rua'));
        $stmt->bindValue(':cidade',$this->cadastro->__get('cidade'));
        $stmt->bindValue(':estado',$this->cadastro->__get('estado'));
        $stmt->bindValue(':cep',$this->cadastro->__get('cep'));
        $stmt->bindValue(':bairro',$this->cadastro->__get('bairro'));
        $stmt->bindValue(':numero',$this->cadastro->__get('numero'));
        $stmt->bindValue(':complemento',$this->cadastro->__get('complemento'));
		$stmt->bindValue(':id',$this->cadastro->__get('id'));
		return $stmt->execute();
	}


	public function delete(){
		$query = 'delete from Clientes WHERE id = :idUsuario';
		$stmt= $this->conexao->prepare($query);
		$stmt->bindValue(':idUsuario',$this->cadastro->__get('id'));
		$stmt->execute();
	}

	public function getClientes() {
		try {
		  $conexao =Conexao::conectar();
		  $sql = "SELECT * FROM usuarios";
		  $stmt = $conexao -> prepare($sql);
	
		  $stmt -> execute();
		  
		  $clientes = array();
	
		  while ($data = $stmt->fetch()) {
			$cliente = new ClienteModel($data['idUsuario'], $data['nomeUsuario'], $data['cpfUsuario'], $data['emailUsuario'], $data['senhaUsuario'], $data['dataUsuario'], $data['dddUsuario'], $data['telefoneUsuario'], $data["sexoUsuario"], $data['ruaUsuario'], $data['numeroRuaUsuario'], $data['cidadeUsuario'], $data['estadoUsuario'], $data['cepUsuario'], $data['bairroUsuario'], $data['complementoUsuario']);
			$cliente->setIdUsuario($data["idUsuario"]);
			$cliente->setNomeUsuario($data["nomeUsuario"]);
			$cliente->setCpfUsuario($data["cpfUsuario"]);
			$cliente->setSexoUsuario($data["sexoUsuario"]);
	
			array_push($clientes, $cliente);
		  }
	
		  return $clientes;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	  }

	  public static function checkEmail($email)
	  {
		try {
            $conexao = Conexao::conectar();

            $sql = $conexao->prepare("SELECT u.idUsuario, u.senhaUsuario from supermercadoweb.usuarios as u where u.emailUsuario = :email ");
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

            $sql = $conexao->prepare("SELECT u.senhaUsuario from supermercadoweb.usuarios as u where u.emailUsuario = :email ");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $query =  $sql->fetch(PDO::FETCH_ASSOC);

            if ($query['senhaUsuario'] !== $_POST['password']) {
                return false;
            } else return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getClienteById($userId)
	  {
		try {
			$conexao = Conexao::conectar();
			$sql = $conexao->prepare("SELECT * from supermercadoweb.usuarios as u where u.idUsuario = :id");
			$sql->bindParam("idUsuario", $id);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			$data = $sql->fetch(PDO::FETCH_ASSOC);
			$usuario = new ClienteModel($data['idUsuario'], $data['nomeUsuario'], $data['cpfUsuario'], $data['emailUsuario'], $data['senhaUsuario'], $data['dataUsuario'], $data['dddUsuario'], $data['telefoneUsuario'], $data["sexoUsuario"], $data['ruaUsuario'], $data['numeroRuaUsuario'], $data['cidadeUsuario'], $data['estadoUsuario'], $data['cepUsuario'], $data['bairroUsuario'], $data['complementoUsuario']);

			$id = $usuario->getIdUsuario();
			$user = new ClienteModel(
				$usuario->getNomeUsuario(),
				$usuario->getEmailUsuario(),
				$usuario->getSenhaUsuario(),
				$usuario->getCpfUsuario(),
				$usuario->getAniversarioUsuario(),
				$usuario->getDDDUsuario(),
				$usuario->getTelefoneUsuario(),
				$usuario->getSexoUsuario(),
				$usuario->getRuaUsuario(),
				$usuario->getCidadeUsuario(),
				$usuario->getEstadoUsuario(),
				$usuario->getCepUsuario(),
				$usuario->getBairroUsuario(),
				$usuario->getNumeroUsuario(),
				$usuario->getComplementoUsuario(),
				$id,
				//Carrinho::acharCarrinho($id)
			);

			return $user;
		} catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getCliente($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.usuarios as u where u.emailUsuario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario = new ClienteModel($data['idUsuario'], $data['nomeUsuario'], $data['cpfUsuario'], $data['emailUsuario'], $data['senhaUsuario'], $data['dataUsuario'], $data['dddUsuario'], $data['telefoneUsuario'], $data["sexoUsuario"], $data['ruaUsuario'], $data['numeroRuaUsuario'], $data['cidadeUsuario'], $data['estadoUsuario'], $data['cepUsuario'], $data['bairroUsuario'], $data['complementoUsuario']);

			$id = $usuario->getIdUsuario();
			$user = new ClienteModel(
				$usuario->getNomeUsuario(),
				$usuario->getEmailUsuario(),
				$usuario->getSenhaUsuario(),
				$usuario->getCpfUsuario(),
				$usuario->getAniversarioUsuario(),
				$usuario->getDDDUsuario(),
				$usuario->getTelefoneUsuario(),
				$usuario->getSexoUsuario(),
				$usuario->getRuaUsuario(),
				$usuario->getCidadeUsuario(),
				$usuario->getEstadoUsuario(),
				$usuario->getCepUsuario(),
				$usuario->getBairroUsuario(),
				$usuario->getNumeroUsuario(),
				$usuario->getComplementoUsuario(),
				$id,
			);

            return $user;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getNomeCliente($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.usuarios as u where u.emailUsuario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario = new ClienteModel($data['idUsuario'], $data['nomeUsuario'], $data['cpfUsuario'], $data['emailUsuario'], $data['senhaUsuario'], $data['dataUsuario'], $data['dddUsuario'], $data['telefoneUsuario'], $data["sexoUsuario"], $data['ruaUsuario'], $data['numeroRuaUsuario'], $data['cidadeUsuario'], $data['estadoUsuario'], $data['cepUsuario'], $data['bairroUsuario'], $data['complementoUsuario']);

			$nome = $usuario->getNomeUsuario();
			/*$id = $usuario->getIdUsuario();
			$user = new ClienteModel(
				$usuario->getNomeUsuario(),
				$usuario->getEmailUsuario(),
				$usuario->getSenhaUsuario(),
				$usuario->getCpfUsuario(),
				$usuario->getAniversarioUsuario(),
				$usuario->getDDDUsuario(),
				$usuario->getTelefoneUsuario(),
				$usuario->getSexoUsuario(),
				$usuario->getRuaUsuario(),
				$usuario->getCidadeUsuario(),
				$usuario->getEstadoUsuario(),
				$usuario->getCepUsuario(),
				$usuario->getBairroUsuario(),
				$usuario->getNumeroUsuario(),
				$usuario->getComplementoUsuario(),
				$id,
				//Carrinho::acharCarrinho($id)
			);*/
			$_SESSION['nomeCliente'] = $nome;
            return $_SESSION['nomeCliente'];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }

	  public static function getIdCliente($email)
	  {
		try {
            $conexao = Conexao::conectar();
            $sql = $conexao->prepare("SELECT * from supermercadoweb.usuarios as u where u.emailUsuario = :email");
            $sql->bindParam(":email", $email);
            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);
            $data = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario = new ClienteModel($data['idUsuario'], $data['nomeUsuario'], $data['cpfUsuario'], $data['emailUsuario'], $data['senhaUsuario'], $data['dataUsuario'], $data['dddUsuario'], $data['telefoneUsuario'], $data["sexoUsuario"], $data['ruaUsuario'], $data['numeroRuaUsuario'], $data['cidadeUsuario'], $data['estadoUsuario'], $data['cepUsuario'], $data['bairroUsuario'], $data['complementoUsuario']);

			$id = $usuario->getIdUsuario();
			$_SESSION['idCliente'] = $id;
            return $_SESSION['idCliente'];
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	  }
}


?>