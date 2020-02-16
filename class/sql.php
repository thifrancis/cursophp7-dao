<?php 

class Sql extends PDO {

	private $conexao;

	public function __construct (){

				$this->conexao = new PDO ("mysql:host=localhost; dbname=dbphp7", "root","");



	}

	private function setParams ($stantment, $parameters=array ()){;

			foreach ($parameters as $key => $value) {
				
				$stantment->bindParam($key,$value);

				$this->setParam($stantment,$key,$value);


			}
		}


	private function SetParam($statment, $key, $value){

		$statment->bindParam($key,$value);

	}
	

	public function query($rawQuery, $params = array()){

			$stmt = $this->conexao->prepare($rawQuery);

			$this->setParams($stmt, $params);

		$stmt->execute();

			return $stmt ;


	}


	public function select ($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);





	}


}




?>