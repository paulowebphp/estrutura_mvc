<?php 

namespace app\controllers;
use app\core\Controller;

class ClienteController extends Controller
{

	public function lista()
	{
		echo "Estou listando os clientes";
		echo "<br>";


	}#END lista



	public function ver()
	{

		$this->load("v_cliente");

	}#END ver


}#END ClienteController


 ?>