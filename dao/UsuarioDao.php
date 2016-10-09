<?php 

require_once("Db.php");

class UsuarioDao extends Db{

	public function create(Usuario $usuario)
	{
		$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
		$stmt = $this->conectar()->prepare($sql);

		$nome = $usuario->getNome();
		$email = $usuario->getEmail();
		$senha = $usuario->getSenha();

		$stmt->bindParam(1, $nome, PDO::PARAM_STR);
		$stmt->bindParam(2, $email, PDO::PARAM_STR);
		$stmt->bindParam(3, $senha, PDO::PARAM_STR);

		try {
			$stmt->execute();	
		} catch (Exception $e) {
			return false;
			echo "Erro: " . $e->getMessage();
		}
		
		return true;

	}

	public function read()
	{
		$sql = "SELECT * FROM usuarios";
		$stmt = $this->conectar()->prepare($sql);
		
		try {
			$stmt->execute();
			return $stmt->fetchAll();
			//echo $stmt->rowCount();
		} catch (Exception $e) {
			$e->getMessage();
		}
		
	}

	public function delete($id)
	{
		$sql = "DELETE FROM usuarios WHERE id = ?";
		$stmt = $this->conectar()->prepare($sql);

		$stmt->bindParam(1, $id, PDO::PARAM_INT);

		try {
			
		return $stmt->execute();
                 	//echo $stmt->rowCount();
		} catch (Exception $e) {
			return false;
			echo $e->getMessage();			
		}

	}

	public function update(Usuario $usuario)
	{
		$sql = "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?";
		$stmt = $this->conectar()->prepare($sql);

		$nome = $usuario->getNome();
		$email = $usuario->getEmail();
		$senha = $usuario->getSenha();
		$id = $usuario->getId();

		$stmt->bindParam(1, $nome, PDO::PARAM_STR);
		$stmt->bindParam(2, $email, PDO::PARAM_STR);
		$stmt->bindParam(3, $senha, PDO::PARAM_STR);
		$stmt->bindParam(4, $id, PDO::PARAM_INT);

		try {
			return $stmt->execute();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getById($id)
	{
		$sql = "SELECT * FROM usuarios WHERE id = ?";
		$stmt = $this->conectar()->prepare($sql);
		$stmt->bindParam(1, $id, PDO::PARAM_INT);
		$stmt->execute();
		 return $stmt->fetch(PDO::FETCH_ASSOC);
	}

}

?>