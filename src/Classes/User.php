<?php
namespace Src\Classes;

class User
{
	private $username = 'root';
	private $password = 'root123';
	private $total_reg = 5;
	
	public function UserId(int $id): array
	{
		try {
			$conn = new \PDO('mysql:host=127.0.0.1;dbname=crud', $this->username, $this->password);
			$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id = :id');
			$stmt->execute(array('id' => $id));
			$rows = $stmt->rowCount();
			
			if($rows <= 0 ){
				throw new \Exception('Nenhum resultado retornado.');
			}
	
			return $stmt->fetchAll(\PDO::FETCH_OBJ);
			
		} catch(\PDOException | \Exception $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}	

	public function ListUsers(int $pagina): array
	{
		try {
			
			if (!$pagina) {
				$pc = "1";
			} else {
				$pc = $pagina;
			}
		
			$inicio = $pc - 1;
			$inicio = $inicio * $this->total_reg;
		
			$conn = new \PDO('mysql:host=127.0.0.1;dbname=crud', $this->username, $this->password);
			$stmt = $conn->prepare("SELECT * FROM usuarios LIMIT $inicio,$this->total_reg");
			$stmt->execute();

			$rows = $stmt->rowCount();
			
			if($rows <= 0 ){
				throw new \Exception('Nenhum resultado retornado.');
			}
	
			return $stmt->fetchAll(\PDO::FETCH_OBJ);
			
		} catch(\PDOException | \Exception $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}	
}
