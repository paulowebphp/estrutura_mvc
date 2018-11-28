<?php 
namespace app\core;

class Model
{

	protected $db;

	abstract public function __construct()
	{

		$this->db = new \PDO(

			"mysql:
			dbname=".BANCO.";
			host=".SERVIDOR,
			USUARIO,
			SENHA

			);

	}#END __construct()

}#END class Model


 ?>